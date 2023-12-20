<?php include 'connect/connect.php';?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleting = dbConnect()->prepare("DELETE FROM department WHERE id=?");
    $deleting->execute([$id]);
    if ($deleting) {
        echo "<script>alert('Department deleted successfully');window.location='department'</script>";
    }else {
        echo "<script>alert('There was an error deleting department');window.location='department'</script>";
    }
}else {
    echo "<script>window.location='department'</script>";
}