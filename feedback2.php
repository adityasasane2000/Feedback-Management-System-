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

$view = $_POST['view'];
$view1 = $_POST['view1'];
$view2 = $_POST['view2'];


$query = mysqli_query($con, "INSERT INTO `rate`(`Computer Labs`,`Practical Labs`,`Collage Library`) VALUES ('$view','$view1','$view2')");
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
 
?>
</body>
</html>