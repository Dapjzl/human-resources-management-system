<?php 
include 'connect/connect.php';

$_GET['id'];
if( isset($_GET['id']) ){
    $id = $_GET['id'];
}


    
    $queryAction = dbConnect()->prepare("DELETE FROM jobs WHERE id=?");
    $queryAction->execute([$id]);

    echo '<script>alert("Record Deleted Successfully !!!");window.location="jobs_posted"</script>';
    
    

    
// }
   

// }



?>