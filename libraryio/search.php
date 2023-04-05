<?php

@include 'config.php';

?>

<html>

<head>
    <link rel="stylesheet" href="../comment.css">
    <style>
        body {
            margin: 0;
            background-color: bisque;
        }

        p {
            font-size: 20px;
            text-align: center;
            width: 750px;
            position: relative;
            left: 100px;
            bottom: 1850px;
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

        #navigation ul {
            font-size: 1.4em;
        }

        ul {
            list-style: none;
        }

            ul li {
                display: inline-block;
                padding: 0 7px;
                position: relative;
            }

                ul li:not(:last-child)::after {
                    content: "";
                    border: 3px solid #e2e2e2;
                    border-width: 2px 2px 0 0;
                    position: absolute;
                    right: -3px;
                    top: 0;
                    height: 100%;
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
            position: relative;
            right: 450px;
            bottom: 1300px;
        }

        header {
            text-align: center;
            font-size: 50px;
        }

        header {
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
            position: relative;
            right: 450px;
            bottom: 1550px;
            color: black;
            font-size: 10pt;
        }

        .container {
            position: relative;
            bottom: 1900px;
            width: 1200px;
            border-style: solid;
            border-width: 2px;
            border-color: lightgray;
            text-align: center;
        }

        .levels {
            position: relative;
            bottom: 1883px;
            right: 200px;
            width: 500px;
            height: 20px;
            font-size: 20px;
            line-height: 5.6em;
        }

        .level2 {
            position: relative;
            bottom: 1935px;
            left: 200px;
            width: 500px;
            height: 20px;
            font-size: 20px;
            line-height: 5.6em;
        }

        .level3 {
            position: relative;
            bottom: 1985px;
            right: 0px;
            width: 500px;
            height: 20px;
            font-size: 20px;
            line-height: 5.6em;
        }

        .level4 {
            position: relative;
            bottom: 2000px;
            left: 400px;
            width: 500px;
            height: 20px;
            font-size: 20px;
            line-height: 2em;
        }

        .finial {
            border-style: solid;
            border-width: 2px;
            border-color: lightgray;
            position: relative;
            bottom: 2032px;
            left: 165px;
            width: 900px;
            height: 150px;
            border-left: 0px;
            border-right: 0px;
            background-color: transparent;
        }
    </style>
</head>

<header>
    Library.io
    <img src="../img/icon.png" alt="Our Logo" width="50" height="50" />
</header>

<body>
    <center>
        <div class="navigation-menu">
            <div id="navigation">
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
    <body>

        <!-- Search bar-->
        <center>
            <p> Search</p>
            <form name="form1" method="post" action="searchresult.php">
                <input name="search" type="text" size="80" maxlength="75" />
                <input type="submit" name="Submit" value="Search" />

        </center>
        </form>

        <!-- Featured add-->
        <h1>Featured Books</h1>
        </br>

        <div class="grid-container" align="center">
            <div class="grid-item">
                <a href="BookPageTKAM.php">
                    <img src="../img/TKAM.jpg" width="200px" height="350px"><span>To Kill a Mockingbird</span>
                </a>
            </div>

            <div class="grid-item">
                <a href="BookPageGreat.php">
                    <img src="../img/Great_Gatsby.png" width="200px" height="350px"><span>The Great Gatsby</span>
                </a>
            </div>

            <div class="grid-item">
                <a href="BookPageMice.php">
                    <img src="../img/Of_Mice_and_Men.jpg" width="200px" height="350px"><span>Of Mice and Men</span>
                </a>
            </div>

            <div class="grid-item">
                <a href="BookPage451.php">
                    <img src="../img/Fahrenheit_451.jpg" width="200px" height="350px"><span>Fahrenheit 451</span>
                </a>
            </div>

            <div class="grid-item">
                <a href="BookPageHat.php">
                    <img src="../img/hatchet.jpg" width="200px" height="350px"><span>Hatchet</span>
                </a>
            </div>

            <div class="grid-item">
                <a href="BookPageMoby.php">
                    <img src="../img/moby_dick.jpg" width="200px" height="350px"><span>Moby Dick</span>
                </a>
            </div>

            <div class="grid-item">
                <a href="BookPageLord.php">
                    <img src="../img/LOTF.png" width="200px" height="350px"><span>Lord of the Flies</span>
                </a>
            </div>

            <div class="grid-item">
                <a href="BookPagePride.php">
                    <img src="../img/Pride_and_Prejudice.jpg" width="200px" height="350px"><span>Pride and Prejudice</span>
                </a>
            </div>

            <div class="grid-item">
                <a href="BookPage.php">
                    <img src="../img/HarryPotter.jpg" width="200px" height="350px"><span>Harry Potter and the Sorcerer's Stone</span>
                </a>
            </div>

            <div class="grid-item">
                <a href="BookPageCatcher.php">
                    <img src="../img/Catcher.png" width="200px" height="350px"><span>Catcher in the Rye</span>
                </a>
            </div>

            <div class="grid-item">
                <a href="BookPageFinn.php">
                    <img src="../img/HuckFinn.jpg" width="200px" height="350px"><span>The Adventures of Huckleberry Finn</span>
                </a>
            </div>

            <div class="grid-item">
                <a href="BookPageHorton.php">
                    <img src="../img/Horton.png" width="200px" height="350px"><span>Horton Hears a Who</span>
                </a>
            </div>

        </div>



        <!-- Footer add-->
        <footer style="height:auto; background-color:white; color:black;">
            <h3>BookStash.io</h3><br>
            <h4>| Library Information |</h4><br>
            <h5> Email: libraryemail@gmail.com </h5>
            <h5> Phone number: 111-114-1454</h5></br>
        </footer>
        </center>

    </body>


    </body>
</html>
