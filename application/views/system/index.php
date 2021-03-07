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
                           <h6 class="m-0 font-weight-bold text-dark">System Health</h6>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">

                             <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                 <thead>
                                     <tr style="background-color: #e2e2e2;border:1px solid #b6b6b6">
                                         <th rowspan="2">Project</th>
                                         <th  rowspan="2">CRON Job</th>
                                         <th  rowspan="2">Order Export Job</th>
                                         <th  rowspan="2">Order Import Job</th>
                                         <th  rowspan="2">Index Management</th>
                                         <th  rowspan="2">Order Tracking Status</th>
                                         <th colspan="2" valign="center">
                                           Google Insight Score
                                         </th>

                                     </tr>
                                     <tr style="background-color: #e2e2e2;border:1px solid #b6b6b6">
                                         <th>Web</th>
                                         <th>Mobile</th>
                                     </tr>

                                 </thead>

                                 <tbody>
                                   <?php for($i=0; $i< sizeof($records); $i++) {?>
                                     <tr>
                                         <td style="background-color: #e2e2e2;"><?php echo $records[$i]["Project"]; ?></td>
                                         <td><?php echo $records[$i]["Cronjob"]; ?></td>
                                         <td><?php echo $records[$i]["OrderExport"]; ?></td>
                                         <td><?php echo $records[$i]["OrderImport"]; ?></td>
                                         <td><?php echo $records[$i]["IndexManagement"]; ?> </td/>

                                         <td><?php echo $records[$i]["OrderTrackingStatus"]; ?></td>
                                         <td><?php echo $records[$i]["InsightScoreWeb"]; ?></td>
                                         <td><?php echo $records[$i]["InsightScoreMobile"]; ?></td>
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
