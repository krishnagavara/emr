<?php
/**
 * Description of patient_category_model
 *
 * @author Prabhu @10/08/2021
 */
class Sales_collection_report_model extends CI_Model{
 public function __construct()
	{
		parent::__construct();
	}

	
    public function getsummaryreportmodel($sum_fromdate,$sum_todate,$patient_id,$doctor_id,$office_id,$det_modeofpay)
	{
		$pat=$doc=$mod='';	
		if($patient_id>0)
		{
			$pat=' and patient_registration.patient_registration_id='.$patient_id;
		}
		if($doctor_id>0)
		{
			$doc=' and billing_master.doctor_id='.$doctor_id;
		}
		if($det_modeofpay>0)
		{
			$mod=' and billing_master.modeofpay_id='.$det_modeofpay;
		}
	 	$sql = "select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '$sum_fromdate' and '$sum_todate' and  billing_master.office_id= $office_id   $pat  $doc $mod";
			
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}
	public function getdetailedreportmodel($sum_fromdate,$sum_todate,$patient_id,$doctor_id,$office_id,$particular,$charge_type_id,$det_modeofpay)
	{
		$pat=$doc=$par=$mod=$char='';	
		if($patient_id>0)
		{
			$pat=' and patient_registration.patient_registration_id='.$patient_id;
		}
		if($doctor_id>0)
		{
			$doc=' and billing_master.doctor_id='.$doctor_id;
		}
		if($particular>0)
		{
			$par=' and billing_detail.particulars_id='.$particular;
		}
		if($charge_type_id>0)
		{
			$char=' and billing_detail.charge_id='.$charge_type_id;
		}
		if($det_modeofpay>0)
		{
			$mod=' and billing_master.modeofpay_id='.$det_modeofpay;
		}
		
	 	$sql = "select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '$sum_fromdate' and '$sum_todate' and  billing_master.office_id= $office_id   $pat  $doc $par $char $mod";
			
	    $result_row=$this->db->query($sql); 
		$res= $result_row->result_array ();
        $this->logger->save($this->db);
		return $res;
	}

   
}