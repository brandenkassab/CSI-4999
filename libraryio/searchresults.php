<?php
include("dbconnect.php");


if(!isset($_POST['search'])) {
header("Location:index.php");
}


$search_sql="SELECT * FROM books WHERE stockID=1 '%".$_POST['search']."%' 
OR WHERE LIKE BOOK_DESCRIPTION'%".$_POST['search']."%'";
$search_query=mysql_query($search_sql);
if(mysql_num_rows ($search_query)!=0) {
$search_rs=mysql_fetch_assoc($search_query);
}
?>


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
