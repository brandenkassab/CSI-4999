<?php

includeinclude("db.php");
if(isset($_GET['accountId']))
$accountId=$_GET['accountId'];

 $q="select * From visitor where accountId_id=".$accountIdId;
 $result=mysqli_query($con,$q)or die(mysqli_error($con));
   $row=mysqli_fetch_array($result);
   
 $s='<table align="center" dir="ltr">';   
 $s.='<tr > <td align="left" id="name" colspan=2 style="padding:10px; "><h1>'.$row[1].'</h1></td></tr>
 <td style="vertical-align: text-top; padding-left:20px"></h3><h3>Current Fees</h3>'.$row[4].
 <td style="vertical-align: text-top; padding-left:20px"><h3>Current Books Rented: '.$row[6]./><br></h3><h3>Current Fees</h3>'.$row[8];
 
 
  $q2="SELECT * FROM VST_HIST where user_form_id=".$rId;
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
