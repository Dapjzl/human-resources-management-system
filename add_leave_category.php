<?php include 'header.php'; ?>

<?php

if(isset($_POST['submit'])){
    $category = check_input($_POST['category']);

if (empty($category)) {
    echo "<script>alert('You Have Not Completed All Required Fields!')</script>";
}else{
    $reg = dbconnect()->prepare("INSERT INTO leave_category(category) VALUE(?)");
    $reg->execute([$category]);

if($reg){
    echo "<script> alert('Success, Category created successfully!');</script>";
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
                    <h4 class="card-title">Add New Leave Category</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <form method="POST">
                <div class="row">
                        <div class="form-group col-md-12">
                        <label for="category">Leave Category:</label>
                        <input name="category" type="text" class="form-control" placeholder="Add Leave Category..." >
                        </div>
                </div>
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</div>






<?php include 'footer.php';?>