select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018389225006104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018389225006104

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017538070678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018389225006104

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023181438446045

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00029110908508301

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0012481212615967

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00029110908508301

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0012481212615967

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00066113471984863

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00029110908508301

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0012481212615967

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00066113471984863

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00037503242492676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0002901554107666

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00053191184997559

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00053191184997559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006258487701416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006258487701416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0003349781036377

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0002131462097168

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00032997131347656

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0015180110931396

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00032997131347656

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0015180110931396

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00067281723022461

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00032997131347656

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0015180110931396

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00067281723022461

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011088848114014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011088848114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011088848114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011088848114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011088848114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011088848114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011088848114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011088848114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073480606079102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011088848114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073480606079102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011088848114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023579597473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073480606079102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00035405158996582

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00045990943908691

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00068306922912598

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00068306922912598

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0011370182037354

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00028896331787109

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=31  
 Execution Time:0.0011570453643799

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00028896331787109

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=31  
 Execution Time:0.0011570453643799

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=31  
 Execution Time:0.00038695335388184

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00028896331787109

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=31  
 Execution Time:0.0011570453643799

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=31  
 Execution Time:0.00038695335388184

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='31' and  office_id= '1' 
 Execution Time:0.00021910667419434

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0005640983581543

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0005640983581543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from patient_appointment where  patient_registration_id = 31 and appointment_date= '2022-05-11' 
 Execution Time:0.000885009765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071382522583008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071382522583008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071382522583008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00045609474182129

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00045609474182129

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00058388710021973

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00067996978759766

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00067996978759766

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00059413909912109

select count(*) as cnt from patient_registration where  patient_registration_id= '174' and  office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from patient_registration where  patient_registration_id= '174' and  office_id= '1' 
 Execution Time:0.00036311149597168

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=174  
 Execution Time:0.00094890594482422

select count(*) as cnt from patient_registration where  patient_registration_id= '174' and  office_id= '1' 
 Execution Time:0.00036311149597168

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=174  
 Execution Time:0.00094890594482422

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=174  
 Execution Time:0.00043797492980957

select count(*) as cnt from patient_registration where  patient_registration_id= '175' and  office_id= '1' 
 Execution Time:0.00061583518981934

select count(*) as cnt from patient_registration where  patient_registration_id= '175' and  office_id= '1' 
 Execution Time:0.00061583518981934

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=175  
 Execution Time:0.0016188621520996

select count(*) as cnt from patient_registration where  patient_registration_id= '175' and  office_id= '1' 
 Execution Time:0.00061583518981934

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=175  
 Execution Time:0.0016188621520996

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=175  
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_registration where  patient_registration_id= '175' and  office_id= '1' 
 Execution Time:0.00061583518981934

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=175  
 Execution Time:0.0016188621520996

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=175  
 Execution Time:0.00041294097900391

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='175' and  office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from patient_registration where  patient_registration_id= '201' and  office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from patient_registration where  patient_registration_id= '201' and  office_id= '1' 
 Execution Time:0.00050091743469238

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=201  
 Execution Time:0.0012068748474121

select count(*) as cnt from patient_registration where  patient_registration_id= '201' and  office_id= '1' 
 Execution Time:0.00050091743469238

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=201  
 Execution Time:0.0012068748474121

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=201  
 Execution Time:0.00040006637573242

select count(*) as cnt from patient_registration where  patient_registration_id= '201' and  office_id= '1' 
 Execution Time:0.00050091743469238

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=201  
 Execution Time:0.0012068748474121

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=201  
 Execution Time:0.00040006637573242

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='201' and  office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00043010711669922

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00043010711669922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from patient_appointment where  patient_registration_id = 201 and appointment_date= '2022-05-11' 
 Execution Time:0.00043416023254395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012621879577637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012621879577637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012621879577637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0009758472442627

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012621879577637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0009758472442627

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 201 
 Execution Time:0.00043201446533203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 295 
 Execution Time:0.00032591819763184

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 295  and `patient_registration_id` = 201 
 Execution Time:0.00074911117553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025019645690918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025019645690918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 201 
 Execution Time:0.00031113624572754

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 295 
 Execution Time:0.00023508071899414

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 295  and `patient_registration_id` = 201 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014731884002686

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014731884002686

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098204612731934

