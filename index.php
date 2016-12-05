<!DOCTYPE html>
<html>
<body>

<form action="" method="get">
Province: <input type="text" name="province"><br>
<input type="submit">
</form>

<?php echo file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$_GET["province"].',th&appid=14b4a36d352be590b73ae1892c79704e'); ?>
</body>
</html>