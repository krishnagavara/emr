<?php
/**
 * Description of patient_category_model
 *
 * @author Prabhu @10/08/2021
 */
class Patient_appointment_report_model extends CI_Model{
 public function __construct()
	{
		parent::__construct();
	}

	
    public function getsummaryreportmodel($sum_fromdate,$sum_todate,$patient_id,$doctor_id,$office_id)
	{

		$pat=$doc='';	
		if($patient_id>0)
		{
			$pat=' and patient_registration.patient_registration_id='.$patient_id;
		}
		if($doctor_id>0)
		{
			$doc=' and patient_appointment.doctor_id='.$doctor_id;
		}
		$sql = "select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '$sum_fromdate' and '$sum_todate' and  patient_registration.office_id= $office_id   $pat  $doc";
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

   
}