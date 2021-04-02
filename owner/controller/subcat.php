<?php
require_once('../autho/data-autho.php');
$catclick=htmlspecialchars($_POST['catclick']);
$sqlsub = mysqli_query($con,"Select * from `sub` WHERE cat = '$catclick'"); 
while($datasub = mysqli_fetch_array($sqlsub)){?>
<option><?php echo $datasub['sub']; ?></option>
<?php } ?>