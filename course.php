<?php

include 'connect.php';



if($con==true)
{
	$query="select * from course";
	$run=mysqli_query($con,$query);
	while($data=mysqli_fetch_array($run))
	{
		?>
		<input type="checkbox" name="cid[]" value="<?php echo $data[0]; ?>" />

		<?php echo $data[1];
			echo $data[2];
		}

		?>
		<br>

		<?php
}
else
{
	echo "Error in connection";
}


?>