select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090312957763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090312957763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090312957763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090312957763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010249614715576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090312957763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010249614715576

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090312957763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010249614715576

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063681602478027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063681602478027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063681602478027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063681602478027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012650489807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063681602478027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012650489807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063681602478027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012650489807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

