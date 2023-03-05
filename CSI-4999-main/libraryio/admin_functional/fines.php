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
     <style>
    
    #search {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-right: 8px;
    }

    
    #search_button {
      background-color: #4CAF50;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

   
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    
    form {
      display: inline-block;
      margin-bottom: 16px;
    }

    label {
      display: inline-block;
      width: 120px;
      font-weight: bold;
    }

    input[type="text"] {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-right: 8px;
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
      background-color: #3e8e41;
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