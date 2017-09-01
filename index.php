<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- <?php

// include 'cookie.php';


// if(isset($_COOKIE['userid']))
{
	// $id=$_COOKIE['userid'];

	// $query="select imagename from user where id=$id";
}
// else
{
	// echo "error";
}


?> -->


<form action="post.php" method="post">


		
	<input type="text"  maxlength="20" name="name" placeholder="name" required /><br>
	<input type="email" maxlength="30" name="email" placeholder="email" required/><br>
	<input type="radio" value="m" name="gender"> Male
	<input type="radio" value="f" name="gender"> Female
	<br>
	<input type="password" name="password" placeholder="password" /></br>
	<!-- <select name="cid" required>
		<option value="">Select Course</option>
	</select> -->
	
		<?php

			include 'course.php';
		?>
	<br>
	<input type="submit" name="btn" />

</form>




<!-- <?php




?>
 -->


</body>
</html>