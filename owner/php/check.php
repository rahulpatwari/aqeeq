<?php 
include("config.php");
$uname=$_POST['username'];
$password=$_POST['password'];
$uname = mysql_real_escape_string($uname);
$password = mysql_real_escape_string($password);
$sql ="select * from admin where username='".$uname."' and password='".$password."'";
$result=mysql_query($sql,$con);

if($uname=="" && $password=="")
 {
header("location:../index.php?msg='invalid user'");
 } 
else 
	{
	if(mysql_num_rows($result)>0)
		{
          while($row =mysql_fetch_array($result))
		  {
		    session_start();
		    $session_id=session_id();
			$_SESSION[sid]=$session_id;
		  	$_SESSION['username']=$row['username'];
			 
			header("location:../dashboard.php?name=$uname");
			}
		}
		else
		{
		echo "<script language='javascript'>
{
  alert(' Invalid Username and Password...');	
   
}
</script>
<meta http-equiv='REFRESH' content='0;url=../index.php'></HEAD>
 
'";
		}
	}
	
	
mysql_close($con);


?>











