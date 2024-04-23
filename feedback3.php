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


$name = $_POST['name'];
$email = $_POST['email'];
$num = $_POST['mobile'];
$sugg = $_POST['suggestions'];



$query = mysqli_query($con, "INSERT INTO `suggestions`(`name`,`email`,`mobile_no`,`suggestions`) VALUES ('$name','$email','$num','$sugg')");
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';

?>
</body>
</html>
