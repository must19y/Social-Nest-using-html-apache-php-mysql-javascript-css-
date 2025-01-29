<?php // query.php
require_once 'login.php';
$db_server= mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to mysql:".mysql_error());
mysql_select($db_database)
$query= "select * from classics";
$result= mysql_query(query);
if(!result) die("Database access faile:".mysql_error());
for($j=0;$j<$row;++$j)
{
$row= mysql_fetch_row($result);
echo 'Author:' . $row[0]. '<br>';
echo 'Title:' . $row[1]. '<br>';
echo 'Category:' . $row[2] . '<br>';
echo 'Year' . $row[3] . '<br>';
echo 'Isbn:' . $row[4]. '<br><br>';
}
?> 