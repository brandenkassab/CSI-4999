<?php

@include 'config.php';
?>





<!DOCTYPE html>
<html>
<head>
<style>

.grid-container {
  display: inline-grid;
  grid-template-columns: auto auto auto;
  column-gap: 300px;
  row-gap: 150px;
}

.grid-item{
    inline-size: min-content;
}

body { 
    margin: 0;
    background: rgb(151, 151, 151);
}

.navigation-menu ul {
  padding: 0px;
  margin: 0px;

}

ul {
    padding: 2;
    padding-color: black;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 10px 20px;
    text-decoration: none;
}

li a:hover {
    background-color: gray;
}

#navigation ul
{
	font-size: 1.4em;
}
ul {
  list-style:none;
}
ul li{
  display:inline-block;
  padding:0 7px;
  position:relative;
}
ul li:not(:last-child)::after{
  content:"";
  border:3px solid #e2e2e2;
  border-width: 2px 2px 0 0;
  position:absolute;
  right:-3px;
  top:0;
  height:100%;
}

h1{
  font-size: 40px;
}

</style>
</head>
<body>

<center><a href="home.html"><img src="../img/icon2.png"></a>
<center><button onclick="window.location.href='login_form.php'">Login In <br></button><center>



<h1>BookStash.io</h1>
</center>

<center>
<div class="navigation-menu">
    <div id ="navigation">
        <ul>
	    <li><a href="#">Home</a></li>
            <li><a href="#">Fiction</a></li>
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

<h1><u>Featured Books</h1>

<div class="grid-container" align="center">
    <div class="grid-item">
        <a href = "BookPage.html">
            <img src="../img/TKAM.jpg" width="80px" height="140px"><span>To Kill a Mockingbird</span>
        </a> 
    </div>

    <div class="grid-item">
        <a href = "BookPage.php">
            <img src="../img/Great_Gatsby.png" width="80px" height="140px"><span>The Great Gatsby</span>
        </a> 
    </div>

    <div class="grid-item">
        <a href = "BookPage.html">
            <img src="../img/Of_Mice_and_Men.jpg" width="80px" height="140px"><span>Of Mice and Men</span>
        </a> 
    </div>

    <div class="grid-item">
        <a href = "BookPage.html">
            <img src="../img/Fahrenheit_451.jpg" width="80px" height="140px"><span>Fahrenheit 451</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPage.html">
            <img src="../img/hatchet.jpg" width="80px" height="140px"><span>Hatchet</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPage.html">
            <img src="../img/moby_dick.jpg" width="80px" height="140px"><span>Moby Dick</span>
        </a>
    </div>

    <div class="grid-item">
        <a href = "BookPage.html">
            <img src="../img/LOTF.png" width="80px" height="140px"><span>Lord of the Flies</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPage.html">
            <img src="../img/Pride_and_Prejudice.jpg" width="80px" height="140px"><span>Pride and Prejudice</span>
        </a>  
    </div>

    <div class="grid-item">
        <a href = "BookPage.php">
            <img src="../img/HarryPotter.jpg" width="80px" height="140px"><span>Harry Potter and the Sorcerer's Stone</span>
        </a>  
    </div>

</div>
</center>
</body>
</html>
