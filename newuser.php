<html>
<head>
<title>New User Registration</title>
</head>
<body>

<form action="newuser.php" method="post">

<table>
<tr><td>Name</td><td><input type="text" placeholder="Enter Name" name="un"/></td></tr>

<tr><td>Email</td><td><input type="text" placeholder="abc@email.com" name="email"/></td></tr>

<tr><td>Password</td><td><input type="password" name="pwd"/></td></tr>

<tr><td>Select City</td><td><select name="city">
  <option>Indore</option>
  <option>Ratlam</option>
  <option>Bhopal</option>
  <option>Dewas</option>
  <option>Ujjain</option>
  </select></td></tr>

<tr><td>Mob.No</td><td><input type="text" name="mob"/></td></tr>

<tr><td>Hobby</td>
<td>
 Play <input type="checkbox" name="ch1[]" value="Play"/><br>
 read <input type="checkbox" name="ch1[]" value="read"/><br>
 write <input type="checkbox" name="ch1[]" value="write"/><br>
</td></tr>

<tr><td>Gender</td><td>
Male <input type="radio" name="g" value="Male"/><br>
Female <input type="radio" name="g" value="Female"/>
<br></td></tr>

<tr><td>Address</td><td><textarea name="add" rows="5" cols="15"></textarea></td>

<tr><td><input type="submit" name="submit" value="submit"/></td></tr>

<td><input type="reset" name="reset" value="reset"/></td></tr>

</table>
</form>
</body>
</html>

<?php
 $nu=mysqli_connect("localhost","root","","userid",3306);

/*above line explains that
 localhost is the host we are going to use with the server and server can be any like wamp or xampp.
 root is the root of the site we are using with the server, in other words while you set the site in your server you need to put any name on it in other words name of website or username.
 "" written is the password that I have set with the root in accessing the files in the site on the respective server. Other than "" this if you put NULL in uppercase also works. This password can be according to your convenience.
 user id is the name of the database where you are going to save your data. Note that you have to create userid named database in mysql.
 3306 is the port number of my computer. Find your host port number in config file of your wamp/xampp.
*/

 if(isset($_POST["submit"]))
 	{
	extract($_POST);
// $h=implode(",",$ch1);

	$a=mysqli_query($nu,"insert into emp values('$un','$email','$pwd','$city','$mob','$g','$add','$h')");
/* here $nu is the connection of a file to the database.
we are inserting into the emp. NOTE emp is the name of the table which we have created in the database named userid.
*/
if($a>0)
	    echo("Data Saved!");
 else
      echo("data not saved!!");
	}
?>
