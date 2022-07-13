<div class="content-body">
<?php if($this->session->userdata('user_type')==1){ ?>
<div class="row">
<div class="col-xl-3 col-lg-6 col-12">
<div class="card bg-gradient-directional-danger">
  <div class="card-content">
    <div class="card-body">
      <div class="media d-flex">
        <div class="media-body text-white text-left">
          <h3 class="text-white"><?=$today_patient?></h3>
          <span>Today's Patients</span>
        </div>
        <div class="align-self-center">
          <i class="icon-users text-white font-large-2 float-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-12">
<div class="card bg-gradient-directional-success">
  <div class="card-content">
    <div class="card-body">
      <div class="media d-flex">
        <div class="media-body text-white text-left">
          <h3 class="text-white"><?=$today_collection?></h3>
          <span>Today's Collection</span>
        </div>
        <div class="align-self-center">
          <i class="la la-credit-card text-white font-large-2 float-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-12">
<div class="card bg-gradient-directional-amber">
  <div class="card-content">
    <div class="card-body">
      <div class="media d-flex">
        <div class="media-body text-white text-left">
          <h3 class="text-white"><?=$total_doctors?></h3>
          <span>Total  Doctors</span>
        </div>
        <div class="align-self-center">
          <i class="la la-stethoscope text-white font-large-2 float-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-12">
<div class="card bg-gradient-directional-info">
  <div class="card-content">
    <div class="card-body">
      <div class="media d-flex">
        <div class="media-body text-white text-left">
          <h3 class="text-white"><?=$total_patient?></h3>
          <span>Total Patients</span>
        </div>
        <div class="align-self-center">
          <i class="icon-users text-white font-large-2 float-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<?php } elseif ($this->session->userdata('user_type')==2) { ?>

   <div class="card-content card">
      <div class="card-body">
          <ul class="nav nav-tabs">
              <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash(); ?>"> 
              <li class="nav-item">
                  <a class="nav-link active" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">View</a>
              </li>
          </ul>

              <div class="tab-content px-1 pt-1">
                 <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                     <div class="tab-pane active" id="tab2" aria-labelledby="base-tab2">
                             <div class="table-responsive">
                              <table id="tableid" class="table table-striped table-bordered opticaltable-list" style="width: 100%;">
                                  <thead>
                                    <tr>
                                      <th>Sl No</th>
                                      <th>Patient Name</th>
                                      <th>Doctor Name</th>
                                      <th>MRD NO</th>
                                      <th>Date Of Birth</th>
                                      <th>Mobile No</th>
                                       <th>Status</th>
                                       <th>Print</th>
                                     
                                    </tr>
                                  </thead>
                                   <tfoot>
                                      <tr>
                                         <th>Sl No</th>
                                      <th>Patient Name</th>
                                      <th>Doctor Name</th>
                                      <th>MRD NO</th>
                                      <th>Date Of Birth</th>
                                      <th>Mobile No</th>
                                       <th>Status</th>
                                       <th>Print</th>
                                    
                                      </tr>
                                  </tfoot>
                                </table>
                              </div>
                      </div>
                </div>
             </div>
        </div>
      </div>

<?php } ?>

</div>
<script type="text/javascript">

 var table;
$( document ).ready(function() {
   table= $('#tableid').DataTable( {
          'processing': true,
          'serverSide': true,
          'ajax':'<?=base_url()?>master/Patients_registration/ajax_call',
          'columns': [
             { data: 'slno' },
             { data: 'pateint_name' },
             { data: 'doc' },
             { data: 'mrdno' },
             { data: 'dateofbirth' },
             { data: 'mobileno' },
             { data: 'status' },
             { data: 'print' },
             
                     ],
    
         key: {
           enterkey: false

                },
     "order": [[ 0, "desc" ]],
     "lengthMenu": [[5,10,25, 50, 100, 1000], [5,10,25, 50, 100, 1000]]
     } );
}); 

 function printdata(printpatient_registration_id){

         $('<form target="_blank"  method="post" action="<?php echo base_url() ?>master/Patients_registration/print_appointment/"><input name="printpatient_registration_id" value="'+printpatient_registration_id+'"/><input name="csrf_test_name" value="'+$('#csrf_test_name').val()+'"></form>').appendTo('body').submit().remove();

    }
</script>