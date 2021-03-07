</div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Helen of Troy 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="ui-resources/vendor/jquery/jquery.min.js"></script>
    <script src="ui-resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="ui-resources/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="ui-resources/js/sb-admin-2.min.js"></script>

    <?php  if($this->uri->uri_string === 'auditreports') {?>
      <!-- Page level custom scripts -->
      <script src="ui-resources/vendor/datatables/jquery.dataTables.min.js"></script>
     <script src="ui-resources/vendor/datatables/dataTables.bootstrap4.min.js"></script>
      <!-- <script src="ui-resources/js/demo/datatables-demo.js"></script>-->
      <script type="text/javascript">

      $(document).ready(function() {
        $('#dataTable').DataTable({

         "bLengthChange" : false,
         "bInfo":false,
         columnDefs: [
             { orderable: false, targets: 0 }
          ]
        });
      });

      </script>
    <?php } ?>

    <?php  if($this->uri->uri_string === 'systemhealth') {?>
      <!-- Page level custom scripts -->
      <script src="ui-resources/vendor/datatables/jquery.dataTables.min.js"></script>
     <script src="ui-resources/vendor/datatables/dataTables.bootstrap4.min.js"></script>
      <!-- <script src="ui-resources/js/demo/datatables-demo.js"></script>-->
      <script type="text/javascript">

      $(document).ready(function() {
        $('#dataTable2').DataTable({

         "bLengthChange" : false,
         "bInfo":false,
         columnDefs: [
             { orderable: false, targets: 0 }
          ]
        });
      });

      </script>
    <?php } ?>

    <?php  if($this->uri->uri_string === 'execution') {?>

     <?php  if($this->input->post('confirm')) { ?>
      <script type="text/javascript">
      $('#executionModel').modal('show');
      </script>
    <?php } ?>
    <script type="text/javascript">

      function handleConfirmSubmit() {
        $('fieldset').removeAttr('disabled');
        return true;
      }

      $(document).ready(function() {

        $("#mobile").hide();
        $("#web").show();



      });

      $("input[name='device']").on("change", function() {
        var device = $("input[name='device']:checked").val();

        if(device ==="web") {
          $("#mobile").hide();
          $("#web").show();
        } else if(device ==="mobile"){
          $("#web").hide();
          $("#mobile").show();
        }
      })
    <?php } ?>
    </script>
</body>

</html>
