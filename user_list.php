<?php include 'header.php'; ?>
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Employee List</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <div class="row justify-content-between">
                        <div class="col-sm-12 col-md-6">
                           <div id="user_list_datatable_info" class="dataTables_filter">
                              <form class="mr-3 position-relative">
                                 <div class="form-group mb-0">
                                    <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                           <div class="user-list-files d-flex float-right">
                              <a class="iq-bg-primary" href="javascript:void();">
                                 Print
                              </a>
                              <a class="iq-bg-primary" href="javascript:void();">
                                 Excel
                              </a>
                              <a class="iq-bg-primary" href="javascript:void();">
                                 Pdf
                              </a>
                           </div>
                        </div>
                     </div>
                     <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                        <thead>
                           <tr>
                              <th>S/N</th>
                              <th>Img</th>
                              <th>Fullname</th>
                              <th>Emp-Id</th>
                              <th>Dept</th>
                              <th>Role</th>
                              <th>last_update</th>
                              <th>update_by</th>
                              <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $fetching = dbConnect()->prepare("SELECT * FROM employee");
                           $fetching->execute();
                           $n = 0;
                           while ($route = $fetching->fetch()) {
                              $n++;
                              $deptid = $route['id'];
                           ?>
                              <tr>
                                 <td><?php echo $n ?></td>
                                 <td><img style="width: 35px; height: 35px; border-radius: 10px;" src="uploads/employee/<?php echo $route['emp_img'] ?>" alt="" srcset=""></td>
                                 <td><?php echo $route['firstname'] . ' ' . $route['lastname'] ?></td>
                                 <td><?php echo $route['emp_id'] ?></td>
                                 <td><?php echo $route['dept']  ?></td>
                                 <td><?php echo $route['role'] ?></td>
                                 <td><?php echo $route['last_update'] ?></td>
                                 <td><?php echo $route['update_by'] ?></td>
                                 <td>
                                    <div class="flex align-items-center list-user-action">
                                       <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="user_single?id=<?php echo $deptid; ?>"><i class="las la-eye"></i></a>
                                       <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="update_department?id=<?php echo $deptid; ?>"><i class="ri-pencil-line"></i></a>
                                       <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="delete_department?id=<?php echo $deptid; ?>" onclick="return confirm('Are you sure you want to delete employee?')"><i class="ri-delete-bin-line"></i></a>
                                    </div>
                                 </td>
                              </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                  </div>
                  <div class="row justify-content-between mt-3">
                     <div id="user-list-page-info" class="col-md-6">
                        <span>Showing 1 to 5 of 5 entries</span>
                     </div>
                     <div class="col-md-6">
                        <nav aria-label="Page navigation example">
                           <ul class="pagination justify-content-end mb-0">
                              <li class="page-item disabled">
                                 <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                              </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                 <a class="page-link" href="#">Next</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'footer.php'; ?>