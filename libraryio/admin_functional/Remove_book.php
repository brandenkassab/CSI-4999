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
$database = "user_db";

$conn = mysqli_connect($host, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $isbn = $_POST['isbn'];

    
    $sql = "DELETE FROM book WHERE BOOK_ISBN = $isbn";
    if (mysqli_query($conn, $sql)) {
        echo "Book deleted successfully.";
    } else {
        echo "Error deleting book: " . mysqli_error($conn);
    }
}


$sql = "SELECT * FROM book";
$result = mysqli_query($conn, $sql);


echo "<h2>Book Management</h2>";
echo "<table border='1'>
<tr>
<th>ISBN</th>
<th>Title</th>
<th>Year</th>
<th>Foreign Sale</th>
<th>Cost</th>
<th>Author ID</th>
<th>SST ID</th>
<th>Delete</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['BOOK_ISBN'] . "</td>";
    echo "<td>" . $row['BOOK_TITLE'] . "</td>";
    echo "<td>" . $row['BOOK_YEAR'] . "</td>";
    echo "<td>" . $row['BOOK_FR_SALE'] . "</td>";
    echo "<td>" . $row['BOOK_COST'] . "</td>";
    echo "<td>" . $row['AU_ID'] . "</td>";
    echo "<td>" . $row['SST_ID'] . "</td>";
    echo "<td><form method='post'>
    <input type='hidden' name='isbn' value='" . $row['BOOK_ISBN'] . "'>
    <input type='submit' value='Delete'></form></td>";
    echo "</tr>";
}

echo "</table>";


mysqli_close($conn);
?>

