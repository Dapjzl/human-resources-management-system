<?php 
include 'connect/connect.php';

$_GET['id'];
if( isset($_GET['id']) ){
    $id = $_GET['id'];
}
                                                                                                
    $queryAct = dbConnect()->prepare("SELECT * FROM complain WHERE id=?");
    $queryAct->execute([$id]);
    $rowAct=$queryAct->fetch();
    $myst = $rowAct['status'];

    if($myst == 1){
    $queryAction = dbConnect()->prepare("UPDATE complain SET status=0 WHERE id=?");
    $queryAction->execute([$id]);

    echo '<script>alert("Expired");window.location="view_complain"</script>';
    }else{
    $queryAction = dbConnect()->prepare("UPDATE complain SET status=1 WHERE id=?");
    $queryAction->execute([$id]);
    echo '<script>alert("Activated");window.location="view_complain"</script>';
    }
    


?>