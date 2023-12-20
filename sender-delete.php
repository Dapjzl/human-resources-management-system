<?php 
include 'connect/connect.php';


$_GET['id'];


if (isset($_GET['id'])) {
$id = $_GET['id'];
}

$queryAction = dbConnect()->prepare("UPDATE mail SET sender_trash=? WHERE id=?");
    if( $queryAction->execute([1,$id]) ){
    echo '<script>alert("Moved to Trash Successfully !!!");window.location="sent-mail"</script>';
    // header('location:jobs_posted');
}




?>