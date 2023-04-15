<!DOCTYPE html>
<html>
<head>
<title>Bookstash.io</title>
<style>
.book-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
}

.book {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
    flex-basis: calc((100% - 3rem) / 4);
}

.book-image {
    width: 100%;
    height: 450px;
    border-style: solid;
    border-width: 10px;
    border-color: white;
}

.book-details {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.book-title {
    color: black;
    background-color: white;
    background-size: 50px;
    border-style: solid;
    border-width: 10px;
    border-color: white;
    margin-top: 10px;
}

.book-title:hover {
    color: #0099cc;
}
</style>
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
<h1>Featured Books</h1>
<div class="book-container">
<?php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "user_db"; 

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT BOOK_TITLE, Location, image FROM book WHERE Genre = 'Non-fiction'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='book'>";
        echo "<a href='" . $row['Location'] . "'><img src='" . $row['image'] . "' alt='" . $row['BOOK_TITLE'] . "' class='book-image'></a>";
        echo "<a href='" . $row['Location'] . "' class='book-title'>" . $row['BOOK_TITLE'] . "</a>";
        echo "</div>";
    }
} else {
    echo "No books found.";
}


mysqli_close($conn);
?>
</div>



<footer style="height:auto; background-color:white; color:black; margin-top: 50px; padding-top: 20px;">
  <h3>BookStash.io</h3><br>
  <h4>| Library Information |</h4><br>
  <h5> Email: libraryemail@gmail.com </h5>
  <h5> Phone number: 111-114-1454</h5></br>
</footer>
</center>

</body>
</html>