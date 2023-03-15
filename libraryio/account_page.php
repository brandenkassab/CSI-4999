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
    color: white;
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

<center><a href="account_page.php"><img src="../img/icon2.png"></a>
<center><button onclick="window.location.href='login_form.php'">Login In <br></button><center>



<h1>Bookstash.io</h1>
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

<h1><u>My Account</h1>

<div class="grid-container" align="center">

 <div class="grid-item">
    <h2> Current books rented out </h2>
    </div>

    <div class="grid-item">
        <h2> History of books rented out </h2>
    </div>

    <div class="grid-item">
        <h2> Current Fines </h2>
        </a> 
    </div>

    <div class="grid-item">
       <h2> Books on hold </h2>
        </a>  
    </div>

    <div class="grid-item">
       <h2> Request new ID card </h2>
    </div>

</div>


<footer style="height:auto; background-color:#000000;">
  <h3>BookStash.io</h3><br>
  <h4>| Library Information |</h4>><br>
  <h5> Email: libraryemail@gmail.com </h5>
  <h5> Phone number: 111-114-1454</h5>
</footer>

</center>
</body>
</html>

