<?php
include 'connect.php';

$course_name = $_GET['course_name'];


$selector1 = dbConnect()->prepare("SELECT cost FROM training_course WHERE course_name=?");
$selector1->execute([$course_name]);
$rex=$selector1->fetch();
$pp = $rex['cost'];

?>


<label for="cost">Training Cost:</label>
<input name="cost" value="<?php echo $pp;?>" type="text" class="form-control">