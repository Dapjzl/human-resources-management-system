<?php 
include 'connect/connect.php';

$_GET['id'];
if( isset($_GET['id']) ){
    $id = $_GET['id'];
}

                                                                                                
    $queryAct = dbConnect()->prepare("SELECT * FROM leave_app WHERE id=?");
    $queryAct->execute([$id]);
    $rowAct=$queryAct->fetch();
    $myst = $rowAct['status'];
    
    if($myst == 1){
    $queryAction = dbConnect()->prepare("UPDATE leave_app SET status=0 WHERE id=?");
    $queryAction->execute([$id]);

    echo '<script>alert("Declined");window.location="view_leave"</script>';
    }else{
    $queryAction = dbConnect()->prepare("UPDATE leave_app SET status=1 WHERE id=?");
    $queryAction->execute([$id]);
    echo '<script>alert("Approved");window.location="view_leave"</script>';
    }
    


?>