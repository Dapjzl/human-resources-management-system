<?php include 'connect/connect.php'; ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}else{
    echo "<script>window.location='view_complaint_type'</script>";
}
    
    $sql = dbconnect()->prepare("DELETE FROM complaint_type WHERE id='$id'");
    $sql->execute();

    if ($sql==TRUE) {
        echo "<script>alert('Complaint Type Removed Successfully'); window.location='view_complaint_type'</script>";
    }
    
    else {
        echo "<script>alert('An Error Occurred While Deleting Complaint Type!'); window.location='view_complaint_type'</script>";
    }




?>