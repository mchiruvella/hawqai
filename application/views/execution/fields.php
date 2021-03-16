<div class="form-group row">
     <label class="col-sm-3 col-form-label">Project</label>
          <select class="form-control col-sm-9" name="project" value="<?php echo $this->input->post('project'); ?>" onchange="getTestCasesReport()">
            <option value="" <?php echo in_array($this->input->post('project'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
              <option value="Revlon UK" <?php echo $this->input->post('project') === 'Revlon UK' ? 'selected' : ''?>>Revlon UK</option>
              <option value="Hydroflask" <?php echo $this->input->post('project') === 'Hydroflask' ? 'selected' : '' ;?>>Hydroflask</option>
              <option value="Revlon US" <?php echo $this->input->post('project') === 'Revlon US' ? 'selected' : ''?>>Revlon US</option>
              <option value="OXO" <?php echo $this->input->post('project') === 'OXO' ? 'selected' : ''?>>OXO</option>
              <option value="Vicks" <?php echo $this->input->post('project') === 'Vicks' ? 'selected' : ''?>>Vicks</option>
              <option value="PUR" <?php echo $this->input->post('project') === 'PUR' ? 'selected' : ''?>>PUR</option>
         </select>
     <input type="hidden"  name="confirm" value="true"/>
 </div>
 <div class="form-group row">
      <label class="col-sm-3 col-form-label">Environment</label>
      <select class="form-control col-sm-9" name="environment" value="<?php echo $this->input->post('environment')?>" onchange="getTestCasesReport()">
        <option value="" <?php echo in_array($this->input->post('environment'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
          <option value="Staging" <?php echo $this->input->post('environment') === 'Staging' ? "selected" : ''?>>Staging</option>
          <option value="Development" <?php echo $this->input->post('environment') === 'Development' ? "selected" : ''?>>Development</option>
          <option value="Production" <?php echo $this->input->post('environment') === 'Production' ? "selected" : ''?>>Production</option>
      </select>
  </div>

  <div class="form-group row">
       <label class="col-sm-3 col-form-label">Testing Type</label>
       <select class="form-control col-sm-9" name="testingTYpe" value="<?php echo $this->input->post('testingTYpe')?>"  onchange="getTestCasesReport()">
         <option value="" <?php echo in_array($this->input->post('testingTYpe'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
           <option value="Build smoke testing" <?php echo $this->input->post('testingTYpe') === 'Build smoke testing' ? "selected" : ''?>>Build smoke testing</option>
           <option value="System regression testing" <?php echo $this->input->post('testingTYpe') === 'System regression testing' ? "selected" : ''?>>System regression testing</option>
           <option value="System integration testing" <?php echo $this->input->post('testingTYpe') === 'System integration testing' ? "selected" : ''?>>System integration testing</option>
       </select>
   </div>


   <div class="form-group row">
        <label class="col-sm-3 col-form-label">Device Type</label>
        <div class="col-sm-9">
          <input type="radio" name="device" value="web" <?php echo in_array($this->input->post('device'), ["web", "", null])  ? 'checked' : '';?> id="webRadio"/>
          <label for="webRadio">Web</label>
          <input type="radio" name="device" value="mobile" <?php echo $this->input->post('device') === 'mobile' ? "checked" : "";?> id="mobRadio" />
          <label for="mobRadio">Mobile</label>
      </div>
    </div>

    <div class="form-group row" id="web">
         <label class="col-sm-3 col-form-label">Browsers</label>
         <select class="form-control col-sm-9" name="browsers" value="<?php echo $this->input->post('browsers')?>" >
            <option value="" <?php echo in_array($this->input->post('browsers'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
             <option value="Chrome"  <?php echo $this->input->post('browsers') === 'Chrome' ? "selected" : ''?>>Chrome</option>
             <option value="Firefox"  <?php echo $this->input->post('browsers') === 'Firefox' ? "selected" : ''?>>Firefox</option>
             <option value="Safari"  <?php echo $this->input->post('browsers') === 'Safari' ? "selected" : ''?>>Safari</option>
         </select>
     </div>

     <div class="form-group row" id="mobile">
          <label class="col-sm-3 col-form-label">Devices</label>
          <select class="form-control col-sm-9" name="devices" value="<?php echo $this->input->post('devices')?>" >
                                        <option value="" <?php echo in_array($this->input->post('devices'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
                                          <option value="iPhone" <?php echo $this->input->post('devices') === 'iPhone' ? "selected" : ''?>>iPhone</option>
                                          <option value="Android"  <?php echo $this->input->post('devices') === 'Android' ? "selected" : ''?>>Android</option>
                                          <option value="iPad"  <?php echo $this->input->post('devices') === 'iPad' ? "selected" : ''?>>iPad</option>
                                      </select>
      </div>

      <div class="form-group row" id="testcases_block">
          <label class="col-sm-3 col-form-label">No of Test Cases</label>
          <input class="form-control col-sm-9" type="text" name="testcases" value="<?php echo $this->input->post('testcases')?>" readonly/>
      </div>


      <div class="form-group row">
           <label class="col-sm-3 col-form-label">Machine</label>
           <select class="form-control col-sm-9" name="machine" value="<?php echo $this->input->post('machine')?>">
              <option value="" <?php echo in_array($this->input->post('machine'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
               <option value="AWS Machine1"  <?php echo $this->input->post('machine') === 'AWS Machine1' ? "selected" : ''?>>AWS Machine1</option>
               <option value="AWS Machine2"  <?php echo $this->input->post('machine') === 'AWS Machine2' ? "selected" : ''?>>AWS Machine2</option>
               <option value="AWS Machine3"  <?php echo $this->input->post('machine') === 'AWS Machine3' ? "selected" : ''?>>AWS Machine3</option>
           </select>
       </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Emails</label>
        <input class="form-control col-sm-9" type="text" name="emails" value="<?php echo $this->input->post('emails')?> "/>
        <em class="help-block float-right col-sm-6 text-italic">(Enter comma separated values)</em>
    </div>
