<html>
 <head>
 <script type="text/javascript">
   alert("Thank You..! Your Feedback is Valuable to Us");
   window.location = "./first.php";
 </script>
 </head>

 <body>

 <?php 
ob_start(); 
require 'config.php';

$view1 = $_POST['view1'];
$view2 = $_POST['view2'];
$view3 = $_POST['view3'];
$view4 = $_POST['view4'];



$query = mysqli_query($con, "INSERT INTO `poll`(`Question1`,`Question2`,`Question3`,`Question4`) VALUES ('$view1','$view2','$view3','$view4')");

 ob_end_flush(); 
 
?>
 </body>	
</html>

