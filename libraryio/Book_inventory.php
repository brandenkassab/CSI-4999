<!DOCTYPE html>
<html>
<head>
  <title>Add Book</title>
  <style>
    form {
      display: flex;
      flex-direction: column;
      width: 50%;
      margin: auto;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"] {
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-radius: 5px;
      box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
    }

    input[type="submit"] {
      background-color: #C2B9B0;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #C2B9B0;
    }

    body{
      background-color: #C2CAD0;
    }
  </style>
</head>
<body>

  <?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "user_db";

  $conn = new mysqli($servername, $username, $password, $dbname);


  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if (isset($_POST['submit'])) {
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $year = $_POST['year'];
    $fr_sale = $_POST['fr_sale'];
    $cost = $_POST['cost'];
    $au_id = $_POST['au_id'];
    $sst_id = $_POST['sst_id'];
    $genre = $_POST['genre'];
    $location = $_POST['location'];
    $image = $_POST['image'];

    $sql = "INSERT INTO book (BOOK_ISBN, BOOK_TITLE, BOOK_YEAR, BOOK_FR_SALE, BOOK_COST, AU_ID, SST_ID, Genre, Location, image)
    VALUES ('$isbn', '$title', '$year', '$fr_sale', '$cost', '$au_id', '$sst_id', '$genre', '$location', '$image')";

    if ($conn->query($sql) === TRUE) {
      echo "<p>New book added successfully!</p>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
  ?>


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

  <h1>Add Book</h1>

  <a href='admin_page.php' class='btn'>Click here to go to the Admin Homepage</a>
  <br>
  <br>
  <a href="Remove_book.php" class="btn">Click here to Remove Book</a>


  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="isbn">ISBN:</label>
    <input type="text" name="isbn" required>

    <label for="title">Title:</label>
    <input type="text" name="title" required>

    <label for="year">Year:</label>
    <input type="text" name="year" required>

    <label for="fr_sale">For Sale:</label>
    <input type="text" name="fr_sale" required>

    <label for="cost">Cost:</label>
    <input type="text" name="cost" required>

    <label for="au_id">Author ID:</label>
    <input type="text" name="au_id" required>

    <label for="sst_id">SST ID:</label>
    <input type="text" name="sst_id" required>

    <label for="genre">Genre:</label>
    <input type="text" name="genre" required>

    <label for="location">Location:</label>
    <input type="text" name="location" required>

    <label for="image">Image:</label>
    <input type="text" name="image" required>

    <input type="submit" name="submit" value="Add Book">
  </form>



  <footer style="height:auto; background-color:white; color:black; margin-top: 50px; padding-top: 20px;">
  <h3>BookStash.io</h3><br>
  <h4>| Library Information |</h4><br>
  <h5> Email: libraryemail@gmail.com </h5>
  <h5> Phone number: 111-114-1454</h5></br>
</footer>
</center>


</body>




</html>
