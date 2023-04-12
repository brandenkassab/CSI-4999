<!DOCTYPE html>
<html>
<head>
  <title>BookStash.io</title>
</head>
<body>
  
<title>Bookstash.io</title>
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
.grid-container {
  grid-gap: 100px;
}


table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid black;
  padding: 8px;
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

</style>

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


<h1>Book Search Page</h1>
  
  <form action="" method="GET">
    <label for="book_title">Book Title:</label>
    <input type="text" id="book_title" name="book_title">
    <button type="submit" name="submit">Search</button>
  </form>
  
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_db";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    if(isset($_GET['submit'])){
      
      $search_term = $_GET["book_title"];
      
      
      $sql = "SELECT * FROM book WHERE BOOK_TITLE LIKE '%".$search_term."%'";
      $result = $conn->query($sql);
   
      if ($result->num_rows > 0) {
        echo "<table><tr><th>Title</th><th>Cost</th><th>Genre</th><th>Link</th></tr>";
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["BOOK_TITLE"]."</td><td>".$row["BOOK_COST"]."</td><td>".$row["Genre"]."</td><td><a href='".$row["Location"]."'>View Book</a></td></tr>";
        }
        echo "</table>";
      } else {
        echo "No results found.";
      }
    } else {
     
      $sql = "SELECT * FROM book";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        echo "<table><tr><th>Title</th><th>Cost</th><th>Genre</th><th>Location</th></tr>";
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["BOOK_TITLE"]."</td><td>".$row["BOOK_COST"]."</td><td>".$row["Genre"]."</td><td><a href='".$row["Location"]."'>Link</a></td></tr>";
        }
        echo "</table>";
      } else {
        echo "No books found.";
      }
    }
    
   
    $conn->close();
  ?>
  <br>
  <br>
</body>
</html>

