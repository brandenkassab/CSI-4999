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
           <h1 id="ab1"> Pride and Prejudice
            <a href="https://www.amazon.com/Pride-Prejudice-Dover-Thrift-Editions/dp/0486284735/ref=sr_1_1_sspa?keywords=pride+and+predjudice+jane+austen&qid=1678148629&s=books&sprefix=pri%2Cstripbooks%2C83&sr=1-1-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFIS0lER0IzOEVQVzEmZW5jcnlwdGVkSWQ9QTAzNjc4MThDQUxXUFBIMzdJR00mZW5jcnlwdGVkQWRJZD1BMDkxMjkyOVpLNDVFMDdQQkxJTiZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=">
            <center></h1>
            <img src="../img/Pride_and_Prejudice.jpg" width="200" height="300">
 
            </a>  
            <p> Set in a small English village during 1812, this classic novel is one of the greatest love stories ever told!  
                A poor country squire is trying to find husbands for his five daughters.  When one of them, Elizabeth, meets rich Mr. Darcy
                at a dance, they don't find much in common.  But during the next few months, they overcome their differences and fall in 
                love.</p>
                 <div class="container">
                    <label for="comment" name="comment"> COMMENT BELOW </label>
                    <textarea id="comment"></textarea>
                    <button id="addComments">Add</button>
                    <div id="allComments"></div>
                </div>
                <script src="../reviews.js"></script>    
   </body>

   </html>