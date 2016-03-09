<?php
require 'db.php';

$cron=mysqli_query($conn,"SELECT uname FROM active WHERE time<DATE_SUB(NOW(), INTERVAL 20 SECOND);");
if($cron){
	echo "heehheh";
	
		while($row=mysqli_fetch_assoc($cron)){
			$uname = "$row[uname]";
			mysqli_query($conn,"DELETE FROM active WHERE uname='$uname'");
			mysqli_query($conn,"DELETE FROM login WHERE uname='$uname'");
			mysqli_query($conn,"DELETE FROM msg WHERE uname='$uname'");
        }

}
else
{	
	echo mysqli_error($conn);
}
mysqli_close($conn);
?>
