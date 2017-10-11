<?php
$con=mysqli_connect("localhost","root","","userid",3306);
  if (!($con))
    echo ("database not connected");

/*above line explains...
 localhost is the host we are going to use with the server and server can be any like wamp or xampp.
 root is the root of the site we are using with the server, in other words while you set the site in your server you need to put any name on it in other words name of website or username.
 "" written is the password that I have set with the root in accessing the files in the site on the respective server. Other than "" this if you put NULL in uppercase also works. This password can be according to your convenience.
 user id is the name of the database where you are going to save your data. Note that you have to create userid named database in mysql.
 3306 is the port number of my computer. Find your host port number in config file of your wamp/xampp.
 !($con) shows that if you are not connected to the database it will show the output on the screen as database not connected else if connected no output regarding the connection with the database is printed.
*/

?>
