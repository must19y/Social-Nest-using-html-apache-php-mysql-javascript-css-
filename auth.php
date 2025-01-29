<?php   // authenticating username and password for the site
$username= 'admin';
$password= 'letmein';
if(isset($_SERVER['PHP_AUTH_USR'])&&
   isset($_SERVER['PHP_AUTH_PWD']))
{
if($_SERVER['PHP_AUTH_USER']== $username &&
   $_SERVER['PHP_AUTH_PW'])== $password
echo "YOU ARE NOW LOGGED IN AS ADMIN";
else die("Invalid username password for logging in");
}
else
{
header('WWW-Authenticate: Basic realm= "Restricted Section"');
header('HTTP1.0 401 Unauthorized');
die("Please enter your username and password");
}
?>  
