
<!DOCTYPE html>
<html>
<head>
<title>Bookstash.io</title>
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
.grid-container {
  grid-gap: 100px;
}

</style>

<body>

<center><a href="home.php"><img src="../img/icon2.png" width="160px" height="160px"></a>
<center><button onclick="window.location.href='login_form.php'">Login In <br></button></center>
<h1>BookStash.io</h1>
</center>

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



<a href="users.php" class="btn">Back To User Page</a>
<footer style="height:auto; background-color:white; color:black; margin-top: 50px; padding-top: 20px;">
  <h3>BookStash.io</h3><br>
  <h4>| Library Information |</h4><br>
  <h5> Email: libraryemail@gmail.com </h5>
  <h5> Phone number: 111-114-1454</h5></br>
</footer>
