<?php include 'connect/connect.php'; ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = dbconnect()->prepare("DELETE FROM training WHERE id='$id'");
    $sql->execute();

    if ($sql==TRUE) {
        echo "<script>alert('Training Removed Successfully'); window.location='view_training'</script>";
    }
    
    else {
        echo "<script>alert('An Error Occurred While Deleting Training!!!'); window.location='view_training'</script>";
    }

}




?>