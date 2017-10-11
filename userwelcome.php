<?php
session_start();
	if(isset($_SESSION["un"]))
	{
	echo "well-come:".$_SESSION["un"];
	}
	else
	header("Location:Login.php");
?>
