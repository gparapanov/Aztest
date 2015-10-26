<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
    Where would you like to say hello?<br>
    <?php
        $query=$_GET["query"];
        $type=$_GET["type"];

    ?>
    <a href="http://cm3028test.azurewebsites.net/helloPrinter.php?query=Earth">Earth</a><br>
    <a href="http://cm3028test.azurewebsites.net/helloPrinter.php?query=Mars">Mars</a><br>
    <a href="http://cm3028test.azurewebsites.net/helloPrinter.php?query=Pluto">Pluto</a><br>
</p>
</body>
</html>