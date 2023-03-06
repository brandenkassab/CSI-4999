<html>
    
    <head>
        <link rel="stylesheet" href="comment.css">   
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
                <img src="img/icon.png" alt="Our Logo" width="50" height="50" /> 
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
           <h1 id="ab1"> Harry Potter and the Sorcerer's Stone 
            <a href="https://www.amazon.com/Harry-Potter-Philosophers-Stone-Rowling/dp/1408855658">
            </center></h1>
            <center>
            <img src="img/HarryPotter.jpg"  width="200" height="300" border="0" alt="Harry Potter" align="center" /> </center>
 
            </a>  
            <p>Till now there’s been no magic for Harry Potter. He lives with the miserable Dursleys and their abominable son, Dudley. Harry’s room is a tiny closet at the 
                foot of the stairs, and he hasn’t had a birthday party in eleven years. But then a mysterious letter arrives by owl messenger: a letter with an invitation to an 
                incredible place called the Hogwarts School of Witchcraft and Wizardry. And there he finds not only friends, flying sports on broomsticks, and magic in
                 everything from classes to meals, but a great destiny that’s been waiting for him . . . if Harry can survive the encounter.</p>
                 <div class="container">
                    <label for="comment" name="comment"> COMMENT BELOW </label>
                    <textarea id="comment"></textarea>
                    <button id="addComments">Add</button>
                    <div id="allComments"></div>
                </div>
                <script src="reviews.js"></script>    
   </body>

   </html>