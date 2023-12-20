<?php include 'header.php'; ?>


<div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
                  <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">View Complain</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                         <div id="table" class="table-editable">
                           <table class="table table-bordered table-responsive-md table-striped text-center">
                             <thead>
                               <tr>
                                 <th><p style="color:blue">ID</p>Continuation</th>
                                 <th>Employee</th>
                                 <th>Complaint Type</th>
                                 <th>Description</th>
                                 <th width="3%">Document Attached</th>
                                 <th>Complaint Date</th>
                                 <th>Status</th>
                                 <th width="10%">Action</th>
                               </tr>
                            </thead>
                             <tbody>
                            <?php

                              $n = 0;

                              $sql = dbConnect()->prepare("SELECT * FROM complain");
                              $sql->execute();
                              while ($row = $sql->fetch()) {
                                $n++;
                                $id = $row['id'];
                                $attachment = $row['attachment'];
                                $employee = $row['employee'];	
                                $complaint_type = $row['complaint_type'];	
                                $desc = $row['description'];	
                                $status = $row['status'];	
                                $created = $row['created'];	
                              
                            ?>
                          <tr>
                              <td scope="row"><?php echo $n ?></td>
                              <td><?php echo $employee; ?></td>
                              <td><?php echo $complaint_type; ?></td>
                              <td><?php echo $desc; ?></td>
                              <td><img style="max-width: 23px; max-height: 23px; border-radius: 10px;" src="images/complain/<?php echo $attachment; ?>"></td>
                              <td><?php echo $created; ?></td>
                              <td>
                                        <?php
                                         if ($status == 1) {
                                          echo '<span class="badge iq-bg-success">Active</span></td>';
                                           }else{
                                          echo '<span class="badge iq-bg-danger">Expired</span></td>';
                                           }
                                        ?>
                              </td>      
                              <td>
                            <?php
                              if ($status == 1) {
                                echo '<a href="complain_status?id=' . $id . '" class="iq-bg-danger">Decline</a>';
                              }else{
                                echo '<a href="complain_status?id=' . $id . '" class="iq-bg-success">Approve</a>';
                              }
                            ?> 
                            </td>
                            <?php } ?>
                          </tr>
                             </tbody>
                           </table>
                         </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>
</div>


<?php include 'footer.php'; ?>