<?php
require_once 'functions.php';

if(isset($_POST['user'])){
$user= sanitizeString(isset($_POST['user']));
$result=querymysql("SELECT * from members where user= '$user'");

if($result->num_rows)
echo"<span class='taken'>&nbsp;&#x2718; " .
    "This Username is alredy available</span>";

else
echo"<span class='available'>&nbsp;&#x2714; ".
    "This Username is available</span>";
}
?>