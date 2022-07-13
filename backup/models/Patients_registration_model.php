<?php
/**
 * Description of department_id_model
 *
 * @author Prabhu @29/06/2021
 */
class Patients_registration_model extends CI_Model{
 public function __construct()
	{
		parent::__construct();
	}

	public function checkval($var_array)
    {
        $sql = "select count(*) as cnt from patient_title where  patient_title_id = ? and office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function checkappointmentval($var_array)
    {
        $sql = "select count(*) as cnt from opdcharge where  appointment_type_id = ? and office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function getappointment($var_array)
    {
        $sql = "select opdcharge_id,name,amount from opdcharge where  appointment_type_id = ? and office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function getgender($var_array)
    {
        $sql = "select gender from patient_title where  patient_title_id = ? and office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function checkingval($var_array)
    {
        $sql = "select count(*) as cnt from department where  name = ? and office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function checkduplicationpatient($var_array)
	{
		$sql = "select count(*) as cnt from patient_registration where  mobileno = ? and office_id= ?";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
    public function getpatienteditdata($var_array)
    {
        $sql = "select * from patient_registration inner join patient_appointment on patient_registration.patient_registration_id=patient_appointment.patient_registration_id where patient_registration.patient_registration_id=? and office_id= ? order by patient_appointment.patient_appointment_id DESC LIMIT 1";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
	public function editcheck($var_array)
	{
		$sql = "select count(*) as cnt from patient_registration where patient_registration_id!=?  and mobileno = ? and office_id= ?";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
		return $res;
	}
	public function deletecheck($var_array)
	{
		$sql = "select count(*) as cnt from patient_registration where patient_registration_id=?  and office_id= ?";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
		return $res;
	}
	public function savedata($data)
    {
        $this->db->trans_begin();
        $patients_registrations=$data['patients_registration'];
        $last_mrd_number=$this->db->select('max(mrdno)+1 as last_mrd_number')
                         ->from('patient_registration')
                         ->where(array('office_id'=>$this->session->office_id))
                         ->get()->row()->last_mrd_number;
        if($last_mrd_number>0)
        {
            $mrdnumber=$last_mrd_number;
            $mrdnumber=sprintf("%'.04d", $mrdnumber);
        } else {
            $mrdnumber=1;
            $mrdnumber=sprintf("%'.04d", $mrdnumber);
        }

        $last_barcode_number=$this->db->select('max(barcode)+1 as last_barcode_number')
                         ->from('patient_registration')
                         ->where(array('office_id'=>$this->session->office_id))
                         ->get()->row()->last_barcode_number;
        if($last_barcode_number>0)
        {
            $barcode=$last_barcode_number;
            
        } else {
            $barcode=100000;
        }


        $patients_registrations['mrdno']=$mrdnumber;
        $patients_registrations['barcode']=$barcode;
        $this->db->insert('patient_registration',$patients_registrations);
        $patient_registration_id=$this->db->insert_id();
        $appointment_detail=$data['appointment_details'];
        $appointment_date=$appointment_detail['appointment_date'];
        $patient_token_no=$this->db->select('max(token_no)+1 as patient_token_no')
                         ->from('patient_appointment')
                         ->where(array('appointment_date'=>$appointment_date))
                         ->get()->row()->patient_token_no;
        if($patient_token_no>0)
        {
            $patient_token_no=$patient_token_no;
            
        } else {
            $patient_token_no=1;
        }
        $appointment_detail['token_no']=$patient_token_no;
        $appointment_detail['patient_registration_id']=$patient_registration_id;
        $this->db->insert('patient_appointment',$appointment_detail);
        if ($this->db->trans_status() === FALSE)
        {
                $this->db->trans_rollback();
                return FALSE;
        }
        else
        {
                $this->db->trans_commit();
                //$this->session->set_flashdata('sales_id',$sales_id);
                return TRUE;
        }
    }
    public function updatedata($data,$id)
    {
        $this->db->trans_begin();
        $last_patient_appointment_id=$this->db->select('max(patient_appointment_id) as last_patient_appointment_id')
                         ->from('patient_appointment')
                         ->where(array('patient_registration_id'=>$id))
                         ->get()->row()->last_patient_appointment_id;

        $patients_registrations=$data['patients_registration'];
        $this->db->set($patients_registrations);
        $this->db->where('patient_registration_id', $id);
        $this->db->update('patient_registration');

        $appointment_detail=$data['appointment_details'];
        $alreadyappointmentdate=$this->db->select('appointment_date')
                         ->from('patient_appointment')
                         ->where(array('patient_appointment_id '=>$last_patient_appointment_id))
                         ->get()->row()->appointment_date;

        $appointment_date=$appointment_detail['appointment_date'];
        if($alreadyappointmentdate!=$appointment_date)
        {
            $patient_token_no=$this->db->select('max(token_no)+1 as patient_token_no')
                             ->from('patient_appointment')
                             ->where(array('appointment_date'=>$appointment_date))
                             ->get()->row()->patient_token_no;
            if($patient_token_no>0)
            {
                $patient_token_no=$patient_token_no;
                
            } else {
                $patient_token_no=1;
            }
          $appointment_detail['token_no']=$patient_token_no;
        }
        $this->db->set($appointment_detail);
        $this->db->where('patient_appointment_id', $last_patient_appointment_id);
        $this->db->update('patient_appointment');
        if ($this->db->trans_status() === FALSE)
        {
                $this->db->trans_rollback();
                return FALSE;
        }
        else
        {
                $this->db->trans_commit();
                //$this->session->set_flashdata('sales_id',$sales_id);
                return TRUE;
        }
    }
    public function deletedata($id) 
    {
        $this->db->where('patient_registration_id', $id);
        if($this->db->delete('patient_registration'))
        {
            $this->db->where('patient_registration_id', $id);
            $this->db->delete('patient_appointment');
            return TRUE;
        }
    }
     public function savedatafollowup($data)
    {   
        $appointment_detail=$data['appointment_details'];
        $appointment_date=$appointment_detail['appointment_date'];
        $patient_token_no=$this->db->select('max(token_no)+1 as patient_token_no')
                         ->from('patient_appointment')
                         ->where(array('appointment_date'=>$appointment_date))
                         ->get()->row()->patient_token_no;
        if($patient_token_no>0)
        {
            $patient_token_no=$patient_token_no;
            
        } else {
            $patient_token_no=1;
        }
        $appointment_detail['token_no']=$patient_token_no;

        if($this->db->insert('patient_appointment',$appointment_detail))
        {
             return TRUE;
        }
    }
     public function getdatepatientdetails($var_array)
    {
        $sql = "SELECT DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_date as adate,appointment_time,mrdno,patient_appointment.patient_registration_id,title,CONCAT(fname , '',  lname ,'') AS pateint_name,DATE_FORMAT(dob,'%d/%m/%Y') AS dateofbirth,mobileno,if(status=1,'Active','Deactive') as status FROM patient_registration inner join  patient_appointment on  patient_registration.patient_registration_id=patient_appointment.patient_registration_id  where   appointment_date=?  and  office_id= ? order by patient_appointment_id DESC";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        return $res;
    }
       function ajax_call($requestData)
  {
  
    
    $office_id=$this->session->office_id;
    $columns = array(
      // datatable column index  => database column name
      0 =>'patient_registration_id ',
      1 =>'title'
     
    );
 
    $this->db->select('fname');//s.photo_no,s.photo_name'
    $this->db->from('patient_registration');
    $whrcon = array('office_id' => $office_id);
    $result = $this->db->get();
    $totalData = $result->num_rows();
    $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
   
 
    $sql = "SELECT mrdno,patient_registration_id,title,CONCAT(fname , '',  lname ,'') AS pateint_name,DATE_FORMAT(dob,'%d/%m/%Y') AS dateofbirth,mobileno,if(status=1,'Active','Deactive') as status";
    $sql.=" FROM patient_registration where office_id=$office_id ";
    // getting records as per search parameters
    $isFilterApply=0;
    if( !empty($requestData['search']['value']) ){   //name
      $sql.="  and (  OR fname LIKE '".$requestData['search']['value']."%'  ";
        $sql.="  OR lname LIKE '".$requestData['search']['value']."%'  ";
        $sql.="  OR mobileno LIKE '".$requestData['search']['value']."%') ";
        $isFilterApply=1;
      }
 
 
      $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."  desc     LIMIT ".$requestData['start']." ,".$requestData['length']."   ";  // adding length
      $result1 = $this->db->query($sql);
      
      if($isFilterApply==1){
        $totalFiltered =  $result1->num_rows(); 
      }

       // when there is a search parameter then we have to modify total number filtered rows as per search result.
      $row=$result1->result_array();

      for ($i=0; $i < count($row); $i++) {
			$patient_registration_id=$row[$i]['patient_registration_id'];

            $sqll = "select doctors_registration.name as doctorname from patient_appointment inner join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id where patient_registration_id=$patient_registration_id  order by patient_appointment.patient_appointment_id DESC";
            $result_row=$this->db->query($sqll); 
            $res= $result_row->result_array ();


	     $edit="<button type='button'  onclick=\"editdata('$patient_registration_id');\" class='btn btn-icon btn-warning mr-1 mb-1'><i class='la la-edit'></i></button>";

      	// $edit='<button  onclick="editdepartment_id('.$department_id_id.',1,$(this),'.$code.','.$name.','.$description.','.$status.')" type="button" class="btn btn-icon btn-warning mr-1 mb-1"><i class="la la-edit"></i></button>';
        $print='<button onclick="printdata('.$patient_registration_id.')" type="button" class="btn btn-icon btn-info mr-1 mb-1"><i class="la la-print"></i></button>';
      	$delete='<button onclick="deletedata('.$patient_registration_id.')" type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></button>';

        // if(($this->auth->lock_up('item_master',"category_id='$department_id_id'")) || ($this->auth->lock_up('supplier',"category_id='$department_id_id'")) ||in_array($department_id_id,[1,2,3]))
        //   {
        //       $delete='<button type="button" class="btn btn-icon btn-primary mr-1 mb-1"><i class="la la-lock"></i></button>';
        //   }
        //   if(in_array($department_id_id,[1,2,3]))
        //   {
        //       $edit='<button type="button" class="btn btn-icon btn-primary mr-1 mb-1"><i class="la la-lock"></i></button>';
        //   }
     
        $row[$i]['slno']=$i+1;
        $row[$i]['doc']=$res[0]['doctorname'];
        $row[$i]['print']=$print;
        $row[$i]['edit']=$edit;
        $row[$i]['delete']=$delete;
        
      }


      $json_data = array(
        "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
        "recordsTotal"    => intval( $totalData ),  // total number of records
        "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
        "data"            =>   $row  // total data array
 
      );
      return $json_data;
 
  }
  function print_billhd($patient_registration_id,$office_id)
  {
        $last_patient_appointment_id=$this->db->select('max(patient_appointment_id) as last_patient_appointment_id')
                         ->from('patient_appointment')
                         ->where(array('patient_registration_id'=>$patient_registration_id))
                         ->get()->row()->last_patient_appointment_id;
                        
    $office=$this->db->get_where('office',"office_id=$office_id")->row();
    $data['logo']=($office->logo=='')?'':"<img style='width:10%;max-height:100px' src='". base_url('images/profile/')."$office->logo'>";
    
    $data['company_name']=$office->printable_company_name;
    $data['company_address']=$office->printable_company_address;
    $data['company_mobile']=$office->printable_company_mobile;
    $data['company_land_phone']=$office->printable_company_phone;
    $data['company_email']=$office->printable_emailid;
    $data['company_gst']=$office->license_no;
    $data['print_declaration']=$office->declaration;
    $data['gstin_no']=$office->gstin_no;

   $patient_details=$this->db->get_where('patient_registration',"patient_registration_id=$patient_registration_id")->row();
   $data['fname']=$patient_details->fname; 
   $data['lname']=$patient_details->lname; 
   $data['mrdno']=$patient_details->mrdno; 
   $data['address']=$patient_details->address; 
   if($patient_details->gender==1)
   {
    $age='Male';
   }
   elseif($patient_details->gender==2)
   {
    $age="Female";
   }
   else
   {
    $age='Transgender';
   }
   $data['gender']=$age; 
   $data['ageyy']=$patient_details->ageyy; 
   $data['agemm']=$patient_details->agemm; 
   $title_id=$patient_details->title; 
   $data['titlename']=$this->db->get_where('patient_title',"patient_title_id=$title_id")->row()->name;
   
   

                      

   $patient_appointment=$this->db->get_where('patient_appointment',"patient_appointment_id=$last_patient_appointment_id")->row();
    if($patient_appointment->updated_date)
    {
        $data['created_date']=$patient_appointment->updated_date; 
    }
    else
    {
        $data['created_date']=$patient_appointment->created_date; 
    }
   
   
   $data['token_no']=$patient_appointment->token_no; 
   $data['doctorname']=$this->db->get_where('doctors_registration',"doctors_registration_id=$patient_appointment->doctor_id")->row()->name;
   $data['username']=$this->db->get_where('user',"user_id=$patient_appointment->login_id")->row()->name;
   $data['token_no']=$patient_appointment->token_no; 
   $data['appointment_date']=$this->date->dateSql2View($patient_appointment->appointment_date);
   
         switch($patient_details->print)
            {
            case 1:$html=$this->load->view("master/a4printhd",$data, true); 
                   $print_config=[
                                    'format' => 'A4',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 10,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
            case 2:$html=$this->load->view("master/a4printhd",$data, true); 
                   $print_config=[
                                    'format' => 'A4-L',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 5,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
           case 3:$html=$this->load->view("master/a4printhd",$data, true); 
        
           
                   $print_config=[
                                    'format' => 'A5',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 5,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
              case 4:$html=$this->load->view("master/a4printhd",$data, true); 
                   $print_config=[
                                    'format' => 'A5-L',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 10,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
            }

            $mpdf = new \Mpdf\Mpdf($print_config);
            $pdfFilePath ="print-".time().".pdf"; 
            $labName='';
            $mpdf->SetWatermarkText($labName,0.03);
            $mpdf->showWatermarkText = true;
            $mpdf -> SetDisplayMode('fullpage');
            $mpdf->WriteHTML($html);
            $mpdf->Output();
           
  }

  function print_bill($patient_registration_id,$office_id)
  {
        $last_patient_appointment_id=$this->db->select('max(patient_appointment_id) as last_patient_appointment_id')
                         ->from('patient_appointment')
                         ->where(array('patient_registration_id'=>$patient_registration_id))
                         ->get()->row()->last_patient_appointment_id;
                        
    $office=$this->db->get_where('office',"office_id=$office_id")->row();
    $data['logo']=($office->logo=='')?'':"<img style='width:10%;max-height:100px' src='". base_url('images/profile/')."$office->logo'>";
    
    $data['company_name']=$office->printable_company_name;
    $data['company_address']=$office->printable_company_address;
    $data['company_mobile']=$office->printable_company_mobile;
    $data['company_land_phone']=$office->printable_company_phone;
    $data['company_email']=$office->printable_emailid;
    $data['company_gst']=$office->license_no;
    $data['print_declaration']=$office->declaration;
    $data['gstin_no']=$office->gstin_no;

   $patient_details=$this->db->get_where('patient_registration',"patient_registration_id=$patient_registration_id")->row();
   $data['fname']=$patient_details->fname; 
   $data['lname']=$patient_details->lname; 
   $data['mrdno']=$patient_details->mrdno; 
   $data['address']=$patient_details->address; 
   if($patient_details->gender==1)
   {
    $age='Male';
   }
   elseif($patient_details->gender==2)
   {
    $age="Female";
   }
   else
   {
    $age='Transgender';
   }
   $data['gender']=$age; 
   $data['ageyy']=$patient_details->ageyy; 
   $data['agemm']=$patient_details->agemm; 
   $title_id=$patient_details->title; 
   $data['titlename']=$this->db->get_where('patient_title',"patient_title_id=$title_id")->row()->name;
   
   

                      

   $patient_appointment=$this->db->get_where('patient_appointment',"patient_appointment_id=$last_patient_appointment_id")->row();
    if($patient_appointment->updated_date)
    {
        $data['created_date']=$patient_appointment->updated_date; 
    }
    else
    {
        $data['created_date']=$patient_appointment->created_date; 
    }
   
   
   $data['token_no']=$patient_appointment->token_no; 
   $data['doctorname']=$this->db->get_where('doctors_registration',"doctors_registration_id=$patient_appointment->doctor_id")->row()->name;
   $data['username']=$this->db->get_where('user',"user_id=$patient_appointment->login_id")->row()->name;
   $data['token_no']=$patient_appointment->token_no; 
   $data['appointment_date']=$this->date->dateSql2View($patient_appointment->appointment_date);
   
         switch($patient_details->print)
            {
            case 1:$html=$this->load->view("master/a4print",$data, true); 
                   $print_config=[
                                    'format' => 'A4',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 10,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
            case 2:$html=$this->load->view("master/a4print",$data, true); 
                   $print_config=[
                                    'format' => 'A4-L',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 5,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
           case 3:$html=$this->load->view("master/a4print",$data, true); 
        
           
                   $print_config=[
                                    'format' => 'A5',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 5,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
              case 4:$html=$this->load->view("master/a4print",$data, true); 
                   $print_config=[
                                    'format' => 'A5-L',
                                    'margin_left' => 10,
                                    'margin_right' => 10,
                                    'margin_top' => 10,
                                    'margin_bottom' => 10,
                                    'margin_header' => 0,
                                    'margin_footer' => 0,
                                ];
                                break;
            }

            $mpdf = new \Mpdf\Mpdf($print_config);
            $pdfFilePath ="print-".time().".pdf"; 
            $labName='';
            $mpdf->SetWatermarkText($labName,0.03);
            $mpdf->showWatermarkText = true;
            $mpdf -> SetDisplayMode('fullpage');
            $mpdf->WriteHTML($html);
            $mpdf->Output();
           
  }

}