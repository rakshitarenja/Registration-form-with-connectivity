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
 if(isset($_POST["submit"]))
 	{
	$un=$_POST['un'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$city=$_POST['city'];
	$mob=$_POST['mob'];
	$g=$_POST['g'];
	$add=$_POST['add'];
	$h=$_POST['h'];
include('connect.php');
	$q=mysqli_query($nu,"insert into emp values('$un','$email','$pwd','$city','$mob','$g','$add','$h')");
/* here $nu is the connection of a file to the database.
we are inserting into the emp. NOTE emp is the name of the table which we have created in the database named userid.
*/
if($a>0)
	    echo("Data Saved!");
 else
      echo("data not saved!!");
	}
?>
