<?php // learning sql from scratch and memory
require_once login.php
$db_server= mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("this is an mysql error". mysql_error());
mysql_select_db($db_database);
if(!mysql_select_db) die("error not found". mysql_error());
$query= "select * from classics";
$result= mysql_query($query);
if(!$result) die("command not foun". mysql_error());
rows= mysql_num_rows($result);
for($j=0;$j<rows;$j++)
{
row= mysql_fetch_row($result);
echo "AUTHOR:" . $row[$j];
echo "title:" . $row[$j];
echo " ". $row[$j];
}
?>
$query= "create table cats(cid number(3) primary key, cname char(10),age number(2))";
$result= mysql_query($query);
$query= "insert into cats values(10, "lion", 12);
$result= mysql_query($query);
$query= "insert into cats(cid, cname,age) values(20, "tiger",8)";
$result= mysql_query($query);
$query= "delete from cats where cid= 10";
$result= mysql_query($query);



