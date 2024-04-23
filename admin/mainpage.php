<!DOCTYPE html>
<html lang="en" >

<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
#students {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#students td, #students th {
  border: 1px solid #ddd;
  padding: 8px;
}

#students tr:nth-child(even){background-color: #f2f2f2;}
#students tr:nth-child(odd){background-color: #f2f2f2;}
#students tr:hover {background-color: #ddd;}

#students th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
</style>
  <meta charset="UTF-8">
  <title>Feedback</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body> 
   <form action = "logout.php" method="POST"> 
          <div class="w3-show-inline-block">
          <div class="w3-bar">
            <center><input type="submit" value="Logout" name="logout" class="w3-btn w3-black" id="logoutbtn"></center><br><br>
        </div>
        </div>  
  </form>



  <?php 
  session_start();
  error_reporting(0);
  require 'config.php';
   if (isset($_SESSION['login_user'])) {
          $userLoggedIn = $_SESSION['login_user'];
          $pollresult = mysqli_query($con,"SELECT * FROM poll");
          $rateresult = mysqli_query($con,"SELECT * FROM rate"); 
          $suggresult = mysqli_query($con,"SELECT * FROM suggestions"); 

            echo "<table border='1' id='students'>
            <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Question-1</th>
            <th>Question-2</th>
            <th>Question-3</th>
            <th>Question-4</th>
            <th>Computer Labs</th>
            <th>Practical Labs</th>
            <th>Collage Library</th>
            <th>Suggestions</th>
            </tr>";
          
              while($poll = mysqli_fetch_array($pollresult))
            {
            echo "<tr>";
            $rate = mysqli_fetch_array($rateresult);
            $sugg = mysqli_fetch_array($suggresult);

            echo "<td>" . $sugg['name'] . "</td>";
            echo "<td>" . $sugg['email'] . "</td>";
            echo "<td>" . $sugg['mobile_no'] . "</td>";
            echo "<td>" . $poll['Question1'] . "</td>";
            echo "<td>" . $poll['Question2'] . "</td>";
            echo "<td>" . $poll['Question3'] . "</td>";
            echo "<td>" . $poll['Question4'] . "</td>";
            echo "<td>" .$rate['Computer Labs'] . "</td>";
            echo "<td>" .$rate['Practical Labs'] . "</td>";
            echo "<td>" .$rate['Collage Library'] . "</td>";
            echo "<td>" .$sugg['suggestions'] . "</td>";
            }
             echo "</table>";                                                                    
}
   ?>
    
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
</body>

</html>

