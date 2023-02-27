<?php

includeinclude("db.php");
if(isset($_GET['accountId']))
$accountId=$_GET['accountId'];

 $q="select * From visitor where accountId_id=".$accountIdId;
 $result=mysqli_query($con,$q)or die(mysqli_error($con));
   $row=mysqli_fetch_array($result);

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
