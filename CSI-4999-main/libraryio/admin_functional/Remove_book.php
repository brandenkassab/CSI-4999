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
