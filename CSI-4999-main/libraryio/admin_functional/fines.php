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

<h2>Fines</h2>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="search">Search:</label>
  <input type="text" name="search" id="search">
  <input type="submit" value="Search">
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
          <input type="submit" value="Update">
        </form>
      </td>
    </tr>
  <?php } ?>

</table>

<a href="users.php">Back to User Page</a>

</body>
</html>

<?php

mysqli_close($conn);
?>
