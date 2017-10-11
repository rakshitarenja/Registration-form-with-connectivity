<?php
	session_start();
	if(isset($_POST["Login"]))
		{
		extract($_POST);
  include('connect.php');
	echo $email;
	echo $pwd;
	$query="select email,password from emp where email='$email' and password='$pwd'";
	
	$res=mysqli_query($con,$query);
	if($row=mysqli_fetch_row($res))
	{
	$_SESSION["un"]=$row[0];
	header("Location:userwelcome.php");
	}
	else
	{
	$_SESSION["er"]="Invalid User!!";
	header("Location:userlogin.php");	
	}
	}
?>
