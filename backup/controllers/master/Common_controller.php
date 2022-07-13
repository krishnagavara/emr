<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_controller extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($this->session->emr_login))
         {
             redirect('login');
         }
        
        $this->load->model('Common_model');
      
    }

    public function getsearchval()
  {
    $this->form_validation->set_rules('getid', 'Patient Search Details', 'trim|required|min_length[1]|max_length[1]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $getid=trim(htmlentities($this->input->post('getid')));
        $var_array=array($this->session->userdata('office_id'));
        $issetcheckval=$this->Common_model->issetcheckval($var_array);
        if($issetcheckval[0]['cnt']>0)
        {
          $getresult=$this->Common_model->getpatientdetailssearch($getid,$this->session->userdata('office_id'));
          if($getresult)
          {
            $id=$getid;
            $selbox='<option value="">Select Details</option>';
            if($id==1){$chk='mrdno';}elseif ($id==2){$chk='mobileno';}elseif ($id==3){$chk='address';}elseif ($id==4){$chk='barcode';}
            
             foreach($getresult as $data)
             {
              $selbox.='<option value="'.$data['patient_registration_id'].'">'.$data[$chk].'</option>';
             }
            echo json_encode(array('msg' =>$selbox,'error'=>'','error_message' =>''));
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

  public function getparticulars()
  {
    $this->form_validation->set_rules('getid', 'Charge Type', 'trim|required|min_length[1]|max_length[100000]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $getid=trim(htmlentities($this->input->post('getid')));
        $var_array=array($getid,$this->session->userdata('office_id'));
        $issetcheckval=$this->Common_model->getcheckingchargeslist($getid,$this->session->userdata('office_id'));
        if($issetcheckval[0]['cnt']>0)
        {
          $getresult=$this->Common_model->getopdpanelmodel($getid,$this->session->userdata('office_id'));
          if($getresult)
          {
            $idval=$getid;
            $selbox='<option>Select Particulars</option>';
            if($idval==1){
                $charges='opdcharge_id';
              }
              elseif($idval==2){
                $charges='ipdcharge_id';
              }
              elseif($idval==3){
                $charges='laser_id';
              }
              elseif($idval==4){
                $charges='injection_id';
              }
              elseif($idval==5){
                $charges='investigation_id';
              }
            
             foreach($getresult as $data)
             {
              $selbox.='<option value="'.$data[$charges].'">'.$data['name'].'</option>';
             }
            echo json_encode(array('msg' =>$selbox,'error'=>'','error_message' =>''));
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

  public function getpatientdetails()
  {
      $this->form_validation->set_rules('getid', 'Patient ID', 'trim|required|min_length[1]|max_length[10000]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $getid=trim(htmlentities($this->input->post('getid')));
        $var_array=array($getid,$this->session->userdata('office_id'));
        $issetcheckval=$this->Common_model->issetcheckpateintid($var_array);
        if($issetcheckval[0]['cnt']>0)
        {
          $getresult=$this->Common_model->getpatientAppoinmentdetails($var_array);
          if($getresult)
          {
            $sl=1;
            $getmaster=$this->Common_model->getpatientMasterdetails($var_array);
            $html='<div class="row">
                          <div class="col-md-6">
                              <h3 class="text-danger" style="font-weight: bold;">Patient Name:'.$getmaster[0]['fname'].' '.$getmaster[0]['lname'].'</h3>
                          </div>

                          <div class="col-md-6">
                              <h3 class="text-danger" style="font-weight: bold;float: right;">MRD NO:'.$getmaster[0]['mrdno'].'</h3>
                          </div>
                      </div><div class="row accordion" id="accordion"  style="cursor: pointer;">
 <div class="collapsed" data-toggle="collapse" href="#collapseOne" style="background: #28d094;text-align: center;color: #fff;    width: 100%;">
                                                    <a class="card-title">Pateint History</a>
                              </div>
                              <div class="table-responsive collapse" id="collapseOne">
                      
                              <table class="table table-border" >
                                  <tr>
                                  <tr>
                                      <th>Sl No</th>
                                      <th>Doctor Name</th>
                                      <th>Date</th>
                                      <th>Reason</th>
                                  </tr>
                                  <tbody>';
             foreach($getresult as $data)
             {
               
               
               $html.='<tr>
                        <td>'.$sl.'</td>
                        <td class="align-middle border-top-0">'.$data['name'].'</td>
                        <td class="align-middle border-top-0">
                            <i class="la la-calendar-check-o text-warning"></i> '.$data['appointment_dated'].'
                        </td>
                        <td class="align-middle border-top-0">
                            <i class="la la-circle text-danger"></i> '.$data['description'].'
                        </td>
                    </tr>';
                $sl++;
             }
             $html.='</tbody></table></div></div>';
            echo json_encode(array('msg' =>$html,'error'=>'','error_message' =>''));
          }
          else
          {
              echo json_encode(array('msg' =>'','error'=> 'No Data Found','error_message' =>''));
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
   

 }