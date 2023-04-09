<!DOCTYPE html>
<html>
<head>
    <style>

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
<body>

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
</body>
</html>
