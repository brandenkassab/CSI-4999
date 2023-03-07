<?php

@include 'config.php';
?>

<html>
    
    <head>
        <link rel="stylesheet" href="../comment.css">   
        <style>
                body { margin: 0;
                   
                    background: rgb(151, 151, 151);
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
                <img src="../img/icon.png" alt="Our Logo" width="50" height="50" /> 
        </center>
            <body>
            <div class="navigation-menu">
            <div id ="navigation">
                <ul>
                    <li><a href="#">Fiction</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Non-Fiction</a></li>
                    <li><a href="#">Young Adults</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Best Sellers</a></li>
                </ul>
            </div>
        </div>
        <center>
           <h1 id="ab1"> The Great Gatsby
            <a href="https://www.amazon.com/Great-Gatsby-Original-Fitzgerald-Classic/dp/B0BF3P5XZS/ref=sr_1_1?crid=3EVZKX6QP7TYD&keywords=great+gatsby+book&qid=1678148047&s=books&sprefix=greatr%2Cstripbooks%2C107&sr=1-1">
            </center></h1>
            <center>
            <img src="../img/Great_Gatsby.png" width="200" height="300">
 
            </a>  
            <p> The Great Gatsby is considered F. Scott Fitzgerald’s magnum opus, exploring themes of decadence, idealism, social stigmas, patriarchal 
                norms, and the deleterious effects of unencumbered wealth in capitalistic society, set against the backdrop of the Jazz Age 
                and the Roaring Twenties. At its heart, it’s a cautionary tale, a revealing look into the darker side to the American Dream.</p>
                 <div class="container">
                    <label for="comment" name="comment"> COMMENT BELOW </label>
                    <textarea id="comment"></textarea>
                    <button id="addComments">Add</button>
                    <div id="allComments"></div>
                </div>
                <script src="../reviews.js"></script>    
   </body>

   </html>