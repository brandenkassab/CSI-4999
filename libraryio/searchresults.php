<?php
@include("dbconnect.php");
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

<body>
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
    </center>
  
        <!-- Search results -->
        if(!isset($_POST['search'])) {
        header("Location:index.php");
        }


        $search_sql="SELECT * FROM books WHERE stockID=1 '%".$_POST['search']."%'
        OR WHERE LIKE BOOK_DESCRIPTION'%".$_POST['search']."%'";
        $search_query=mysql_query($search_sql);
        if(mysql_num_rows ($search_query)!=0) {
        $search_rs=mysql_fetch_assoc($search_query);
        }
        


        ..add into main content

        <p>Search results</p>
        <?php if(mysql_num_rows($search_query)!=0) {
        do { ?>
        <p><?php echo $search_rs['BOOK_TITLE'] ?></p>
        } while ($search_rs=mysql_fetch_assoc($search_query))

        }else{
        echo "No results found";
        }


        ?>

        /*Side notes add html seperating each section as well as more book
        information in a table format with links*/


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
