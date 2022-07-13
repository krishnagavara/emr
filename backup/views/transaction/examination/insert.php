<?php 
$path=base_url('template1/modern-admin/');
?>   
<style type="text/css">
  table th 
  {
    background: #ffbb8f;
  }
  .table-bordered th, .table-bordered td {
    border: 1px solid #feb500;
}
</style>   
 <div class="content-body">
             <!-- Justified With Top Border start -->
                 <section id="basic-tabs-components">
                    <div class="row match-height">
                        <div class="col-xl-12 col-lg-12">
                              <div class="card">
                                <div class="card-body">
                                 
                                  <ul class="nav nav-pills nav-pill-toolbar nav-justified">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="active2-pill1" data-toggle="pill" href="#active21"
                                        aria-expanded="true">Examination</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="link2-pill1" data-toggle="pill" href="#link21" aria-expanded="false">Case History</a>
                                    </li>
                                 
                                    
                                  </ul>
                                  <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="active21" aria-labelledby="active2-pill1"
                                      aria-expanded="true">
                                      <form>
                                      <div class="row">
                                          <div class="col-md-10">
                                                <div class="alert bg-primary alert-dismissible mb-2">
                                                    <h5 style="color:#fff;"> Patient Name: RajaKing MRD NO:PMTY1001 Age-35/F  Chennai-629177 </h5>
                                                    
                                                </div>
                                          </div>
                                          <div class="col-md-2">
                                              <select class="form-control select2" name="consultant" id="consultant">
                                                  <option value="">Select Consultant</option>
                                              </select>
                                          </div>
                                      </div>

                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <span class="badge badge-danger">View History</span>
                                                </div>
                                                <div class="col-md-2">
                                                    <span class="badge badge-success">Add History</span>
                                                </div>
                                            </div>
                                              <div class="table-responsive">
                                                  <table class="table table-bordered table-hover">
                                                      <thead>
                                                          <tr>
                                                              <th>Complaints</th>
                                                              <th>Current Medication</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td><span style="float:right;" class="badge badge-danger">Reset</span><br/>Regular Eye Exam <br/>Regular Eye Exam</td>
                                                              <td><span style="float:right;" class="badge badge-danger">Reset</span><br/>test</td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                              </div>

                                              <div class="table-responsive">
                                                   <table class="table table-bordered table-hover">
                                                      <thead>
                                                          <tr>
                                                              <th>Opthalmic History</th>
                                                              <th>Medical History</th>
                                                              <th>Family History</th>
                                                              <th>Drug Allergy</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                             <td>test</td>
                                                             <td>test</td>
                                                             <td>test</td>
                                                             <td>test</td>
                                                          </tr>
                                                          <tr>
                                                             <td>test</td>
                                                             <td>test</td>
                                                             <td>test</td>
                                                             <td>test</td>
                                                          </tr>
                                                          <tr>
                                                             <td>test</td>
                                                             <td>test</td>
                                                             <td>test</td>
                                                             <td>test</td>
                                                          </tr>
                                                          <tr>
                                                             <td>test</td>
                                                             <td>test</td>
                                                             <td>test</td>
                                                             <td>test</td>
                                                          </tr>
                                                      </tbody>
                                                      <tfoot>
                                                          <tr>
                                                              <th colspan="2">Immunization History<span style="float:right;" class="badge badge-danger">Reset</span></th>
                                                              <th colspan="2">Birth History</th>
                                                          </tr>
                                                      </tfoot>
                                                  </table>
                                              </div>
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <input type="checkbox" name="">Preliminary Examination
                                                      <input type="checkbox" name="">Lacrimal Examination
                                                  </div>
                                              </div>
                                              <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td style="padding: 0px;">
                                            <table class="">
                                                <tr style="background: #75e7be !important;">
                                                    <th>Date</th>
                                                    <th class="tab_tit">NCT</th>
                                                    <th class="tab_tit">GAT</th>
                                                    <th class="tab_tit">CCT</th>
                                                    <th class="tab_tit">CIOP</th>
                                                    <th class="tab_tit">Angle</th>
                                                    <th class="tab_tit">Color Vision</th>
                                                    <th class="tab_tit">Pupil</th>
                                                </tr>
                                                 <tr >
                                                    <td class="tab_tit" style="background: cornsilk;">Right Eye</td>
                                                    <td style="padding:10px;"><input type="text" name="resph1" id="resph1" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="recyl1" id="recyl1" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="reaxis1" id="reaxis1" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="reva1" id="reva1" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="reaxis1" id="reaxis1" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="reva1" id="reva1" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="reva1" id="reva1" class="form-control"></td>
                                                </tr>
                                                 <tr>
                                                    <td style="background: cornsilk;" class="tab_tit">Left Eye</td>
                                                    <td style="padding:10px;"><input type="text" name="resph2" id="resph2" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="recyl2" id="recyl2" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="reaxis2" id="reaxis2" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="reva2" id="reva2" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="reaxis1" id="reaxis1" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="reva1" id="reva1" class="form-control"></td>
                                                    <td style="padding:10px;"><input type="text" name="reva1" id="reva1" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td style="background: cornsilk;" class="tab_tit">Remarks</td>
                                                    <td style="padding:10px;" colspan="7"><input type="text" name="resph2" id="resph2" class="form-control"></td>
                                                    
                                                </tr>
                                            </table>
                                        </td>
                                      
                                    </tr>
                                </table>
                            </div> 
                            <br/>
                                                  <div class="row">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-hover">
                                                            <tr>
                                                               <th>Right Eye</th>
                                                               <th style="background: cornsilk !important;">Particulars</th>
                                                               <th>Left Eye</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" name="" class="form-control"></td>
                                                                <td style="background: cornsilk;">Diagnosis</td>
                                                                <td><input type="text" name="" class="form-control"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" name="" class="form-control"></td>
                                                                <td style="background: cornsilk;">Diagnosis Code No</td>
                                                                 <td><input type="text" name="" class="form-control"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" name="" class="form-control"></td>
                                                                <td style="background: cornsilk;">Lids</td>
                                                                 <td><input type="text" name="" class="form-control"></td>
                                                            </tr>
                                                            <tr>
                                                                 <td><input type="text" name="" class="form-control"></td>
                                                                <td style="background: cornsilk;">Lacrimal Ducts</td>
                                                                 <td><input type="text" name="" class="form-control"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" name="" class="form-control"></td>
                                                                <td style="background: cornsilk;">Conjuncitiva</td>
                                                               <td><input type="text" name="" class="form-control"></td>
                                                            </tr>
                                                            <tr>
                                                                 <td><input type="text" name="" class="form-control"></td>
                                                                <td style="background: cornsilk;">Cornea</td>
                                                                <td><input type="text" name="" class="form-control"></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                  </div>
                                          </div>


                                           <div class="col-md-6">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                      <input type="checkbox" name=""> Vision Readings
                                                      <input type="checkbox" name=""> Current Spectacle Prescription
                                                      <input type="checkbox" name=""> Current Contact Lens
                                                  </div>
                                              </div>

                                              <div class="row">
                                                  <div class="table-responsive" style="padding: 15px;margin-top: -18px;">
                                                      <table class="table table-bordered">
                                                          <tr>
                                                            <th></th>
                                                            <th colspan="2" align="center">UCVA</th>
                                                            <th>PH</th>
                                                            <th colspan="2" align="center">BCVA</th>
                                                          </tr>
                                                          <tr style="background: antiquewhite;">
                                                            <td></td>
                                                            <td>UCDVA</td>
                                                            <td>UCNVA</td>
                                                            <td>PH</td>
                                                            <td>UCDVA</td>
                                                            <td>UCNVA</td>
                                                          </tr>
                                                           <tr>
                                                              <td style="background: antiquewhite;">Right Eye</td>
                                                              <td style="background: cornsilk;"><input type="text" name="" class="form-control"></td>
                                                              <td style="background: cornsilk;"><input type="text" name="" class="form-control"></td>
                                                              <td style="background: whitesmoke;"><input type="text" name="" class="form-control"></td>
                                                              <td style="background: #fce1be;"><input type="text" name="" class="form-control"></td>
                                                              <td style="background: #fce1be;"><input type="text" name="" class="form-control"></td>
                                                          </tr>
                                                          <tr>
                                                              <td style="background: antiquewhite;">Left Eye</td>
                                                              <td style="background: cornsilk;"><input type="text" name="" class="form-control"></td>
                                                              <td style="background: cornsilk;"><input type="text" name="" class="form-control"></td>
                                                              <td style="background: whitesmoke;"><input type="text" name="" class="form-control"></td>
                                                              <td style="background: #fce1be;"><input type="text" name="" class="form-control"></td>
                                                              <td style="background: #fce1be;"><input type="text" name="" class="form-control"></td>
                                                          </tr>
                                                      </table>
                                                  </div>
                                              </div>

                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <input type="checkbox" name=""> Objective Refraction
                                                      <input type="checkbox" name=""> AR Kerotometry
                                                      <input type="checkbox" name=""> Manual Kerotometry
                                                  </div>
                                              </div>

                                                <div class="row">
                                                  <div class="table-responsive" style="padding: 15px;margin-top: -18px;">
                                                      <table class="table table-bordered">
                                                          <tr>
                                                            <th>UD</th>
                                                            <th>SPH</th>
                                                            <th>CYL</th>
                                                            <th>AXIS</th>
                                                            <th>CP</th>
                                                            <th>SPH</th>
                                                            <th>CYL</th>
                                                            <th>AXIS</th>
                                                          </tr>
                                                          <tr>
                                                             <td style="background: antiquewhite;">RE</td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control grid_table"></td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control grid_table"></td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control grid_table"></td>
                                                             <td style="background: antiquewhite;">RE</td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control grid_table"></td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control grid_table"></td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control"></td>
                                                          </tr>
                                                           <tr>
                                                             <td style="background: antiquewhite;">LE</td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control grid_table"></td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control grid_table"></td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control"></td>
                                                             <td style="background: antiquewhite;">LE</td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control grid_table"></td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control grid_table"></td>
                                                             <td style="background: cornsilk;"><input type="text" name="" class="form-control grid_table"></td>
                                                          </tr>
                                                          <tr>
                                                            <td>IPD</td>
                                                            <td><input type="text" name="" class="form-control grid_table"></td>
                                                            <td>PD RE</td>
                                                            <td><input type="text" name="" class="form-control grid_table"></td>
                                                            <td>PD LE</td>
                                                            <td colspan="3"><input type="text" name="" class="form-control grid_table"></td>
                                                          </tr>
                                                         
                                                      </table>
                                                  </div>
                                              </div>

                                               <div class="row">
                                                  <div class="col-md-12">
                                                      <input type="checkbox" name=""> Spectacle Correction
                                                      <input type="checkbox" name=""> Contact Lens Correction
                                                  </div>
                                              </div>

                                              <div class="row">
                                                 <div class="table-responsive" style="padding: 15px;margin-top: -18px;">
                                    <table class="table table-bordered">
                                        <tr style="background: #1e9ff24f">
                                            <th align="center" class="tab_tit">RE</th>
                                            <th align="center" class="tab_tit">LE</th>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px;">
                                                <table class="">
                                                    <tr style="background: cornsilk;">
                                                        <td style="background: cornsilk;"></th>
                                                        <td class="tab_tit">SPH</td>
                                                        <td class="tab_tit">CYL</td>
                                                        <td class="tab_tit">AXIS</td>
                                                        <td class="tab_tit">V/A</td>
                                                    </tr>
                                                     <tr>
                                                        <td class="tab_tit" style="background: cornsilk;">D.V</td>
                                                        <td style="padding:10px;"><input type="text" name="resph1" id="resph1" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="recyl1" id="recyl1" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="reaxis1" id="reaxis1" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="reva1" id="reva1" class="form-control"></td>
                                                    </tr>
                                                     <tr>
                                                        <td style="background: cornsilk;" class="tab_tit">N.V</td>
                                                        <td style="padding:10px;"><input type="text" name="resph2" id="resph2" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="recyl2" id="recyl2" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="reaxis2" id="reaxis2" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="reva2" id="reva2" class="form-control"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td style="padding: 0px;">
                                                <table class="">
                                                    <tr style="background: cornsilk;">
                                                        <td class="tab_tit">SPH</td>
                                                        <td class="tab_tit">CYL</td>
                                                        <td class="tab_tit">AXIS</td>
                                                        <td class="tab_tit">V/A</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:10px;"><input type="text" name="resph3" id="resph3" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="recyl3" id="recyl3" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="reaxis3" id="reaxis3" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="reva3" id="reva3" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:10px;"><input type="text" name="resph4" id="resph4" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="recyl4" id="recyl4" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="reaxis4" id="reaxis4" class="form-control"></td>
                                                        <td style="padding:10px;"><input type="text" name="reva4" id="reva4" class="form-control"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div> 
                                              </div>

                                              <div class="row form-group">
                                                <div class="col-md-3">
                                                    <label>Material</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>CR</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Usage</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Type</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                              </div>

                                              <div class="row ">
                                                <div class="col-md-2">
                                                    <label>IPD</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                                <div class="col-md-2">
                                                    <label>PD RE</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                                <div class="col-md-2">
                                                    <label>LE</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Segment RE</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                                <div class="col-md-2">
                                                    <label>LE</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                              </div>
                                              <hr/ style="background: black;">
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <input type="checkbox" name=""> Follow Up
                                                      <input type="checkbox" name=""> Work Up Plan
                                                  </div>
                                              </div>

                                              <div class="row ">
                                                <div class="col-md-2">
                                                    <label>MM</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                                <div class="col-md-2">
                                                    <label>WWW</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                                <div class="col-md-2">
                                                    <label>Days</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Date</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                                <div class="col-md-2">
                                                    <label>SOS</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                              </div>
                                              <div class="row ">
                                                <div class="col-md-12">
                                                    <label>Plan Of Action</label>
                                                    <input type="text" name="reva4" id="reva4" class="form-control">
                                                </div>
                                               
                                              </div>


                                           </div>

                                           

                                      </div>
                                    </form>
                                    </div>
                                    <div class="tab-pane" id="link21" role="tabpanel" aria-labelledby="link2-pill1" aria-expanded="false">
                                      <p>soon
                                      </p>
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
         
             $("body").removeClass(" vertical-layout vertical-menu 2-columns fixed-navbar pace-done menu-expanded").addClass( "vertical-layout vertical-menu 2-columns fixed-navbar pace-done menu-collapsed" );
          </script>
       
<style type="text/css">
    .nav.nav-pills.nav-justified {
    width: 20%;
}
.table th, .table td {
    padding: 0.55rem 1.5rem;
}
.grid_table {
   
    width: 50px;
}
</style>