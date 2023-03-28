<?php

@include 'config.php';
?>

<html>
    
    <head>
        <link rel="stylesheet" href="css/comment.css">   
        <style>
                body { margin: 0;
                    background-color: bisque;
                }
                p {
                    font-size: 20px;
                    text-align: center;
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
        
        </style>
        </head>
        <center>
        <body>        
        <img src="../img/icon.png" alt="Our Logo" width="50" height="50" /> 
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
           <h1 id="ab1"> Fahrenheight 451
            <a href="https://www.amazon.com/s?k=farenheight+451&i=stripbooks&crid=1XQAE095JVP31&sprefix=fare%2Cstripbooks%2C88&ref=nb_sb_ss_ts-doa-p_1_4">
            </center></h1>
            <center>
            <img src="../img/Fahrenheit_451.jpg" width="200" height="300">
 
            </a>  
            <p> Guy Montag is a fireman. His job is to destroy the most illegal of commodities, the printed book, along with the houses in which they are
                hidden. Montag never questions the destruction and ruin his actions produce, returning each day to his bland life and wife, Mildred,
                who spends all day with her television “family.” But when he meets an eccentric young neighbor, Clarisse, who introduces him to a past
                where people didn’t live in fear and to a present where one sees the world through the ideas in books instead of the
                mindless chatter of television, Montag begins to question everything he has ever known.</p>
                 <div class="container">
                    <label for="comment" name="comment"> COMMENT BELOW </label>
                    <textarea id="comment"></textarea>
                    <button id="addComments">Add</button>
                    <div id="allComments"></div>
                </div>
                <script src="../reviews.js"></script>    

                <footer style="height:auto; background-color:#000000; color:FFFFFF;">
  <h3>BookStash.io</h3><br>
  <h4>| Library Information |</h4><br>
  <h5> Email: libraryemail@gmail.com </h5>
  <h5> Phone number: 111-114-1454</h5>
    </br>
</footer>
   </body>
</center>
   </html>
