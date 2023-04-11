<!DOCTYPE html>
<html>
<head>
	<title>Add Book</title>
    


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

<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<center><a href="home.php"><img src="../img/icon2.png" width="50px" height="50px"></a>
<center><button onclick="window.location.href='login_form.php'">Login In <br></button></center>
<h1>BookStash.io</h1>
</center>
<center> <button style="background-color: white; color: black; font-size: 20px; padding: 15px 30px; border: 2px solid black; border-radius: 10px;" onclick="window.location.href='search.php'">Search</button> </center>
<br>
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
        </ul>
    </div>
</div>
</br>
</br>


<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM user_form WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}


$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}


$sql = "SELECT * FROM user_form WHERE name LIKE '%$search%' OR email LIKE '%$search%'";
$result = mysqli_query($conn, $sql);




echo "<form method='get'>";
echo "<input type='text' name='search' value='$search'>";
echo "<input type='submit' value='Search'>";
echo "</form>";


echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>User Type</th><th>VST_CUR</th><th>VST_HIST</th><th>VST_FEE</th><th>Action</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['user_type'] . "</td>";
    echo "<td>" . $row['VST_CUR'] . "</td>";
    echo "<td>" . $row['VST_HIST'] . "</td>";
    echo "<td>" . $row['VST_FEE'] . "</td>";
    echo "<td><a href='remove_user.php?id=" . $row['id'] . "'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";


mysqli_close($conn);
?> 

<style>
    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background-color: #f5f5f5;
}

input[type="text"] {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 8px;
  margin-bottom: 16px;
}

input[type="submit"] {
  background-color: #C2B9B0;
  color: white;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

a {
  text-decoration: none;
  color: #C2B9B0;
}

a:hover {
  text-decoration: underline;
}

</style>

<a href="users.php" class="btn">Back To User Page</a>
<footer style="height:auto; background-color:white; color:black; margin-top: 50px; padding-top: 20px;">
  <h3>BookStash.io</h3><br>
  <h4>| Library Information |</h4><br>
  <h5> Email: libraryemail@gmail.com </h5>
  <h5> Phone number: 111-114-1454</h5></br>
</footer>
</center>

