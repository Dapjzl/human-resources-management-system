<?php include 'connect/connect.php'; ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = dbconnect()->prepare("DELETE FROM leave_category WHERE id='$id'");
    $sql->execute();

    if ($sql==TRUE) {
        echo "<script>alert('Leave Category Removed Successfully'); window.location='view_leave_category'</script>";
    }
    
    else {
        echo "<script>alert('An Error Occurred While Deleting Leave Category!!!'); window.location='view_leave_category'</script>";
    }

}


?>