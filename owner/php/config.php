<?php
$con=mysql_connect("localhost","blbxmxgr_aster","arpit@786");
if(!$con)
{
echo "Your request are failed try after some time";
}
$con_string=mysql_select_db("blbxmxgr_aster",$con);
?>
