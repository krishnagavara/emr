select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010039806365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010039806365967

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010039806365967

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select count(*) as cnt from patient_registration where  patient_registration_id= '221' and  office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from patient_registration where  patient_registration_id= '221' and  office_id= '1' 
 Execution Time:0.00052809715270996

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=221  
 Execution Time:0.0012190341949463

select count(*) as cnt from patient_registration where  patient_registration_id= '221' and  office_id= '1' 
 Execution Time:0.00052809715270996

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=221  
 Execution Time:0.0012190341949463

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=221  
 Execution Time:0.00035905838012695

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='221' 
 Execution Time:0.00061202049255371

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00042986869812012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014028549194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014028549194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078916549682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014028549194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078916549682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014028549194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078916549682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014028549194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078916549682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017600059509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014028549194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078916549682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017600059509277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012321472167969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014028549194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00078916549682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017600059509277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012321472167969

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

