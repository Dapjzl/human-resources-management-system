<?php
session_start();
function dbConnect(){
    try{
        $username='root';
        $pass='';
        $con= new pdo("mysql:host=localhost; dbname=hrms", $username, $pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $con;
        
    } catch (PDOException $e) {
        echo 'ERROR', $e->getMessage();
    }
}

function check_input($name){
    $data =trim($name);
    $data =stripslashes($name);
    $data =htmlspecialchars($name);
    return $data;
}

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hrms";

$connect2db = new PDO("mysql:dbname=$dbname; host=$host", $username, $password);
if($connect2db){
		//echo 'connected';
	}
?>
<?php
    $connect = mysqli_connect('localhost','root','','hrms');
?>