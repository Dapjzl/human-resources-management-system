<?php include 'connect/connect.php'; ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = dbconnect()->prepare("DELETE FROM leave_app WHERE id='$id'");
    $sql->execute();

    if ($sql==TRUE) {
        echo "<script>alert('Leave Record Removed Successfully'); window.location='view_leave'</script>";
    }
    
    else {
        echo "<script>alert('An Error Occurred While Deleting Leave Record!!!'); window.location='view_leave'</script>";
    }

}


?>