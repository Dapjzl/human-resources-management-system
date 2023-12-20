<?php include 'header.php'; ?>

<?php 

if (isset($_POST['submit'])) {
   $employee = check_input($_POST['employee']);
   $category = check_input($_POST['category']);
   $duration = check_input($_POST['duration']);
   $start_date = check_input($_POST['start_date']);
   $end_date = check_input($_POST['end_date']);
   $desc = check_input($_POST['desc']);
   $status = 0;

   if (empty($employee)  || empty($category) || empty($duration) || empty($start_date) || empty($end_date) || empty($desc)) {
      echo "<script>alert('You Have Not Completed All Required Fields!')</script>";
   }else{

      $reg = dbconnect()->prepare("INSERT INTO leave_app(employee,category,duration,start_date,end_date,description,status) VALUES(?,?,?,?,?,?,?)");
      $reg->execute([$employee,$category,$duration,$start_date,$end_date,$desc,$status]);
      if($reg){
      echo "<script> alert('Submitted Successfully, Awaiting Approval'); window.location='view_leave'</script>";
      }
      else{
         echo "<script> alert ('Oops, Operation Failed !');</script>";
         }
   }
}

?>


<div id="content-page" class="content-page">
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-lg-12">
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Apply For Leave</h4>
               </div>
                  </div>
                  <form method="POST">
                  <div class="iq-card-body">
                  <div class="form-group">
                     <label for="Employee">Employee:</label>
                     <select name="employee" class="form-control">
                        <option selected disabled> -- select Employee -- </option>
                        <?php
                           $query = dbConnect()->prepare("SELECT * FROM employee");
                           $query->execute();
                           while($row=$query->fetch()){
                              $id = $row['id'];
                              $username = $row['fname'].' '.$row['lname'];?>
                          <option value="<?php echo $username; ?>"><?php echo $username; ?></option>
                        <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="Leave Category">Leave Category:</label>
                     <select name="category" class="form-control">
                        <option selected disabled> -- Select Leave Category -- </option>
                        <?php
                           $query = dbConnect()->prepare("SELECT * FROM leave_category");
                           $query->execute();
                           while($row=$query->fetch()){
                              $id = $row['id'];
                              $category = $row['category'];?>
                          <option value="<?php echo $category; ?>"><?php echo $category; ?></option>
                        <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="duration">Duration</label>
                     <input name="duration" type="text" class="form-control" id="title" placeholder="Duration Of Leave">
                  </div>
                  <div class="form-group">
                     <label for="start date">Start Date</label>
                     <input name="start_date" type="date" class="form-control" id="title" placeholder="Start Date Of Leave">
                  </div>
                  <div class="form-group">
                     <label for="End Date">End Date</label>
                     <input name="end_date" type="date" class="form-control" id="title" placeholder="End Date Of Leave">
                  </div>
                  <div class="form-group">
                     <label for="desc">Reason:</label>
                     <textarea  class="form-control" name="desc" cols="30" rows="4" placeholder="Description Of The Course Here"></textarea>
                  </div>
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>



<?php include 'footer.php'; ?>