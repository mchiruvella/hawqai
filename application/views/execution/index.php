<?php $this->load->view('includes/header');?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Execution Tests</h1>
  </div> -->

  <div class="row">
    <!-- Basic Card Example -->
     <div class="card shadow mb-6 col-7 offset-2 pr-0 pl-0">
         <div class="card-header py-4">
             <h6 class="m-0 font-weight-bold text-gray-800">Execution Tests</h6>
         </div>
         <div class="card-body">
           <form role="form">

                <div class="form-group row">
                     <label class="col-sm-3 col-form-label">Project</label>
                     <select class="form-control col-sm-9">
                         <option>Revlon UK</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                     </select>
                 </div>

                 <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Environment</label>
                      <select class="form-control col-sm-9">
                          <option>Staging</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                      </select>
                  </div>

                  <div class="form-group row">
                       <label class="col-sm-3 col-form-label">Testing Type</label>
                       <select class="form-control col-sm-9">
                           <option>Build smoke testing</option>
                           <option>System regression testing</option>
                           <option>System integration testing</option>
                       </select>
                   </div>


                   <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Device Type</label>
                        <div class="col-sm-9">
                          <input type="radio" name="device" value="web" checked id="webRadio"/>
                          <label for="webRadio">Web</label>
                          <input type="radio" name="device" value="mobile" id="mobRadio" />
                          <label for="mobRadio">Mobile</label>
                      </div>
                    </div>

                    <div class="form-group row" id="web">
                         <label class="col-sm-3 col-form-label">Browsers</label>
                         <select class="form-control col-sm-9">
                             <option>Chrome</option>
                             <option>Firefox</option>
                             <option>Safari</option>
                         </select>
                     </div>

                     <div class="form-group row" id="mobile">
                          <label class="col-sm-3 col-form-label">Browsers</label>
                          <select class="form-control col-sm-9">
                              <option>Iphone 11</option>
                              <option>Samsung</option>
                              <option>Ipad</option>
                          </select>
                      </div>

                      <div class="form-group row">
                           <label class="col-sm-3 col-form-label">Machine</label>
                           <select class="form-control col-sm-9">
                               <option>AWS Machine1</option>
                               <option>AWS Machine2</option>
                               <option>AWS Machine3</option>
                           </select>
                       </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Emails</label>
                        <input class="form-control col-sm-9" type="text" />
                        <em class="help-block float-right col-sm-6 text-italic">(Enter comma separated values)</em>
                    </div>

                    <a href="#" class="btn btn-primary btn-icon-split float-right" data-toggle="modal" data-target="#executionModel">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Next</span>
                    </a>

          </form>


          <!-- Modal starts here-->

          <div class="modal fade" id="executionModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Confirm execution?</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body">

                        <form role="form">

                          <fieldset disabled>

                             <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Project</label>
                                  <select class="form-control col-sm-9">
                                      <option>Revlon UK</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                  </select>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Environment</label>
                                   <select class="form-control col-sm-9">
                                       <option>Staging</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                       <option>5</option>
                                   </select>
                               </div>
                               <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Device Type</label>
                                    <div class="col-sm-9">
                                      <input type="radio" name="device" value="web" checked/> Web
                                      <input type="radio" name="device" value="mobile"/>Mobile
                                  </div>
                                </div>

                                <div class="form-group row" id="web1">
                                     <label class="col-sm-3 col-form-label">Browsers</label>
                                     <select class="form-control col-sm-9">
                                         <option>Chrome</option>
                                         <option>Firefox</option>
                                         <option>Safari</option>
                                     </select>
                                 </div>

                                 <div class="form-group row" id="mobile1">
                                      <label class="col-sm-3 col-form-label">Devices</label>
                                      <select class="form-control col-sm-9">
                                          <option>Iphone 11</option>
                                          <option>Samsung</option>
                                          <option>Ipad</option>
                                      </select>
                                  </div>
                                  <div class="form-group row">
                                       <label class="col-sm-3 col-form-label">Machine</label>
                                       <select class="form-control col-sm-9">
                                           <option>AWS Machine1</option>
                                           <option>AWS Machine2</option>
                                           <option>AWS Machine3</option>
                                       </select>
                                   </div>

                                 <div class="form-group row">
                                     <label class="col-sm-3 col-form-label">Emails</label>
                                     <input class="form-control col-sm-9" type="text" />
                                     <em class="help-block float-right col-sm-6 text-italic">(comma separated values)</em>
                                 </div>

                              </fieldset>

                               </form>
                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          <a class="btn btn-primary" href="auditreports">Run</a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Modal ends here -->

         </div>
     </div>
  </div>
</div>

<?php $this->load->view('includes/footer'); ?>
