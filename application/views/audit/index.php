<?php $this->load->view('includes/header');?>


<!-- Begin Page Content -->
               <div class="container-fluid">

                   <!-- Page Heading -->
                   <!-- <h1 class="h3 mb-2 text-gray-800">Audit Reports</h1> -->
                   <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                       For more information about DataTables, please visit the <a target="_blank"
                           href="https://datatables.net">official DataTables documentation</a>.</p> -->

                   <!-- DataTales Example -->
                   <?php
                  //var_dump( $this->session->flashdata('run_response'));
                   ?>
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-dark">Audit Report</h6>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   <thead>
                                       <tr>
                                           <th>Project</th>
                                           <th>Environment</th>
                                           <th>Testing Type</th>
                                           <th>Browser</th>
                                           <th>Scheduled AT</th>
                                           <th>Status</th>
                                           <th>Triggered By</th>
                                           <th>Emails</th>
                                       </tr>
                                   </thead>

                                   <tbody>

                                     <?php for($i=0; $i< sizeof($records); $i++) {?>
                                       <tr>
                                           <td><?php echo $records[$i]["Project"]; ?></td>
                                           <td><?php echo $records[$i]["Environment"]; ?></td>
                                           <td><?php echo $records[$i]["TestingType"]; ?></td>
                                           <td><?php echo $records[$i]["Browser"]; ?></td>
                                           <td><?php echo $records[$i]["ScheduledAt"]; ?></td>
                                           <td><?php echo $records[$i]["ExecutionStatus"]; ?></td>
                                           <td><?php echo $records[$i]["TriggeredBy"]; ?></td>
                                           <td><?php echo $records[$i]["Emails"]; ?></td>
                                       </tr>

                                     <?php } ?>


                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>

               </div>
               <!-- /.container-fluid -->



<?php $this->load->view('includes/footer'); ?>
