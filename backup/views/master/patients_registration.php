<?php 
$path=base_url('template1/');
?>      
   
<style type="text/css">
    #profile-container {
    overflow: hidden;
}
#profile-container img {
    width: 150px;
    height: 140px;
}
#imageUpload {
    display: none;
}
</style>  
 <div class="content-body" style="margin-top: -1%;">
             <!-- Justified With Top Border start -->
                 <section id="basic-tabs-components">
                    <div class="row match-height">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Patients Registration</h4>
                                </div>
                                <div class="card-content" style="margin-top: -32px;">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true"><l id="tab_tit">Add Patients Registration<l></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Follow-up patient</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">View/Edit/Delete</a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                             <form enctype="multipart/form-data" method="post" id="patientreg">
                                <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash(); ?>"> 
                                <input type="hidden" name="id" id="id">
                                <div class="row">
                                    <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2">
                                                    <div class="form-group">
                                                        <label for="lastname">Title: <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="patient_title_id" id="patient_title_id" onchange="getgender(this.value);">
                                                            <option value="">Select Title</option>
                                                            <?php if($patient_titles){foreach($patient_titles as $data){ ?>
                                                                    <option value="<?php echo $data['patient_title_id']; ?>"><?php echo $data['name']; ?></option>
                                                               <?php } } ?>
                                                        </select>
                                                    </div>
                                                 </div>

                                                  <div class="col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label for="lastname">First Name: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"  id="fname" name="fname" >
                                                    </div>
                                                 </div>

                                                  <div class="col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label for="lastname">Last Name: </label>
                                                        <input type="text" class="form-control"  id="lname" name="lname" >
                                                    </div>
                                                 </div>

                                                 <div class="col-sm-3 col-md-2">
                                                    <div class="form-group">
                                                        <label for="lastname">Gender: <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="gender_id" id="gender_id">
                                                            <option value="">Select Gender</option>
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Transgender</option>
                                                        </select>
                                                    </div>
                                                 </div>

                                                

                                                  <div class="col-sm-3 col-md-2">
                                                    <div class="form-group">
                                                        <label for="lastname">Age: <span class="text-danger">*</span></label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" onkeyup="ageChanged()" class="form-control"  id="agey" name="agey" placeholder="YY">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" onkeyup="ageChanged()" class="form-control"  id="agem" name="agem" placeholder="MM">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                 </div>

                                                  <div class="col-sm-3 col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname">Date Of Birth: <span class="text-danger">*</span></label>
                                                        <input type="date" class="form-control" id="dob" name="dob" >
                                                    </div>
                                                 </div>

                                                 <div class="col-sm-3 col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname">City: </label>
                                                        <select class="form-control select2" name="city_id" id="city_id">
                                                            <option value="">Select City</option>
                                                            <?php if($citys){foreach($citys as $data){ ?>
                                                                    <option value="<?php echo $data['city_id']; ?>"><?php echo $data['name']; ?></option>
                                                               <?php } } ?>
                                                        </select>
                                                    </div>
                                                 </div>

                                                 

                                                 <div class="col-sm-3 col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname">Mobile No: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"  id="mobileno" name="mobileno" >
                                                    </div>
                                                 </div>

                                            </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div id="profile-container" >
                                            <img style="border:1px solid black;" id="profileImage" src="<?=$path?>app-assets/images/icons/temp.jpg">
                                        </div>
                                        <input id="imageUpload" type="file" name="logo" placeholder="Photo" capture="" accept="image/*">
                                       
                                    </div>
                                </div>


                                <div class="row">
                                         <div class="col-sm-3 col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Address: </label>
                                                <textarea class="form-control" name="address" id="address"></textarea>
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Source: </label>
                                                <input type="text" class="form-control"  id="source" name="source" >
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Occupation: </label>
                                                <input type="text" class="form-control"  id="occupation" name="occupation" >
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">Referral name: </label>
                                                <select class="form-control select2" name="referral_masters_id" id="referral_masters_id">
                                                    <option value="">Select Referral name</option>
                                                    <?php if($referral_masters){foreach($referral_masters as $data){ ?>
                                                        <option value="<?php echo $data['referral_master_id']; ?>"><?php echo $data['name']; ?></option>
                                                        <?php } } ?>
                                                </select>
                                            </div>
                                         </div>
                                </div>


                                  <div class="row">
                                         <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">OPD Insurance Name: <span class="text-danger">*</span></label>
                                                <select class="form-control select2" name="insurance_company_id" id="insurance_company_id">
                                                    <option value="1">Select OPD Insurance Name</option>
                                                    <?php if($opdinsurancecompany){foreach($opdinsurancecompany as $data){ ?>
                                                        <option value="<?php echo $data['insurance_company_id']; ?>"><?php echo $data['name']; ?></option>
                                                        <?php } } ?>
                                                </select>
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">Patient Category: <span class="text-danger">*</span></label>
                                                <select class="form-control select2" name="patient_category_id" id="patient_category_id">
                                                   
                                                     <?php if($pateintcategory){foreach($pateintcategory as $data){ ?>
                                                        <option value="<?php echo $data['patient_category_id']; ?>"><?php echo $data['name']; ?></option>
                                                        <?php } } ?>
                                                </select>
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">Emergency: </label>
                                                <select class="form-control" name="emergency_id" id="emergency_id">
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">Select Doctor: <span class="text-danger">*</span></label>
                                                <select class="form-control select2" name="doctor_id" id="doctor_id">
                                                    <option value="">Select Doctor</option>
                                                     <?php if($doctors){foreach($doctors as $data){ ?>
                                                        <option value="<?php echo $data['doctors_registration_id']; ?>"><?php echo $data['name']; ?></option>
                                                        <?php } } ?>
                                                </select>
                                            </div>
                                         </div>

                                         <div class="col-sm-2 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">Select print: <span class="text-danger">*</span></label>
                                                <select class="form-control" name="print" id="print">
                                                    <option value="1">A4</option>
                                                    <option value="2">A4 landscape</option>
                                                    <option value="3">A5</option>
                                                    <option value="4">A5 landscape</option>
                                                </select>
                                            </div>
                                         </div>
                                          <div id="appointmentdata-show"></div>
                                          <div class="col-sm-3 col-md-2">
                                                <div class="form-group">
                                                    <label for="lastname">Appt Type: <span class="text-danger">*</span><span onclick="getappointmentopd()" class="notification-tag badge badge-danger float-right m-0"> %</span></label>
                                                    <select class="form-control select2" name="appointment_type_id" id="appointment_type_id" onchange="getappointmentopd()">
                                                        <option value="">Select Appointment Type</option>
                                                        <?php if($appointmenttypes){foreach($appointmenttypes as $data){ ?>
                                                        <option value="<?php echo $data['appointment_type_id']; ?>"><?php echo $data['name']; ?></option>
                                                        <?php } } ?>
                                                    </select>
                                                </div>
                                             </div>

                                          <div class="col-sm-3 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Description: </label>
                                                <textarea class="form-control" name="description" id="description"></textarea>
                                            </div>
                                         </div>

                                           

                                               <div class="col-sm-3 col-md-2">
                                                <div class="form-group">
                                                    <label for="lastname">Appointment Date: </label>
                                                    <input type="date" class="form-control appointment_date" name="appointment_date" id="appointment_date"/>
                                                </div>
                                             </div>

                                             <div class="col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label for="lastname">Appointment Time: </label>
                                                    <input type="time" class="form-control appointment_time" name="appointment_time" id="appointment_time"/>
                                                </div>
                                             </div>

                                             <div class="col-md-3">
                                      <div class="form-group mt-1">
                                        <label for="switcheryColor2" class="card-title ml-1">De-Active</label>
                                          <input type="checkbox" value="1" id="switcheryColor2" class="switchery" name="status" data-color="info" checked />
                                          <label for="switcheryColor2" class="card-title ml-1">Active</label>
                                        </div>
                                    </div>
                                </div>
                               
                            

                               

                                <div class="card-footer ml-auto">
                                    <button id="save" type="button" class="btn btn-success btn-min-width btn-glow mr-1 mb-1" onclick="savedpateintreg();">Submit</button>
                                    <button style="display: none;" id="update" type="button" class="btn btn-warning btn-min-width btn-glow mr-1 mb-1" onclick="updatedataval();">Update</button>
                                     <button type="button" class="btn btn-info btn-min-width btn-glow mr-1 mb-1" onClick="window.location.reload();">Reset</button>
                                </div>
                            </form>
                                            </div>

                                             <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
                                                 <form id="savefollowup" action="#" method="post"> 
                                                     <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash(); ?>"> 
                                                    <div class="row">
                                                         <div class="col-sm-2 col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastname">Select Search: <span class="text-danger">*</span></label>
                                                                    <select class="form-control" name="search" id="search" onchange="getselectedval(this.value);">
                                                                        <option value="1">MRD Number</option>
                                                                        <option value="2">Phone number</option>
                                                                        <option value="3">Address Search</option>
                                                                        <option value="4">Barcode</option>
                                                                    </select>
                                                            </div>
                                                         </div>
                                                          <div class="col-sm-2 col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastname">Search: <span class="text-danger">*</span></label>
                                                               <select class="form-control select2" name="patient_registration_id" id="patient_registration_id" onchange="getpatientdetails(this.value);">
                                                                   <option value="">Select Patient MRD NOS</option>
                                                                   <?php if($mrdnos){ foreach($mrdnos as $data){ ?>
                                <option value="<?php  echo $data['patient_registration_id']; ?>"><?php echo  $data['mrdno']; ?></option>
                                                                    <?php }} ?>
                                                               </select>
                                                            </div>
                                                         </div>

                                                          <div class="col-sm-3 col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastname">Select Doctor: <span class="text-danger">*</span></label>
                                                                <select class="form-control select2" name="followup_doctor_id" id="followup_doctor_id">
                                                                <option value="">Select Doctor</option>
                                                                 <?php if($doctors){foreach($doctors as $data){ ?>
                                                                    <option value="<?php echo $data['doctors_registration_id']; ?>"><?php echo $data['name']; ?></option>
                                                                    <?php } } ?>
                                                            </select>
                                                            </div>
                                                         </div>

                                                          <div class="col-sm-3 col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastname">Patient Category: <span class="text-danger">*</span></label>
                                                                 <select class="form-control select2" name="followup_patient_category_id" id="followup_patient_category_id">
                                                   
                                                     <?php if($pateintcategory){foreach($pateintcategory as $data){ ?>
                                                        <option value="<?php echo $data['patient_category_id']; ?>"><?php echo $data['name']; ?></option>
                                                        <?php } } ?>
                                                </select>
                                                            </div>
                                                         </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-3 col-md-3">
                                                              <div class="form-group">
                                                    <label for="lastname">Appt Type: <span class="text-danger">*</span><span onclick="getappointmentopd(1)" class="notification-tag badge badge-danger float-right m-0"> %</span></label>
                                                    <select class="form-control select2" name="followup_appointment_type_id" id="followup_appointment_type_id" onchange="getappointmentopd(1)">
                                                        <option value="">Select Appointment Type</option>
                                                        <?php if($appointmenttypes){foreach($appointmenttypes as $data){ ?>
                                                        <option value="<?php echo $data['appointment_type_id']; ?>"><?php echo $data['name']; ?></option>
                                                        <?php } } ?>
                                                    </select>
                                                </div>
                                                         </div>

                                                         <div class="col-sm-3 col-md-2">
                                                        <div class="form-group">
                                                            <label for="lastname">Emergency:</label>
                                                             <select class="form-control" name="followup_emergency_id" id="followup_emergency_id">
                                                                <option value="0">No</option>
                                                                <option value="1">Yes</option>
                                                            </select>
                                                        </div>
                                                     </div>

                                                      <div class="col-sm-3 col-md-2">
                                                        <div class="form-group">
                                                            <label for="lastname">Source: </label>
                                                            <input type="text" class="form-control"  id="followup_source" name="followup_source" >
                                                        </div>
                                                     </div>
                                                       
                                                      <div class="col-sm-3 col-md-2">
                                                            <div class="form-group">
                                                                <label for="lastname">Appointment Date: </label>
                                                                <input type="date" class="form-control appointment_date" name="followup_appointment_date" id="followup_appointment_date"/>
                                                            </div>
                                                         </div>

                                                         <div class="col-sm-3 col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastname">Appointment Time: </label>
                                                                <input type="time" class="form-control appointment_time" name="followup_appointment_time" id="followup_appointment_time"/>
                                                            </div>
                                                         </div>

                                                          

                                                    </div>
                                                    <div id="div_modal_followup"></div>
                                                    <div class="row">
                                                        <div class="col-sm-3 col-md-5">
                                                            <div class="form-group">
                                                                <label for="lastname">Description: </label>
                                                                <textarea class="form-control" name="followup_description" id="followup_description"></textarea>
                                                            </div>
                                                         </div>
                                                    </div>
                                                    
                                                    <div  id="last_appointmentdetails">

                                                     
                                                    </div>

                                            <div class="card-footer ml-auto">
                                                <button type="button" class="btn btn-success btn-min-width btn-glow mr-1 mb-1" onclick="savefollowup('1');">Submit</button>
                                                 <button type="button" class="btn btn-info btn-min-width btn-glow mr-1 mb-1" onclick="this.form.reset();">Reset</button>
                                            </div>
                                                </form>
                                            </div>

                                            <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-4">
                                                        <input style="height: 43px;" type="date" name="search_date" id="search_date" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button onclick="getpateintdetails()" class="btn btn-icon btn-warning mr-1 mb-1" type="button"><i class="la la-search"></i></button>
                                                    </div>
                                                </div>
                                                   <div class="table-responsive" id="p_date">
                                                    </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Justified With Top Border end -->
            </div>


