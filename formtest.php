<?php // formtest.php
if(isset($_POST['name'])) $name= $_POST['name'];





echo <<< _END
<html>
<head>
<title> formtest</title>
</head>
<body>
Your name is: $name <br>
<form method= "post" action= "formtest.php">
What is your name?
<input type= "text"  name= "name">
<input type= "submit">
</form>
</body>
</html>
_END;
?>