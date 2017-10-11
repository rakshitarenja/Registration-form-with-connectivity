<html>
<head>
</head>
<body>
<h1 align="center" color="red">USER LOGIN</h1>


<form action="usercheck.php" method="post">
<pre>

User Email ID: <input type="text" name="email" placeholder="abc@email.com"/>

Password: <input type="password" name="pwd"/>

<input type="submit" name="Login" value="submit"/>

If Not Registered, Please Register at: <a href="newuser.php"><u>New User Registration</u></a>

</pre>
</form>
</body>
</html>

<?php
session_start();
	if(isset($_SESSION["er"]))
	echo "<font color=red>".$_SESSION["er"]."</font>"
?>
