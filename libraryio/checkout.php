<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $checkout = $_POST['book_title'];
    $sql = "UPDATE user_form SET Checkout='$checkout' WHERE name='$name'";
    if ($conn->query($sql) === TRUE) {
        echo "Checkout updated successfully";
    } else {
        echo "Error updating Checkout: " . $conn->error;
    }
}


$sql = "SELECT name, Checkout FROM user_form";
$result = $conn->query($sql);


echo "<form method='post'>";
echo "<table>";
echo "<tr><th>Name</th><th>Checkout</th></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>";
        
        $book_sql = "SELECT BOOK_TITLE FROM book";
        $book_result = $conn->query($book_sql);
        if ($book_result->num_rows > 0) {
            echo "<select name='book_title'>";
            echo "<option value='Nothing'>Nothing</option>";
            while($book_row = $book_result->fetch_assoc()) {
                $selected = ($book_row["BOOK_TITLE"] == $row["Checkout"]) ? "selected" : "";
                echo "<option value='".$book_row["BOOK_TITLE"]."' ".$selected.">".$book_row["BOOK_TITLE"]."</option>";
            }
            echo "</select>";
        }
        echo "</td>";
        echo "</tr>";
        
        echo "<input type='hidden' name='name' value='".$row["name"]."'>";
    }
}
echo "</table>";
echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";


$conn->close();
?>