<?php //ini_set('display_errors', 1);
$this->load->view('includes/header');?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Execution Tests</h1>
  </div> -->

  <div class="row">
    <?php if ($this->session->flashdata('msg') != '') { ?>
        <div class="alert alert-warning col-lg-12 text-center">
            <?= $this->session->flashdata('msg', 300); ?>
        </div>
    <?php } ?>
  </div>

  <div class="row">
    <!-- Basic Card Example -->

     <div class="card shadow mb-6 col-7 offset-2 pr-0 pl-0">
         <div class="card-header py-4">
             <h6 class="m-0 font-weight-bold text-gray-800">Change Password</h6>
         </div>
         <div class="card-body">
           <form role="form" id="updatePassword" method="post" action="changepassword/update">

             <div class="form-group row">
                 <label class="col-sm-3 col-form-label">Password</label>
                 <input class="form-control col-sm-9" type="password" name="password" id="password" required value="" autocomplete="off"/>
             </div>

             <div class="form-group row">
                 <label class="col-sm-3 col-form-label">Confirm Password</label>
                 <input class="form-control col-sm-9" type="password" required name="confirm_password" id="confirm_password" value=""  autocomplete="off"/>
             </div>

              <button type="submit"class="btn btn-primary btn-icon-split float-right">
                  <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                  </span>
                  <span class="text">Update</span>

              </button>
          </form>

          <!-- Modal starts here-->

         </div>
     </div>
  </div>
</div>

<script type="text/javascript">

var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Confirm password is not matching with password");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

</script>
<?php $this->load->view('includes/footer'); ?>
