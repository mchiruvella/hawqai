<div class="form-group row">
     <label class="col-sm-3 col-form-label">Project</label>
     <select class="form-control col-sm-9" name="project" value="<?php echo $this->input->post('project'); ?>">
        <option value="" <?php echo in_array($this->input->post('project'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
         <option value="Revlon UK" <?php echo $this->input->post('project') === 'Revlon UK' ? 'selected' : ''?>>Revlon UK</option>
         <option value="2" <?php echo $this->input->post('project') === '2' ? 'selected' : '' ;?>>2</option>
     </select>
     <input type="hidden"  name="confirm" value="true"/>
 </div>
 <div class="form-group row">
      <label class="col-sm-3 col-form-label">Environment</label>
      <select class="form-control col-sm-9" name="environment" value="<?php echo $this->input->post('environment')?>">
        <option value="" <?php echo in_array($this->input->post('environment'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
          <option value="staging" <?php echo $this->input->post('environment') === 'staging' ? "selected" : ''?>>Staging</option>
          <option value="2" <?php echo $this->input->post('environment') === '2' ? "selected" : ''?>>2</option>
      </select>
  </div>

  <div class="form-group row">
       <label class="col-sm-3 col-form-label">Testing Type</label>
       <select class="form-control col-sm-9" name="testingTYpe" value="<?php echo $this->input->post('testingTYpe')?>">
         <option value="" <?php echo in_array($this->input->post('testingTYpe'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
           <option value="smoke" <?php echo $this->input->post('testingTYpe') === 'smoke' ? "selected" : ''?>>Build smoke testing</option>
           <option value="regression" <?php echo $this->input->post('testingTYpe') === 'regression' ? "selected" : ''?>>System regression testing</option>
           <option value="integration" <?php echo $this->input->post('testingTYpe') === 'integration' ? "selected" : ''?>>System integration testing</option>
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
         <select class="form-control col-sm-9" name="browsers" value="<?php echo $this->input->post('browsers')?>">
            <option value="" <?php echo in_array($this->input->post('browsers'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
             <option value="chrome"  <?php echo $this->input->post('browsers') === 'chrome' ? "selected" : ''?>>Chrome</option>
             <option value="firefox"  <?php echo $this->input->post('browsers') === 'firefox' ? "selected" : ''?>>Firefox</option>
             <option value="safari"  <?php echo $this->input->post('browsers') === 'safari' ? "selected" : ''?>>Safari</option>
         </select>
     </div>

     <div class="form-group row" id="mobile">
          <label class="col-sm-3 col-form-label">Devices</label>
          <select class="form-control col-sm-9" name="devices" value="<?php echo $this->input->post('devices')?>">
            <option value="" <?php echo in_array($this->input->post('devices'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
              <option value="iphone11" <?php echo $this->input->post('devices') === 'iphone11' ? "selected" : ''?> >Iphone 11</option>
              <option value="samsung"  <?php echo $this->input->post('devices') === 'samsung' ? "selected" : ''?>Samsung</option>
              <option value="ipad"  <?php echo $this->input->post('devices') === 'ipad' ? "selected" : ''?>Ipad</option>
          </select>
      </div>

      <div class="form-group row">
           <label class="col-sm-3 col-form-label">Machine</label>
           <select class="form-control col-sm-9" name="machine" value="<?php echo $this->input->post('machine')?>">
              <option value="" <?php echo in_array($this->input->post('machine'), [NULL, ""])  ? 'selected' : '';?>>--- Select ---</option>
               <option value="machine1"  <?php echo $this->input->post('machine') === 'machine1' ? "selected" : ''?>>AWS Machine1</option>
               <option value="machine2"  <?php echo $this->input->post('machine') === 'machine2' ? "selected" : ''?>>AWS Machine2</option>
               <option value="machine3"  <?php echo $this->input->post('machine') === 'machine3' ? "selected" : ''?>>AWS Machine3</option>
           </select>
       </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Emails</label>
        <input class="form-control col-sm-9" type="text" name="emails" value="<?php echo $this->input->post('emails')?> "/>
        <em class="help-block float-right col-sm-6 text-italic">(Enter comma separated values)</em>
    </div>
