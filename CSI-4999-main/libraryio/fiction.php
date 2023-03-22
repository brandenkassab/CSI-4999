


<!DOCTYPE html>
<html>
<head>
<title>Bookstash.io</title>

<style>
.book-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 1rem;
}

.book {
    width: 200px;
    height: 350px;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.book-image {
    width: 100%;
    height: 70%;
    object-fit: cover;
}

.book-title {
    padding: 0.5rem;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #333;
}

.book-title:hover {
    color: #0099cc;
}
</style>


<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<center><a href="home.html"><img src="../img/icon2.png"></a>
<center><button onclick="window.location.href='login_form.php'">Login In <br></button></center>
<h1>BookStash.io</h1>
</center>

<center>
<div class="navigation-menu">
    <div id ="navigation">
        <ul>
	        <li><a href="home.php">Home</a></li>
            <li><a href="fiction.php">Fiction</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">Non-Fiction</a></li>
            <li><a href="#">Young Adults</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Best Sellers</a></li>
        </ul>
    </div>
</div>
</br>
</br>

<h1>Featured Books</h1>



<?php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "user_db"; 

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT BOOK_TITLE, Location, image FROM book WHERE Genre = 'fiction'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<a href='" . $row['Location'] . "'>";
        echo "<img src='" . $row['image'] . "' alt='" . $row['BOOK_TITLE'] . "'>";
        echo "<br>";
        echo $row['BOOK_TITLE'];
        echo "</a>";
        echo "<br>";
    }
} else {
    echo "No books found.";
}


mysqli_close($conn);
?>

