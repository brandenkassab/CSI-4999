<?php

includeinclude("db.php");
if(isset($_GET['accountId']))
$accountId=$_GET['accountId'];

 $q="select * From visitor where accountId_id=".$accountIdId;
 $result=mysqli_query($con,$q)or die(mysqli_error($con));
   $row=mysqli_fetch_array($result);
   
 $s='<table align="center" dir="ltr">';   
 $s.='<tr > <td align="left" id="Visitor Name"(change to match DB like "foodName") colspan=2 style="padding:10px; "><h1>'.$row[1].'</h1></td></tr>  
 <td style="vertical-align: text-top; padding-left:20px"><h3>Book Rating: '.$row0[0].'<img src="image/'.$ratingImg.'"/></h3><h3>Current Fines</h3>'.$row[4].
 '<br> <h2>Current Books Rented</h2><p>'.$row[3].';
 
  $q2="SELECT * FROM ((Visitor History)) where recipes_recipe_id((Visitor ID))=".$recipeId;
 $resultf2=mysqli_query($con,$q2)or die(mysqli_error($con));
 while($row2=mysqli_fetch_array($result2)){
  
$s.='<tr ><td style="vertical-align:top;"><p>'.$row2[1].'</p></td><td style="float:right"> <img  width=180 src="image/'.$row2[2].'"/><br> <br> </td></tr>';
   }
 $s.='</table>';  
   
   
<!DOCTYPE html
<head>
<style>
p{
font-size:18px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>My Account</title>
</head>
<body>







        <?php echo $s; ?>
        <br />
        <?php  echo $ss; ?>
      <br />
                    <br />
                    <h1><br class="clear" />
                    </h1>
                </div><br />
               
                <div id="footer">
                </div>
                <!--end footer-->
            </div>
            <!--end wrapper-->
        </div>
        <!--end bg_top-->
        <div id="bookStack">
            <div id="footer_design"></div>
        </div>
</body>
</html>
