<?php include 'connect/connect.php'; ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = dbconnect()->prepare("DELETE FROM training_course WHERE id='$id'");
    $sql->execute();

    if ($sql==TRUE) {
        echo "<script>alert('Training Course Removed Successfully'); window.location='view_training_course'</script>";
    }
    
    else {
        echo "<script>alert('An Error Occurred While Deleting Training Course!!!'); window.location='view_training_course'</script>";
    }

}


?>