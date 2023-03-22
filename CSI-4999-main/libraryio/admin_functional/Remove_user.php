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
  background-color: #4CAF50;
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
  color: #4CAF50;
}

a:hover {
  text-decoration: underline;
}

</style>

<a href="/csi-4999-main/libraryio/admin_functional/users.php" class="btn">Back To User Page</a>


