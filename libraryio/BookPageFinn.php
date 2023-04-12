<?php

@include 'config.php';
?>

<html>
    
    <head>
        <link rel="stylesheet" href="../comment.css">   
        <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

                .head {
                    font-family: 'Poppins', sans-serif;
                    margin:0; 
                    padding:0;
                    box-sizing: border-box;
                    outline: none; border:none;
                    text-decoration: none;
                }
                body { margin: 0;
                   
                    background-color: bisque ;
                    }
                p {
                    
                    font-size: 24px;
                    text-align: center;
                    width: 750px;
                    
                    position: relative; left:120px; bottom:1975px;
                    
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
            font-size: 15pt;
        }
        .container {
            position: relative; bottom:2050px;
            width: 1200px;
            border-style: solid;
            border-width: 2px;
            border-color: lightgray;
            text-align: center;
            
        }
       .levels {
        position: relative; bottom:2003px; right: 200px;
        width: 500px;
        height: 20px;
        font-size: 20px;
        line-height: 5.6em;
        
       }
       .level2 {
        position: relative; bottom:2053px; left: 200px;
        width: 500px;
        height: 20px;
        font-size: 20px;
        line-height: 5.6em;
       }
       .level3 {
        position: relative; bottom:2105px; right: 0px;
        width: 500px;
        height: 20px;
        font-size: 20px;
        line-height: 5.6em;
       }
       
       .level4 {
        position: relative; bottom:2120px; left: 400px;
        width: 500px;
        height: 20px;
        font-size: 20px;
        line-height: 2em;
        
       }
       .finial {
            border-style: solid;
            border-width: 2px;
            border-color: lightgray;
            position: relative; bottom:2142px; left: 165px;
            width: 900px;
            height: 150px;
            border-left: 0px;
            border-right: 0px;
            background-color: transparent;
       }
        </style>
    
    
            <body>
            <div class="head">
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
        </div>
        </center>
        <center>
        <div class="box">
       <div class="boxed"><h1 id="ab1" style="position: absolute; right:580px;"> The Adventures of Huckleberry Finn
            <a href="https://www.amazon.com/Adventures-Huckleberry-Finn-Mark-Twain/dp/0486280616">
            </center></h1>
            <center>
            
            <h3><img src="../img/HuckFinn.jpg"width="250" height="350"></h3>
 
            </a>  
            <h5>By: Mark Twain</h5>
            <h5>Click here to purchase the book!</h5>   
        
            
            <p style="margin-bottom: 107px;"> Mark Twain's classic The Adventures of Huckleberry Finn is told from the point of view of Huck Finn, a barely literate teen 
                who fakes his own death to escape his abusive, drunken father. He encounters a runaway slave named Jim, and the two embark on a raft journey 
                down the Mississippi River. The story takes place along the Mississippi Rivver in the 1830s. </p>
                 
                <img src="../img/kid.png" alt="kids face" width="50" height="50" style="position: relative; bottom:1840px; right: 117px;">
                <img src="../img/book.png" alt="book" width="50" height="50" style="position: relative; bottom:1840px; left: 230px;">
                <img src="../img/booknum.png" alt="book number pic" width="50" height="50" style="position: relative; bottom:1840px; right: 25px;">
                <img src="../img/cap.png" alt="cap" width="60" height="50" style="position: relative; bottom:1840px; left: 320px;">
                </div> <div class="levels"> <h6>Reading age <br>13+ </h6> </div>
                </div> <div class="level2"> <h6>Book 1 of 1<br></h6> </div>
                </div> <div class="level3"> <h6>Print Length<br> 224 Pages</h6> </div>
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
