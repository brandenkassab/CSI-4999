<?php
@include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Bookstash.io</title>
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

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

<div class="grid-container" align="center">
    <div class="grid-item">
        <a href = "BookPage.php">
            <img src="../img/TKAM.jpg" width="160px" height="280px"><span>To Kill a Mockingbird</span>
        </a> 
    </div>

    <div class="grid-item">
        <a href = "BookPageGreat.php">
            <img src="../img/Great_Gatsby.png" width="160px" height="280px"><span>The Great Gatsby</span>
        </a> 
    </div>

    <div class="grid-item">
        <a href = "BookPage.php">
            <img src="../img/Of_Mice_and_Men.jpg" width="160px" height="280px"><span>Of Mice and Men</span>
        </a> 
    </div>

    <div class="grid-item">
        <a href = "BookPage451.php">
            <img src="../img/Fahrenheit_451.jpg" width="160px" height="280px"><span>Fahrenheit 451</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPage.php">
            <img src="../img/hatchet.jpg" width="160px" height="280px"><span>Hatchet</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPage.php">
            <img src="../img/moby_dick.jpg" width="160px" height="280px"><span>Moby Dick</span>
        </a>
    </div>

    <div class="grid-item">
        <a href = "BookPage.php">
            <img src="../img/LOTF.png" width="160px" height="280px"><span>Lord of the Flies</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPage.php">
            <img src="../img/Pride_and_Prejudice.jpg" width="160px" height="280px"><span>Pride and Prejudice</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPage.php">
            <img src="../img/HarryPotter.jpg" width="160px" height="280px"><span>Harry Potter and the Sorcerer's Stone</span>
        </a>  
    </div>

</div>

<footer style="height:auto; background-color:#000000; color:white;">
  <h3>BookStash.io</h3><br>
  <h4>| Library Information |</h4><br>
  <h5> Email: libraryemail@gmail.com </h5>
  <h5> Phone number: 111-114-1454</h5></br>
</footer>
</center>

</body>
</html>