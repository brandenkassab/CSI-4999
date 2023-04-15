<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $user_id = $_POST["user_id"];
  $new_vst_fee = $_POST["new_vst_fee"];

  
  $sql = "UPDATE user_form SET VST_FEE=$new_vst_fee WHERE id=$user_id";

  if (mysqli_query($conn, $sql)) {
    echo "VST_FEE updated successfully";
  } else {
    echo "Error updating VST_FEE: " . mysqli_error($conn);
  }
}



$sql = "SELECT id, name, VST_FEE FROM user_form";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Fines</title>
  <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #C2CAD0;
			padding: 20px;
		}
		h1 {
			color: #333333;
			margin-bottom: 20px;
		}
		form {
			background-color: #7E685A;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
		}
		label {
			display: block;
			margin-bottom: 10px;
			color: #7E685A;
			font-weight: bold;
		}
		input[type="text"],
		input[type="number"] {
			padding: 10px;
			border: 1px solid #C2B9B0;
			border-radius: 3px;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 20px;
		}
		input[type="submit"] {
			background-color: #C2B9B0;
			color: #ffffff;
			padding: 10px 20px;
			border-radius: 3px;
			border: none;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #C2B9B0;
		}
		p.success {
			color: #C2B9B0;
			font-weight: bold;
		}
		p.error {
			color: #C2B9B0;
			font-weight: bold;
		}
	
        .btn {
			background-color:#C2B9B0 ;
			color: #7E685A;
			padding: 10px 20px;
			border-radius: 3px;
			border: none;
			cursor: pointer;
			margin-top: 20px;
			display: inline-block;
			text-decoration: none;
            
		}
		.btn:hover {
			background-color: #C2B9B0;
			
		}
    
    
    </style>
</head>
<body>

<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>



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
    </div>
</div>
</br>
</br>




<h2>Fines</h2>

<a href="users.php" style="background-color: gray; color: white;">Back to User Page</a>


<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="search">Search:</label>
  <input type="text" name="search" id="search">
  <input type="submit" value="Search" style="background-color: gray; color: white;">
</form>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Total Fees Amount</th>
    <th>Action</th>
  </tr>

  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["VST_FEE"]; ?></td>
      <td>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <input type="hidden" name="user_id" value="<?php echo $row["id"]; ?>">
          <label for="new_vst_fee">Add New Fee:</label>
          <input type="text" name="new_vst_fee" id="new_vst_fee" value="<?php echo $row["VST_FEE"]; ?>">
          <input type="submit" value="Update" style="background-color: gray; color: white;">
        </form>
      </td>
    </tr>
  <?php } ?>

</table>



</body>
</html>

<?php

mysqli_close($conn);
?>


<footer style="height:auto; background-color:white; color:black; margin-top: 50px; padding-top: 20px;">
  <h3>BookStash.io</h3><br>
  <h4>| Library Information |</h4><br>
  <h5> Email: libraryemail@gmail.com </h5>
  <h5> Phone number: 111-114-1454</h5></br>
</footer>
</center>