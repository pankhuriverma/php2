<?php

	include 'connect.php';
	print_r($_POST);
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	// $cid=$_POST['cid'];
// select 
	// if($con==true)
	// {
	// 	$insert="insert into student(name,email,password) values('$name','$email','$pass')";
	// 	$run=mysqli_query($con,$insert);
	// 	if($run==true)
	// 	{
	// 		$sid=mysqli_insert_id($con);

	// 		$helper_query="insert into helper(sid,cid) values($sid,$cid)";
	// 		$run_helper=mysqli_query($con,$helper_query);
	// 		if($run_helper==true)
	// 		{
	// 			echo "Inserted in helper";
	// 		}
	// 		else
	// 		{
	// 			echo "Error ";
	// 			die(mysqli_error($con));
	// 		}

	// 	}

	// }



	$count=count($_POST['cid']);
	// for checkbox
	if($con==true)
	{
		$insert="insert into student(name,email,password) values('$name','$email','$pass')";
		$run=mysqli_query($con,$insert);
		if($run==true)
		{
			$sid=mysqli_insert_id($con);
			for($i=0;$i<$count;$i++)
			{	
				$mcid=$_POST['cid'][$i];
				$helper_query="insert into help_stu(sid,cid) values($sid,$mcid)";
				$run_helper=mysqli_query($con,$helper_query);
				if($run_helper==true)
				{
					echo "Inserted in helper";
				}
				else
				{
					echo "Error ";
					die(mysqli_error($con));
				}
			}

		}

	}



?>