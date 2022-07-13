select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015718936920166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015718936920166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015819072723389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088310241699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015718936920166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063419342041016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011098384857178

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00054502487182617

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091195106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091195106506348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091195106506348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00057291984558105

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00057291984558105

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00040602684020996

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,address from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00037097930908203

select CONCAT(fname , ' ',  lname ,'') AS pateint_name,patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00043916702270508

select count(*) as cnt from patient_registration where  patient_registration_id= '221' and  office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_registration where  patient_registration_id= '221' and  office_id= '1' 
 Execution Time:0.00052499771118164

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
 Execution Time:0.00083613395690918

select count(*) as cnt from patient_registration where  patient_registration_id= '221' and  office_id= '1' 
 Execution Time:0.00052499771118164

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
 Execution Time:0.00083613395690918

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=221  
 Execution Time:0.00031208992004395

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='221' 
 Execution Time:0.0006561279296875

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00032687187194824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00024890899658203

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='221' 
 Execution Time:0.00051093101501465

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0003669261932373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0003058910369873

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='221' 
 Execution Time:0.00036811828613281

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00026512145996094

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00026512145996094

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from patient_appointment where  patient_registration_id = 221 and appointment_date= '2022-06-29' 
 Execution Time:0.00099587440490723

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='221' 
 Execution Time:0.00045990943908691

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00059795379638672

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00059795379638672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0003199577331543

SELECT 15-DATEDIFF(CURDATE(), MAX(appointment_date)) AS days,DATE_ADD(CURDATE(), INTERVAL  15-DATEDIFF(CURDATE(), MAX(appointment_date)) DAY) AS edate  
FROM patient_appointment WHERE patient_registration_id='221' 
 Execution Time:0.00073599815368652

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00041604042053223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0002131462097168

