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

<h1>Featured Books</h1>
</br>

<div class="grid-container" align="center">
    <div class="grid-item">
        <a href = "BookPageTKAM.php">
            <img src="../img/TKAM.jpg" width="200px" height="350px"><span>To Kill a Mockingbird</span>
        </a> 
    </div>

    <div class="grid-item">
        <a href = "BookPageGreat.php">
            <img src="../img/Great_Gatsby.png" width="200px" height="350px"><span>The Great Gatsby</span>
        </a> 
    </div>

    <div class="grid-item">
        <a href = "BookPageMice.php">
            <img src="../img/Of_Mice_and_Men.jpg" width="200px" height="350px"><span>Of Mice and Men</span>
        </a> 
    </div>

    <div class="grid-item">
        <a href = "BookPage451.php">
            <img src="../img/Fahrenheit_451.jpg" width="200px" height="350px"><span>Fahrenheit 451</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPageHat.php">
            <img src="../img/hatchet.jpg" width="200px" height="350px"><span>Hatchet</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPageMoby.php">
            <img src="../img/moby_dick.jpg" width="200px" height="350px"><span>Moby Dick</span>
        </a>
    </div>

    <div class="grid-item">
        <a href = "BookPageLord.php">
            <img src="../img/LOTF.png" width="200px" height="350px"><span>Lord of the Flies</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPagePride.php">
            <img src="../img/Pride_and_Prejudice.jpg" width="200px" height="350px"><span>Pride and Prejudice</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPage.php">
            <img src="../img/HarryPotter.jpg" width="200px" height="350px"><span>Harry Potter and the Sorcerer's Stone</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPageCatcher.php">
            <img src="../img/Catcher.png" width="200px" height="350px"><span>Catcher in the Rye</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPageFinn.php">
            <img src="../img/HuckFinn.jpg" width="200px" height="350px"><span>The Adventures of Huckleberry Finn</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPageHorton.php">
            <img src="../img/Horton.png" width="200px" height="350px"><span>Horton Hears a Who</span>
        </a>  
    </div>

</div>

<footer style="height:auto; background-color:white; color:black;">
  <h3>BookStash.io</h3><br>
  <h4>| Library Information |</h4><br>
  <h5> Email: libraryemail@gmail.com </h5>
  <h5> Phone number: 111-114-1454</h5></br>
</footer>
</center>

</body>
</html>
