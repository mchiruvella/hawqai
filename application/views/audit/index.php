<?php $this->load->view('includes/header');?>


<!-- Begin Page Content -->
               <div class="container-fluid">

                   <!-- Page Heading -->
                   <!-- <h1 class="h3 mb-2 text-gray-800">Audit Reports</h1> -->
                   <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                       For more information about DataTables, please visit the <a target="_blank"
                           href="https://datatables.net">official DataTables documentation</a>.</p> -->

                   <!-- DataTales Example -->
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
                                       <tr>
                                           <td>Tiger Nixon</td>
                                           <td>System Architect</td>
                                           <td>Edinburgh</td>
                                           <td>61</td>
                                           <td>2011/04/25</td>
                                           <td>$320,800</td>
                                           <td>mchiruvella@helenoftroy.com	</td>
                                           <td>mchiruvella@helenoftroy.com	</td>
                                       </tr>
                                       <tr>
                                           <td>Garrett Winters</td>
                                           <td>Accountant</td>
                                           <td>Tokyo</td>
                                           <td>63</td>
                                           <td>2011/07/25</td>
                                           <td>$170,750</td>
                                           <td>mchiruvella@helenoftroy.com	</td>
                                           <td>mchiruvella@helenoftroy.com	</td>
                                       </tr>

                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>

               </div>
               <!-- /.container-fluid -->



<?php $this->load->view('includes/footer'); ?>