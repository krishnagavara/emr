select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021030902862549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021030902862549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021030902862549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021030902862549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021030902862549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075387954711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021030902862549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075387954711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021030902862549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075387954711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021030902862549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075387954711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099802017211914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021030902862549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075387954711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099802017211914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021030902862549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075387954711914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099802017211914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010409355163574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00096797943115234

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00096797943115234

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0016970634460449

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00096797943115234

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0016970634460449

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00077414512634277

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00096797943115234

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0016970634460449

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00077414512634277

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00026082992553711

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='3' 
 Execution Time:0.0010418891906738

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00028395652770996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00031590461730957

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=24  
 Execution Time:0.0010068416595459

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00031590461730957

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=24  
 Execution Time:0.0010068416595459

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=24  
 Execution Time:0.00042605400085449

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00031590461730957

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=24  
 Execution Time:0.0010068416595459

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=24  
 Execution Time:0.00042605400085449

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='24' and  office_id= '1' 
 Execution Time:0.00022983551025391

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='24' 
 Execution Time:0.00041413307189941

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00029587745666504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from patient_appointment where  patient_registration_id = 24 and appointment_date= '2022-05-16' 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00030398368835449

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0011491775512695

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00030398368835449

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0011491775512695

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00049304962158203

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00030398368835449

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0011491775512695

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00049304962158203

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00023293495178223

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='3' 
 Execution Time:0.0011348724365234

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00036787986755371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00065088272094727

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='3' 
 Execution Time:0.00043988227844238

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00035309791564941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092387199401855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092387199401855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092387199401855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092387199401855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010519027709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092387199401855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010519027709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012681484222412

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092387199401855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010519027709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00054001808166504

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00025415420532227

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0003058910369873

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
 Execution Time:0.0016820430755615

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0003058910369873

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
 Execution Time:0.0016820430755615

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00064301490783691

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0003058910369873

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
 Execution Time:0.0016820430755615

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00064301490783691

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.0003211498260498

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='2' 
 Execution Time:0.0006110668182373

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00051307678222656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00047612190246582

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='2' 
 Execution Time:0.00073599815368652

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00065302848815918

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00065302848815918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from patient_registration where  patient_registration_id= '220' and  office_id= '1' 
 Execution Time:0.00036406517028809

select count(*) as cnt from patient_registration where  patient_registration_id= '220' and  office_id= '1' 
 Execution Time:0.00036406517028809

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=220  
 Execution Time:0.00072407722473145

select count(*) as cnt from patient_registration where  patient_registration_id= '220' and  office_id= '1' 
 Execution Time:0.00036406517028809

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=220  
 Execution Time:0.00072407722473145

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=220  
 Execution Time:0.00046896934509277

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='220' 
 Execution Time:0.00086092948913574

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00057697296142578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

