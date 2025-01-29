// integratinh php with html
<?php
$f= $c= " ";
if(isset($_POST['f']) $f= sanitizestring($_POST['f']);
if(isset($_POST['c']) $c= sanitizestring($_POST['c']);
if($f!= " ")
{
$c= intval((5/9) ($f- 32));
$out= "$f f equals $c c";
}
elseif($c != " ")
{
$f = intval((9/5) $c + 32);
$out= "$c c equals $f f";
}
else $out= " ";
echo<<< _END
<html>
<head>
<title>conversion of temperature</title>
</head>
<body>
<b>$out</b>
<form method= "post" action= "convert.php">
fahrenheit<input type= "text" name= "f">
celsius<input type= "text" name= "c">
<input type= "submit" value= "convert">
</form>
</body>
</html>
END;
function sanitizestring($var)
{
$var= stripslashes($var);
$var= striptags($var);
$var= htmlentities($var);
return $var;
} 
?>