
<?php

@include 'config.php';

    $conn = mysqli_connect("localhost", "root", "", "user_db");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

	if ($db->connect_errno) {
			echo '<p>Failed to connect to database: ' . $db->connect_error . '</p>';
			exit();
		}






$s='<table align="center" dir="ltr">';

 $s.='<h3>Current books rented:</h3>'.$row0[0]'"/>
 $q2="SELECT * FROM VST_CUR where CARD_ID=".$cardId;
 $result2=mysqli_query($con,$q2)or die(mysqli_error($con));
 while($row2=mysqli_fetch_array($result2)){


<h3>History:</h3>'.$row[1]'"/>
 $q2="SELECT * FROM VST_HIST where CARD_ID=".$cardId;
 $result2=mysqli_query($con,$q2)or die(mysqli_error($con));
 while($row2=mysqli_fetch_array($result2)){

<h3>Current Fines:</h3>'.$row[2].'"/>
 $q2="SELECT * FROM VST_FEE where CARD_ID=".$cardId;
 $result2=mysqli_query($con,$q2)or die(mysqli_error($con));
 while($row2=mysqli_fetch_array($result2)){


<h3>Request new ID card</h3>';
 

 $s.='</table>';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Account</title>


   <link rel="stylesheet" href="css/style.css">
<head>
    <center><a href="home.php"><img src="../img/icon2.png" width="160px" height="160px"></a>
<h1 style="font-size: 50px;">BookStash.io</h1>
</center>


<center> 



<center>
<div class="navigation-menu">
    <div id ="navigation">
        <ul>
        <li><a href="home.php">Home</a></li>
            <li><a href="fiction.php">Fiction</a></li>
            <li><a href="History.php">History</a></li>
            <li><a href="Non-Fiction.php">Non-Fiction</a></li>
            <li><a href="YoungAdults.php">Young Adults</a></li>
            <li><a href="Sports.php">Sports</a></li>
            <li><a href="BestSellers.php">Best Sellers</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="login_form.php">Log In</a></li>
        </ul>
   
   </head>

   <body>


<footer style="height:auto; background-color:#000000;">
  <h3>BookStash.io</h3><br>
  <h4>| Library Information |</h4>><br>
  <h5> Email: libraryemail@gmail.com </h5>
  <h5> Phone number: 111-114-1454</h5>
</footer>

</center>
</body>
</html>

