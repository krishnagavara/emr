<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_registration extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($this->session->emr_login))
         {
             redirect('login');
         }
        $this->load->model('Patients_registration_model');
        $this->load->model('Common_model');
      
    }
    public function ajax_call(){
        $param=$_REQUEST;
        $response=$this->Patients_registration_model->ajax_call($param);
        echo json_encode($response);
 }
	public function index()
	{
      $data['title']='EMR::Patient Registration';
      $data['activecls']='Patients_registration';
      $var_array=array($this->session->userdata('office_id'));
      $data['patient_titles']=$this->Common_model->getpatient_titles($var_array);
      $data['citys']=$this->Common_model->getcity($var_array);
      $data['referral_masters']=$this->Common_model->getrefferalmaster($var_array);
      $data['opdinsurancecompany']=$this->Common_model->getopdinsurancecompany($var_array);
      $data['pateintcategory']=$this->Common_model->getpateintcategory($var_array);
      $data['doctors']=$this->Common_model->getdoctors($var_array);
      $data['appointmenttypes']=$this->Common_model->getappointmenttypeopd($var_array);
      $data['mrdnos']=$this->Common_model->getpateintmrdnos($var_array);
      $content=$this->load->view('master/patients_registration',$data,true);
      $this->load->view('includes/layout',['content'=>$content]);
	}
    private function fetch_data() 
    {
        $status=1;
        if(!$this->input->post('status'))
        {
            $status=0;
        }
       $return=array(
               "patients_registration"=>array(
                   "title"=>$this->input->post('patient_title_id'),
                   "fname"=>$this->input->post('fname'),
                   "lname"=>$this->input->post('lname'),
                   "gender"=>$this->input->post('gender_id'),
                   "ageyy"=>$this->input->post('agey'),
                   'agemm'=>$this->input->post('agem'),
                   'dob'=>$this->input->post('dob'),
                   'city'=>$this->input->post('city_id'),
                   'mobileno'=>$this->input->post('mobileno'),
                   'address'=>$this->input->post('address'),
                   'occupation'=>$this->input->post('occupation'),
                   'insurance_company_id'=>$this->input->post('insurance_company_id'),
                   'print'=>$this->input->post('print'),
                   'referral_masters_id'=>$this->input->post('referral_masters_id'),
                   'status'=>$status,
                   'image'=>$this->session->flashdata('profile_pic'),
                   'parent_id'=>$this->session->userdata('parent_id'),
                   'login_id'=>$this->session->userdata('login_id'),
                   'office_id'=> $this->session->userdata('office_id')
                  
               ),
             "appointment_details"=>array(
                 "appointment_date"=>date('Y-m-d',strtotime($this->input->post('appointment_date'))),
                 "appointment_time"=>($this->input->post('appointment_time'))?$this->input->post('appointment_time'):date('H:i:s'),
                 "patient_category_id"=>$this->input->post('patient_category_id'),
                 "emergency"=>$this->input->post('emergency_id'),
                 "doctor_id"=>$this->input->post('doctor_id'),
                 "apponitment_type_id"=>$this->input->post('appointment_type_id'),
                 "appointment_opd_charge_id"=>$this->input->post('opdcharge_id'),
                 "source"=>$this->input->post('source'),
                 "description"=>$this->input->post('description'),
                 "login_id"=>$this->session->userdata('login_id')
             ),
           
           );
            return $return;
    }
     public function getpatientdetails()
	{
		$this->form_validation->set_rules('sdate', 'Search Date', 'trim|required|min_length[1]|max_length[16]');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$sdate=trim(htmlentities($this->input->post('sdate')));
	    	$var_array=array($sdate,$this->session->userdata('office_id'));
	    	
	    		$getresult=$this->Patients_registration_model->getdatepatientdetails($var_array);
	    		if($getresult)
	    		{
	    			$html='<table id="tableid" class="table table-striped table-bordered opticaltable-list" style="width: 100%;">
                                <thead>
                                  <tr>
                                    <th>Sl No</th>
                                    <th>Patient Name</th>
                                    <th>Doctor Name</th>
                                    <th>MRD NO</th>
                                    <th>Date Of Birth</th>
                                    <th>Mobile No</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Waiting time</th>
                                     <th>Status</th>
                                     <th>Print</th>
                                     <th>Header Print</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                  </tr>
                                </thead><tbody>';
                     $sl=1;
                     $waiting_time=0;
	    			foreach($getresult as $data)
	    			{
	    				$checkTime = strtotime($data['appointment_time']);
	    				$checkTime =date('H:i:s', $checkTime);
	    				$loginTime = strtotime($data['appointment_time']);
	    				$time1 = new DateTime($data['appointment_time']);
						$time2 = new DateTime(date('H:i:s'));
						$interval = $time1->diff($time2);
						$diff= $interval->format('%s second(s)');
	    				$patient_registration_id=$data['patient_registration_id'];
	    				 $sqll = "select doctors_registration.name as doctorname from patient_appointment inner join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id where 
	    				 patient_registration_id=$patient_registration_id  order by patient_appointment.patient_appointment_id DESC";
				            $result_row=$this->db->query($sqll); 
				            $res= $result_row->result_array ();

	    				 $edit="<button type='button'  onclick=\"editdata('$patient_registration_id');\" class='btn btn-icon btn-warning mr-1 mb-1'><i class='la la-edit'></i></button>";

	    				  $print='<button onclick="printdata('.$patient_registration_id.')" type="button" class="btn btn-icon btn-info mr-1 mb-1"><i class="la la-print"></i></button>';

	    				   $hdprint='<button onclick="hdprintdata('.$patient_registration_id.')" type="button" class="btn btn-icon btn-success mr-1 mb-1"><i class="la la-print"></i></button>';

      					 $delete='<button onclick="deletedata('.$patient_registration_id.')" type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></button>';
                        $billing_time=$data['adate'].' '.$checkTime;
                        $waiting_time= $this->find_date_diff($billing_time,date('Y-m-d H:i:s')) ;
	    				$html.='<tr>
	    							<td>'.$sl.'</td>
	    							<td>'.$data['pateint_name'].'</td>
	    							<td>'.$res[0]['doctorname'].'</td>
	    							<td>'.$data['mrdno'].'</td>
	    							<td>'.$data['dateofbirth'].'</td>
	    							<td>'.$data['mobileno'].'</td>
	    						
	    							<td>'.$data['appointment_date'].'</td>
	    							<td>'.$data['appointment_time'].'</td>
	    							<td>'.$waiting_time.'</td>
	    							<td>'.$data['status'].'</td>
	    							<td>'.$print.'</td>
	    							<td>'.$hdprint.'</td>
	    							<td>'.$edit.'</td>
	    							<td>'.$delete.'</td>
	    						</tr>';
	    				$sl++;
	    			}
	    			$html.='</tbody></table>';

			      echo json_encode(array('msg' =>$html,'error'=>'','error_message' =>''));
	    		}
	    		else
	    		{
			        echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
	    		}
	    	
	    }
	    else
	    {
	         echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}
	 public function find_date_diff($fromdate,$todate) 
     {
        $date1=strtotime($fromdate);
        $date2=strtotime($todate);
        // Formulate the Difference between two dates
        $diff = abs($date1 - $date2); 

        $years = floor($diff / (365*60*60*24)); 


        $months = floor(($diff - $years * 365*60*60*24)
                                       / (30*60*60*24)); 

        $days = floor(($diff - $years * 365*60*60*24 - 
                     $months*30*60*60*24)/ (60*60*24));

        $hours = floor(($diff - $years * 365*60*60*24 
               - $months*30*60*60*24 - $days*60*60*24)
                                           / (60*60)); 


        $minutes = floor(($diff - $years * 365*60*60*24 
                 - $months*30*60*60*24 - $days*60*60*24 
                                  - $hours*60*60)/ 60); 

        $seconds = floor(($diff - $years * 365*60*60*24 
                 - $months*30*60*60*24 - $days*60*60*24
                        - $hours*60*60 - $minutes*60)); 
        $return="";
        if($years>0)
        {
           $return.="$years Year,";
        }
        if($months>0)
        {
          $return.="$months Month,"; 
        }
        if($days>0)
        {
          $return.="$days Days,";   
        }
        $hours=$hours.'Hours';
        $minutes=$minutes.'Minutes';
         $return.="$hours:$minutes";
         return $return;
      
    }
    public function getgender()
	{
		$this->form_validation->set_rules('getid', 'Patient Title', 'trim|required|min_length[1]|max_length[6]|numeric');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$getid=trim(htmlentities($this->input->post('getid')));
	    	$var_array=array($getid,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Patients_registration_model->checkval($var_array);
	    	if($chk_duplication[0]['cnt']>0)
	    	{
	    		$getresult=$this->Patients_registration_model->getgender($var_array);
	    		if($getresult)
	    		{
			      echo json_encode(array('msg' =>$getresult,'error'=>'','error_message' =>''));
	    		}
	    		else
	    		{
			        echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
	    		}
	    	}
	    	else
	    	{
	              echo json_encode(array('msg'=>'','error' =>'No Data Found','error_message' =>''));
	    	}
	    }
	    else
	    {
	         echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}
	public function getappointmentopd()
	{
		$this->form_validation->set_rules('getid', 'Appointment Type', 'trim|required|min_length[1]|max_length[6]|numeric');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$getid=trim(htmlentities($this->input->post('getid')));
	    	$sel=trim(htmlentities($this->input->post('sel')));
	    	if($sel==0)
	    	{
	    		$chkv='';
	    	}
	    	else
	    	{
	    		$chkv='1';
	    	}
	    	$var_array=array($getid,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Patients_registration_model->checkappointmentval($var_array);
	    	if($chk_duplication[0]['cnt']>0)
	    	{
	    		$getresult=$this->Patients_registration_model->getappointment($var_array);
	    		if($getresult)
	    		{
	    			$html='';
	    			$opd='';
	    			foreach($getresult as $data)
	    			{
	    				$opd.='<option value="'.$data['opdcharge_id'].'">'.$data['name'].' / '.$data['amount'].'</option>';
	    			}
	    			$html='<div id="div_modal'.$chkv.'" class="modal fade" role="dialog" style="margin-top: 10%;">
							        <div class="modal-dialog modal-sm">
							        <!-- Modal content-->
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h4 class="modal-title"></h4>
							                    <button type="button" class="close" data-dismiss="modal">&times;</button>
							                </div>
							                <div class="modal-body">
							                    <div class="row">
							                        <div class="col-lg-12 col-md-12" >
							                               <div class="row col-md-12">
							                                   <div class="col-md-12 form-group">
							                                         <label for="lastname">OPD Charge: <span class="text-danger">*</span></label>
							                                        <select class="form-control select2" name="opdcharge_id" id="opdcharge_id">'.$opd.'</select>
							                                    </div>
							                                </div>
							                        </div>
							                    </div>
							                </div>
							                <div class="modal-footer">
		<button id="save" class="btn btn-primary btn-sm" type="button"  data-dismiss="modal"><i class="fas fa-plus-square"></i>Submit</button>
	    <button type="button" id="mclose" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
							                </div>
							            </div>
							        </div>
							    </div>
							</form>';
			      echo json_encode(array('msg' =>$html,'error'=>'','error_message' =>''));
	    		}
	    		else
	    		{
			        echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
	    		}
	    	}
	    	else
	    	{
	              echo json_encode(array('msg'=>'','error' =>'No Data Found','error_message' =>''));
	    	}
	    }
	    else
	    {
	         echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}
    public function savedata()
	{
		$this->form_validation->set_rules('patient_title_id', 'Title', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[1]|max_length[40]');
		//$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[1]|max_length[40]');
		$this->form_validation->set_rules('gender_id', 'Gender', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('agey', 'Age Year', 'trim|required|min_length[1]|max_length[4]|numeric');
		//$this->form_validation->set_rules('agem', 'Age Month', 'trim|required|min_length[1]|max_length[2]|numeric');
		$this->form_validation->set_rules('dob', 'Date Of Birth', 'trim|required');
		//$this->form_validation->set_rules('city_id', 'City', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('mobileno', 'Mobile No', 'trim|required|min_length[10]|max_length[12]|numeric');
		$this->form_validation->set_rules('address', 'Address', 'trim|min_length[1]|max_length[100]');
		//$this->form_validation->set_rules('source', 'Source', 'trim|min_length[1]|max_length[50]');
		//$this->form_validation->set_rules('occupation', 'Occupation', 'trim|min_length[1]|max_length[50]');
		//$this->form_validation->set_rules('referral_masters_id', 'Referral name', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('insurance_company_id', 'OPD Insurance Name', 'trim|required|min_length[1]|max_length[10]|numeric');
	//	$this->form_validation->set_rules('patient_category_id', 'Patient Category', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('emergency_id', 'Emergency', 'trim|required|min_length[1]|max_length[2]|numeric');
		$this->form_validation->set_rules('doctor_id', 'Select Doctor', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('print', 'Print', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('appointment_type_id', 'Appointment Type', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('opdcharge_id', 'OPD Charge', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('logo','Patient Image','callback_file_check');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$mobileno=trim(htmlentities($this->input->post('mobileno')));
	    	$var_array=array($mobileno,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Patients_registration_model->checkduplicationpatient($var_array);
	    	if($chk_duplication[0]['cnt']==0)
	    	{
	    		$data=$this->fetch_data();
	    		$getresult=$this->Patients_registration_model->savedata($data);
	    		if($getresult)
	    		{
			      echo json_encode(array('msg' =>'Saved Successfully','error'=>'','error_message' =>''));
	    		}
	    		else
	    		{
			        echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
	    		}
	    	}
	    	else
	    	{
	              echo json_encode(array('msg'=>'','error' =>'This Mobile No already Used','error_message' =>''));
	    	}
	    }
	    else
	    {
	         echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}
	public function updatedata()
	{
		$this->form_validation->set_rules('id', 'Edit ID', 'trim|required|min_length[1]|max_length[1000]|numeric');
		$this->form_validation->set_rules('patient_title_id', 'Title', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[1]|max_length[40]');
		//$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[1]|max_length[40]');
		$this->form_validation->set_rules('gender_id', 'Gender', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('agey', 'Age Year', 'trim|required|min_length[1]|max_length[4]|numeric');
		//$this->form_validation->set_rules('agem', 'Age Month', 'trim|required|min_length[1]|max_length[2]|numeric');
		$this->form_validation->set_rules('dob', 'Date Of Birth', 'trim|required');
		//$this->form_validation->set_rules('city_id', 'City', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('mobileno', 'Mobile No', 'trim|required|min_length[10]|max_length[12]|numeric');
		$this->form_validation->set_rules('address', 'Address', 'trim|min_length[1]|max_length[100]');
		//$this->form_validation->set_rules('source', 'Source', 'trim|min_length[1]|max_length[50]');
		//$this->form_validation->set_rules('occupation', 'Occupation', 'trim|min_length[1]|max_length[50]');
		//$this->form_validation->set_rules('referral_masters_id', 'Referral name', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('insurance_company_id', 'OPD Insurance Name', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('patient_category_id', 'Patient Category', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('emergency_id', 'Emergency', 'trim|required|min_length[1]|max_length[2]|numeric');
		$this->form_validation->set_rules('doctor_id', 'Select Doctor', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('print', 'Print', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('appointment_type_id', 'Appointment Type', 'trim|required|min_length[1]|max_length[10]|numeric');
		//$this->form_validation->set_rules('opdcharge_id', 'OPD Charge', 'trim|required|min_length[1]|max_length[10]|numeric');
		$this->form_validation->set_rules('logo','Patient Image','callback_file_check');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$edit_id=trim(htmlentities($this->input->post('id')));
	    	$mobileno=trim(htmlentities($this->input->post('mobileno')));
	    	$var_array=array($edit_id,$mobileno,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Patients_registration_model->editcheck($var_array);
	    	if($chk_duplication[0]['cnt']==0)
	    	{
	    		$data=$this->fetch_data();
	    		$getresult=$this->Patients_registration_model->updatedata($data,$edit_id);
	    		if($getresult)
	    		{
		    		echo json_encode(array('msg'=>'Updated Successfully','error' =>'','error_message' =>''));
	    		}
	    		else
	    		{
	    			echo json_encode(array('msg'=>'','error' =>'Failed to Update','error_message' =>''));
	    		}
	    	}
	    	else
	    	{
	    		echo json_encode(array('msg'=>'','error' =>'Name already Used','error_message' =>''));
	    	}
	    }
	    else
	    {
	    echo json_encode(array('msg'=>'','error' =>'','error_message' =>$this->form_validation->error_array()));
	    }
	}

	public function editdata()
	{
		$this->form_validation->set_rules('getid', 'Get ID', 'trim|required|numeric');
		if($this->form_validation->run() == TRUE)
	    {
	    	$var_array=array($this->input->post('getid'),$this->session->userdata('office_id'));
	    	$getpateintdata=$this->Patients_registration_model->getpatienteditdata($var_array);
	    	if($getpateintdata)
	    	{
	    		echo json_encode(array('msg'=>$getpateintdata,'error' =>'','error_message' =>''));
	    	}
	    	else
	    	{
	    		echo json_encode(array('msg'=>'','error' =>'No data Found','error_message' =>''));
	    	}
	    }
	    else
	    {
	    	echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}

	 public function file_check($parameter){
        
         if(isset($_FILES['logo']['name']))
         {
        $str=$_FILES['logo']['name'];
        $allowed_mime_type_arr = array('image/jpeg','image/jpg','image/png');
        $mime = get_mime_by_extension($str);
        if(isset($str) && $str!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                
                return $this->upload();
            }else{
                $this->form_validation->set_message('file_check', 'Please select only jpeg/jpg/png file.');
                return false;
            }
        }else{
            if($this->input->post('profile_pic'))
            {
                $this->session->set_flashdata('profile_pic',$this->input->post('profile_pic'));
                return true;
            }
             $this->session->set_flashdata('profile_pic','temp.jpg');
             return true;
        }
         }  else {
             $this->session->set_flashdata('profile_pic','temp.jpg');
             return true;
         }
    }
    private function upload() {
		$host_tvm = 'erp1';
        $config['upload_path']   = 'images/profile/'; 
        $config['allowed_types'] = 'jpg|png|jpeg'; 
        $config['max_size']      = 2000; 
        $config['file_name']  = $host_tvm;
        // $config['max_width']     = 1024; 
        // $config['max_height']    = 768;  
        $this->load->library('upload');
        $this->upload->initialize($config);
        
        if ( ! $this->upload->do_upload('logo')) {
            $this->form_validation->set_message('file_check', $this->upload->display_errors());
            return false;
           }

        else { 
            
              $this->session->set_flashdata('profile_pic',$this->upload->data('file_name'));
             return TRUE;
   }
}

     public function deletedata()
	{
		$this->form_validation->set_rules('getid', 'Delete ID', 'trim|required|min_length[1]|max_length[100]|numeric');
	    if($this->form_validation->run() == TRUE)
	    {
	    	$delete_id=trim(htmlentities($this->input->post('getid')));
	    	$var_array=array($delete_id,$this->session->userdata('office_id'));
	    	$chk_duplication=$this->Patients_registration_model->deletecheck($var_array);
	    	if($chk_duplication[0]['cnt']==1)
	    	{
	    		$getresult=$this->Patients_registration_model->deletedata($delete_id);
	    		if($getresult)
	    		{
			       echo json_encode(array('msg'=>'Deleted Successfully','error'=>'','error_message' =>''));
	    		}
	    		else
	    		{
			      echo json_encode(array('msg'=>'','error'=>'Failed to Delete','error_message' =>''));
	    		}
	    	}
	    	else
	    	{
	            echo json_encode(array('msg'=> '', 'error'=> 'Delete ID Not Found','error_message' =>''));
	    	}
	    }
	    else
	    {
	      echo json_encode(array('msg'=>'','error'=>'','error_message' => $this->form_validation->error_array()));
	    }
	}
    private function fetch_data_followup() 
    {
    	  $return=array(
             "appointment_details"=>array(
                "patient_registration_id"=>$this->input->post('patient_registration_id'),
                "appointment_date"=>date('Y-m-d',strtotime($this->input->post('followup_appointment_date'))),
                 "appointment_time"=>($this->input->post('followup_appointment_time'))?$this->input->post('followup_appointment_time'):date('H:i:s'),
                 "patient_category_id"=>$this->input->post('followup_patient_category_id'),
                 "emergency"=>$this->input->post('followup_emergency_id'),
                 "doctor_id"=>$this->input->post('followup_doctor_id'),
                 "apponitment_type_id"=>$this->input->post('followup_appointment_type_id'),
                 "appointment_opd_charge_id"=>$this->input->post('opdcharge_id'),
                 "source"=>$this->input->post('followup_source'),
                 "description"=>$this->input->post('followup_description'),
                 "login_id"=>$this->session->userdata('login_id')
             ),
           
           );
            return $return;
       
    }
	 public function savefollowup()
	{
		$this->form_validation->set_rules('patient_registration_id', 'Patient ID', 'trim|required|min_length[1]|max_length[100000]|numeric');
		$this->form_validation->set_rules('followup_doctor_id', 'Doctor', 'trim|required|min_length[1]|max_length[40000]|numeric');
		$this->form_validation->set_rules('followup_appointment_type_id', 'Appointment Type', 'trim|required|min_length[1]|max_length[400000]|numeric');
		$this->form_validation->set_rules('opdcharge_id', 'Appointment OPD Charge
', 'trim|required|min_length[1]|max_length[100000]|numeric');
	//	$this->form_validation->set_rules('followup_emergency_id', 'Emergency', 'trim|required|min_length[1]|max_length[1]|numeric');
		//$this->form_validation->set_rules('followup_source', 'Source', 'trim|required|min_length[1]');
		$this->form_validation->set_rules('followup_appointment_date', 'Appointment Date', 'trim|required');
		$this->form_validation->set_rules('followup_appointment_time', 'Appointment Time', 'trim|required');
		//$this->form_validation->set_rules('followup_description', 'Description', 'trim|required');
		
	    if($this->form_validation->run() == TRUE)
	    {
	    	$mobileno=trim(htmlentities($this->input->post('mobileno')));
	    	$var_array=array($mobileno,$this->session->userdata('office_id'));
	    	
	    		$data=$this->fetch_data_followup();
	    		$getresult=$this->Patients_registration_model->savedatafollowup($data);
	    		if($getresult)
	    		{
			      echo json_encode(array('msg' =>'Saved Successfully','error'=>'','error_message' =>''));
	    		}
	    		else
	    		{
			        echo json_encode(array('msg' =>'','error'=> 'Failed to save','error_message' =>''));
	    		}
	    	
	    }
	    else
	    {
	         echo json_encode(array('msg'=>'','error'=> '','error_message' => $this->form_validation->error_array()));
	    }
	}
	public function print_appointment() 
  {
      $this->Patients_registration_model->print_bill($this->input->post('printpatient_registration_id'),$this->session->userdata('office_id'));
  }
  public function print_appointmenthd() 
  {
      $this->Patients_registration_model->print_billhd($this->input->post('printpatient_registration_id'),$this->session->userdata('office_id'));
  }

	
}