<script type="text/javascript">
      $(document ).ready(function() {
    cd = (new Date()).toISOString().split('T')[0];
    $('#search_date').val(cd);
   // getpateintdetails();
});
function getpateintdetails() 
{
     $("#overlay").fadeIn(300);
     $.fn.dataTable.ext.errMode = 'none';
     $.ajax({
            type: "POST",
            url: 'Patients_registration/getpatientdetails',
            dataType: "json",
            data: {sdate:$('#search_date').val(),csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                $('#p_date').html(data.msg);
                  var table = $('#tableid').DataTable( {
       
        buttons: [  ],
       
        dom: 'Blfrtip',
        columnDefs: [ {
               
                lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
        }]
    } );
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
}
 var table;
//$( document ).ready(function() {
//    table= $('#tableid').DataTable( {
//           'processing': true,
//           'serverSide': true,
//           'ajax':'<?=base_url()?>master/Patients_registration/ajax_call',
//           'columns': [
//              { data: 'slno' },
//              { data: 'pateint_name' },
//              { data: 'doc' },
//              { data: 'mrdno' },
//              { data: 'dateofbirth' },
//              { data: 'mobileno' },
//              { data: 'status' },
//              { data: 'print' },
//              { data: 'edit' },
//              { data: 'delete' }
//                      ],
    
//          key: {
//            enterkey: false

//                 },
//      "order": [[ 0, "desc" ]],
//      "lengthMenu": [[5,10,25, 50, 100, 1000], [5,10,25, 50, 100, 1000]]
//      } );
// }); 

    $("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

 cd = (new Date()).toISOString().split('T')[0];
    $('.appointment_date').val(cd);
     timee="<?php Echo date('H:i'); ?>";
    $('.appointment_time').val(timee);

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
function getpatientdetails(val)
{
    $("#overlay").fadeIn(300);
     $.ajax({
            type: "POST",
            url: 'Common_controller/getpatientdetails',
            dataType: "json",
            data: {getid: val,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                $('#last_appointmentdetails').html(data.msg);
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
}
function getselectedval(val)
{
    $("#overlay").fadeIn(300);
     $.ajax({
            type: "POST",
            url: 'Common_controller/getsearchval',
            dataType: "json",
            data: {getid: val,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                $('#patient_registration_id').html(data.msg);
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
}

function getgender(val)
{
    $("#overlay").fadeIn(300);
     $.ajax({
            type: "POST",
            url: 'Patients_registration/getgender',
            dataType: "json",
            data: {getid: val,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                $('#gender_id').val(data.msg[0]['gender']);
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
}
function getappointmentopd(sel=0)
{
    
        if(sel==0)
        {
            if($("#appointment_type_id").val()=='') {
           Swal.fire({title:"Info!",text:"Please select Appointment Type !",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1})
           return false;
        }
            getval=$('#appointment_type_id').val();
            idvak='appointmentdata-show';
            cval='';
        }
        else
        {
            if($("#followup_appointment_type_id").val()=='') {
           Swal.fire({title:"Info!",text:"Please select Appointment Type !",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1})
           return false;
        }
            getval=$('#followup_appointment_type_id').val();
            idvak='div_modal_followup';
            cval='1';
        }
    if(getval>0)
    {
         $("#overlay").fadeIn(300);
         $.ajax({
            type: "POST",
            url: 'Patients_registration/getappointmentopd',
            dataType: "json",
            data: {sel:sel,getid:getval,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                 $('#'+idvak).html(data.msg);
                 $('#div_modal'+cval).modal('show');
                 $('.modal-title').html('Appointment OPD Charge');
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
    }
}
function savedpateintreg()
{
      if($("#patient_title_id").val()=='' || $("#fname").val()=='' || $("#lname").val()=='' || $("#gender_id").val()=='') {
           Swal.fire({title:"Info!",text:"Please Enter all fields !",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1})
           return false;
        }
       $("#overlay").fadeIn(300);
       let data = new FormData($("#patientreg")[0]);
        $("#overlay").fadeIn(300);
         $.ajax({
            type: "POST",
            url: 'Patients_registration/savedata',
            dataType: "json",
            data: data,
            contentType: false,       
            cache: false,             
            processData:false, 
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
               Swal.fire({title:"",text:""+data.msg+"",type:"success",confirmButtonClass:"btn btn-success",buttonsStyling:!1});
                getpateintdetails();
               location.reload();
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        }); 
}

function editdata(val)
{
    if(val>0)
    {
         $("#overlay").fadeIn(300);
         $.ajax({
            type: "POST",
            url: 'Patients_registration/editdata',
            dataType: "json",
            data: {getid: val,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                  $('#base-tab1').click(); 
                  $('#tab_tit').html('Edit Patients Registration');
                  $('#id').val(data.msg[0]['patient_registration_id']);
                  $('#patient_title_id').val(data.msg[0]['title']);
                  $('#fname').val(data.msg[0]['fname']);
                  $('#lname').val(data.msg[0]['lname']);
                  $('#gender_id').val(data.msg[0]['gender']);
                  $('#agey').val(data.msg[0]['ageyy']);
                  $('#agem').val(data.msg[0]['agemm']);
                  $('#dob').val(data.msg[0]['dob']);
                  $('#city_id').val(data.msg[0]['city']);
                  $('#city_id').val(data.msg[0]['city']).trigger('change');
                  $('#mobileno').val(data.msg[0]['mobileno']);
                  $('#address').val(data.msg[0]['address']);
                  $('#source').val(data.msg[0]['source']);
                  $('#occupation').val(data.msg[0]['occupation']);
                  $('#referral_masters_id').val(data.msg[0]['referral_masters_id']);
                  $('#insurance_company_id').val(data.msg[0]['insurance_company_id']);
                  $('#insurance_company_id').val(data.msg[0]['insurance_company_id']).trigger('change');
                  $('#patient_category_id').val(data.msg[0]['patient_category_id']);
                  $('#patient_category_id').val(data.msg[0]['patient_category_id']).trigger('change');
                  $('#emergency_id').val(data.msg[0]['emergency']);
                  $('#doctor_id').val(data.msg[0]['doctor_id']);
                  $('#doctor_id').val(data.msg[0]['doctor_id']).trigger('change');
                  $('#print').val(data.msg[0]['print']);
                  $('#appointment_type_id').val(data.msg[0]['apponitment_type_id']);
                  $('#appointment_type_id').val(data.msg[0]['apponitment_type_id']).trigger('change');
                  $('#referral_masters_id').val(data.msg[0]['referral_masters_id']).trigger('change');
                  $('#description').val(data.msg[0]['description']);
                  $('#appointment_date').val(data.msg[0]['appointment_date']);
                  $('#appointment_time').val(data.msg[0]['appointment_time']);
                  if(data.msg[0]['image']){
                  $("#profileImage").attr("src","<?php echo base_url()?>images/profile/"+data.msg[0]['image']);}
                  $('#save').hide();
                  $('#update').show();

                
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
    }
}

function updatedataval()
{
        if($("#patient_title_id").val()=='' || $("#fname").val()=='' || $("#lname").val()=='' || $("#gender_id").val()=='') {
           Swal.fire({title:"Info!",text:"Please Enter all fields !",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1})
           return false;
        }
       $("#overlay").fadeIn(300);
       let data = new FormData($("#patientreg")[0]);
        $("#overlay").fadeIn(300);
         $.ajax({
            type: "POST",
            url: 'Patients_registration/updatedata',
            dataType: "json",
            data: data,
            contentType: false,       
            cache: false,             
            processData:false, 
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
               Swal.fire({title:"",text:""+data.msg+"",type:"success",confirmButtonClass:"btn btn-success",buttonsStyling:!1});
               // table.draw();
                location.reload();
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        }); 
}
function deletedata(val)
{
    if(val>0)
    {
          Swal.fire({title:"Are you sure?",
            text:"You won't be able to revert this!",
            type:"warning",
            showCancelButton:!0,
            confirmButtonColor:"#3085d6",
            cancelButtonColor:"#d33",
            confirmButtonText:"Yes, Delete it!",
            confirmButtonClass:"btn btn-warning",
            cancelButtonClass:"btn btn-danger ml-1",
            buttonsStyling:!1}).then((function(t){
              if(t.value)
                {
             $("#overlay").fadeIn(300);
                   $.ajax({
            type: "POST",
            url: 'Patients_registration/deletedata',
            dataType: "json",
            data: {getid: val,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
               Swal.fire({title:"Deleted",text:""+data.msg+"",type:"success",confirmButtonClass:"btn btn-success",buttonsStyling:!1});
              // table.draw();
               
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
               return false;
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                 return false;
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
               
                }
                })) 
    }
}

function savefollowup()
{
      if( $("#patient_registration_id").val()=='') {
           Swal.fire({title:"Info!",text:"Please Enter all fields !",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1})
           return false;
        }
        $("#overlay").fadeIn(300);
         $.ajax({
            type: "POST",
            url: 'Patients_registration/savefollowup',
            dataType: "json",
            data: $('#savefollowup').serialize(),
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
               Swal.fire({title:"",text:""+data.msg+"",type:"success",confirmButtonClass:"btn btn-success",buttonsStyling:!1});
              // table.draw();
                $("#savefollowup")[0].reset();
                getpateintdetails();
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        }); 

}

 function printdata(printpatient_registration_id){

         $('<form target="_blank"  method="post" action="<?php echo base_url() ?>master/Patients_registration/print_appointment/"><input name="printpatient_registration_id" value="'+printpatient_registration_id+'"/><input name="csrf_test_name" value="'+$('#csrf_test_name').val()+'"></form>').appendTo('body').submit().remove();

    }

     function hdprintdata(printpatient_registration_id){

         $('<form target="_blank"  method="post" action="<?php echo base_url() ?>master/Patients_registration/print_appointmenthd/"><input name="printpatient_registration_id" value="'+printpatient_registration_id+'"/><input name="csrf_test_name" value="'+$('#csrf_test_name').val()+'"></form>').appendTo('body').submit().remove();

    }

    function ageChanged()
          {
           var today = new Date('<?=date('Y-m-d')?>');
           var year=$("#agey").val();
           var month=$("#agem").val();
           var date=0;
           var year=parseInt(year);
           if(isNaN(year))
           {
               year=0;
           }
           var month=parseInt(month);
           if(isNaN(month))
           {
               month=0;
           }
           var date=parseInt(date);
           if(isNaN(date))
           {
               date=0;
           }
             var total_days=   year*365.25+month*30.42+date;
             var total_days=Math.round(total_days);
             if(total_days==0)
             {
             return;
             }
            today.setDate(today.getDate()-total_days);
            var birth_date = today. getDate();
            var birth_month = today. getMonth() + 1; 
            var birth_year = today. getFullYear();
          // var dob=pad(birth_date,2)+'-'+pad(birth_month,2)+'-'+birth_year;
           var dob=birth_year+'-'+pad(birth_month,2)+'-'+pad(birth_date,2);
            $("#dob").val(dob);
                 
          }
function pad (str, max) {
  str = str.toString();
  return str.length < max ? pad("0" + str, max) : str;
}
     //   function dobChanged(ref)
     // {
     //         var dob=ref.val();
     //         var length= dob.length;
     //         if((length==6)||(length==8))
     //         {
     //             var date=dob.substring(0, 2);
     //             var month=dob.substring(2, 4);
     //             var year="";
     //             if(length==6)
     //             {
     //             var year=dob.substring(4, 6);
     //             year=parseInt(year);
     //                 var curyr=<?=date('y')?>;
     //                 var yrlef=<?=substr(date('Y'),0,2)?>;
     //                 if(curyr<year)
     //                 {
     //                     yrlef--;
     //                     year=yrlef+''+year;
     //                 }else
     //                 {
     //                     year=yrlef+''+year;
     //                 }
     //             }else if(length==8)
     //             {
                     
     //             var year=dob.substring(4, 8);
     //             }
     //             var dob=date+'/'+month+'/'+year;
     //             ref.val(dob);
     //             var startDate = new Date(year+'-'+month+'-'+date);
     //              var diffDate = new Date(new Date('<?=date('Y-m-d')?>') - startDate);
     //            var years=(diffDate.toISOString().slice(0, 4) - 1970);
     //            var months= diffDate.getMonth();
     //            var days=(diffDate.getDate()-1);
               
     //             $("#agey").val(years);
     //             $("#agem").val(months);
     //            // $("#age_d").val(days);
                
     //         }else
     //         {
     //           if(length!=10)
     //           {
     //             $("#agey").focus();
     //            }
     //         }
     // }
</script>
  <script type="text/javascript">
         
             $("body").removeClass(" vertical-layout vertical-menu 2-columns fixed-navbar pace-done menu-expanded").addClass( "vertical-layout vertical-menu 2-columns fixed-navbar pace-done menu-collapsed" );
          </script>

         

