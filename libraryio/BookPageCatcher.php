<?php

@include 'config.php';
?>

<html>
    
    <head>
        <link rel="stylesheet" href="../comment.css">   
        <style>
                body { margin: 0;
                   
                    background-color: bisque ;
                    }
                p {
                    
                    font-size: 20px;
                    text-align: center;
                    width: 750px;
                    
                    position: relative; left:100px; bottom:1850px;
                    
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
            border-style: solid;
            border-width: 2px;
            border-color: lightgray;
            
        }
        
        li {
          
            text-align: center;
        }
        
        li a {
            display: inline-block;
            color: black;
            text-align: center;
            padding: 10px 20px;
            text-decoration: none;
        }
        
        li a:hover {
            background-color: bisque;
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
        .boxed {
        
        padding-inline: 20px;

        width: 750px;
        }
        h3 {
            border-style: solid;
            border-width: 3px;
            border-color: lightgray;
            width: 300px;
            padding-top: 10px;
            height: 600px;
            position: relative; right:450px; bottom:1300px;
          
        }
        header {
            text-align: center;
            font-size: 50px;
        }
        header{
            padding-top: 25px;
        }
        .box {
            background-color: white;
            width: 1300px;
            height: 1300px;
            border-style: solid;
            border-width: 2px;
            border-color: lightgray;
            padding-top: 3px;
            margin-top: 5px;
        }
        h5 {
            position: relative; right:450px; bottom:1550px;
            color: black;
            font-size: 10pt;
        }
        .container {
            position: relative; bottom:1900px;
            width: 1200px;
            border-style: solid;
            border-width: 2px;
            border-color: lightgray;
            text-align: center;
            
        }
       .levels {
        position: relative; bottom:1883px; right: 200px;
        width: 500px;
        height: 20px;
        font-size: 20px;
        line-height: 5.6em;
        
       }
       .level2 {
        position: relative; bottom:1935px; left: 200px;
        width: 500px;
        height: 20px;
        font-size: 20px;
        line-height: 5.6em;
       }
       .level3 {
        position: relative; bottom:1985px; right: 0px;
        width: 500px;
        height: 20px;
        font-size: 20px;
        line-height: 5.6em;
       }
       
       .level4 {
        position: relative; bottom:2000px; left: 400px;
        width: 500px;
        height: 20px;
        font-size: 20px;
        line-height: 2em;
        
       }
       .finial {
            border-style: solid;
            border-width: 2px;
            border-color: lightgray;
            position: relative; bottom:2032px; left: 165px;
            width: 900px;
            height: 150px;
            border-left: 0px;
            border-right: 0px;
            background-color: transparent;
       }
        </style>
        </head>
        
            <header>Library.io
            <img src="../img/icon.png" alt="Our Logo" width="50" height="50" /> </header>
    
            <body>
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
        </center>
        <center>
        <div class="box">
       <div class="boxed"><h1 id="ab1"> Catcher in the Rye 
            <a href="https://www.amazon.com/Catcher-Rye-J-D-Salinger/dp/0316769487">
            </center></h1>
            <center>
            
            <h3><img src="../img/Catcher.png"width="250" height="350"></h3>
 
            </a>  
            <h5>By: J.D Salinger</h5>
            <h5>Click anywhere in this box to purchase the book!</h5>   
        
            
            <p> The novel details two days in the life of 16-year-old Holden Caulfield after he has been expelled from prep school.
                 Confused and disillusioned, Holden searches for truth and rails against the “phoniness” of the adult world. 
                 He ends up exhausted and emotionally unstable. The events are related after the fact.</p>
                 
                <img src="../img/kid.png" alt="kids face" width="50" height="50" style="position: relative; bottom:1710px; right: 117px;">
                <img src="../img/book.png" alt="book" width="50" height="50" style="position: relative; bottom:1710px; left: 230px;">
                <img src="../img/booknum.png" alt="book number pic" width="50" height="50" style="position: relative; bottom:1710px; right: 25px;">
                <img src="../img/cap.png" alt="cap" width="60" height="50" style="position: relative; bottom:1710px; left: 320px;">
                </div> <div class="levels"> <h6>Reading age <br>13+ </h6> </div>
                </div> <div class="level2"> <h6>Book 1 of 1<br></h6> </div>
                </div> <div class="level3"> <h6>Print Length<br> 240 Pages</h6> </div>
                </div> <div class="level4"> <h6>Grade Level</h6><br>8+ </div>
                </div> <div class="finial"><h1></h1></div>
                <div class="container">
                    <label for="comment" name="comment"> COMMENT BELOW </label>
                    <textarea id="comment"></textarea>
                    <button id="addComments">Add</button>
                    <div id="allComments"></div>
                </div>
                <script src="../reviews.js"></script>    
   </body>
     
   </html>