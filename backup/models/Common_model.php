<?php
/**
 * Description of patient_category_model
 *
 * @author Prabhu @29/06/2021
 */
class Common_model extends CI_Model{
 public function __construct()
	{
		parent::__construct();
	}

	
    public function getdepartment($var_array)
	{
		$sql = "select department_id,name from department where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	public function getappointmenttype($var_array)
	{
		$sql = "select appointment_type_id,name from appointment_type where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	public function getpatient_titles($var_array)
	{
		$sql = "select patient_title_id,name from patient_title where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getcity($var_array)
	{
		$sql = "select city_id,name from city where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getrefferalmaster($var_array)
	{
		$sql = "select referral_master_id,name from referral_master where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getopdinsurancecompany($var_array)
	{
		$sql = "select insurance_company_id,name from insurance_company where  office_id= ? and status=1 and charge_id in (1,2)";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getpateintcategory($var_array)
	{
		$sql = "select patient_category_id,name from  patient_category where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getdoctors($var_array)
	{
		$sql = "select doctors_registration_id,name from  doctors_registration where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getappointmenttypeopd($var_array)
	{
		$sql = "select appointment_type_id,name from appointment_type where  office_id= ? and status=1 and appointment_type_id in (select appointment_type_id from opdcharge)";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getpateintmrdnos($var_array)
	{
		$sql = "select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function issetcheckval($var_array)
    {
        $sql = "select count(*) as cnt from patient_registration where  office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function getpatientdetailssearch($id,$office_id)
	{
		if($id==1){$chk='mrdno';}elseif ($id==2){$chk='mobileno';}elseif ($id==3){$chk='address';}elseif ($id==4){$chk='barcode';}
		$sql = "select patient_registration_id,$chk from  patient_registration where  office_id= $office_id and status=1";
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function issetcheckpateintid($var_array)
    {
        $sql = "select count(*) as cnt from patient_registration where  patient_registration_id= ? and  office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function getpatientAppoinmentdetails($var_array)
    {
        $sql = "select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id=? and  doctors_registration.office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function getpatientMasterdetails($var_array)
    {
        $sql = "select fname,lname,mrdno from patient_registration where  patient_registration_id=? and  office_id= ?";
        $result_row=$this->db->query($sql, $var_array); 
        $res= $result_row->result_array ();
        $this->logger->save($this->db);
        return $res;
    }
    public function getmodeofpay($var_array)
	{
		$sql = "select modeofpay_id ,name from  modeofpay where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getinsurance_company($var_array)
	{
		$sql = "select insurance_company_id,name from insurance_company where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getchargeslist($var_array)
	{
		$sql = "select charge_id,name from charge_type where  office_id= ? and status=1";
	    $result_row=$this->db->query($sql, $var_array); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	
	public function getcheckingchargeslist($idval,$office_id)
	{
		if($idval==1){
			$charges='opdcharge';
		}
		elseif($idval==2){
			$charges='ipdcharge';
		}
		elseif($idval==3){
			$charges='laser';
		}
		elseif($idval==4){
			$charges='injection';
		}
		elseif($idval==5){
			$charges='investigation';
		}
		$sql = "select count(*) as cnt from $charges where  office_id= $office_id and status=1";
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}


	public function getopdpanelmodel($idval,$office_id)
	{
		if($idval==1){
			$charges='opdcharge';
		}
		elseif($idval==2){
			$charges='ipdcharge';
		}
		elseif($idval==3){
			$charges='laser';
		}
		elseif($idval==4){
			$charges='injection';
		}
		elseif($idval==5){
			$charges='investigation';
		}
		$sql = "select * from $charges where  office_id= $office_id and status=1";
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

	public function getparticularsmodel($idval,$particular_id,$office_id)
	{
		if($idval==1){
			$charges='opdcharge';
			$id="opdcharge_id";
		}
		elseif($idval==2){
			$charges='ipdcharge';
			$id="ipdcharge_id";
		}
		elseif($idval==3){
			$charges='laser';
			$id="laser_id";
		}
		elseif($idval==4){
			$charges='injection';
			$id="injection_id";
		}
		elseif($idval==5){
			$charges='investigation';
			$id="investigation_id";
		}
		$sql = "select * from $charges where  $id=$particular_id  and office_id= $office_id and status=1";
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}



   
}