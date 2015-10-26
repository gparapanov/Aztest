<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
    Where would you like to say hello?<br>
    <?php
        $query=$_GET["query"];
        $type=$_GET["type"];

        $name=$_POST["name"];
        $dob=$_POST["dob"];
    ?>
    <a href="http://cm3028test.azurewebsites.net/helloPrinter.php?query=Earth">Earth</a><br>
    <a href="http://cm3028test.azurewebsites.net/helloPrinter.php?query=Mars">Mars</a><br>
    <a href="http://cm3028test.azurewebsites.net/helloPrinter.php?query=Pluto">Pluto</a><br>

    <form action="helloPrinter.php" method="post">
        <label>Full name</label><input type="text" name="name">
        <label>DOB</label><input type="date" name="dob">
        <label>Male</label><input type="radio" name="gender" >
        <label>Female</label><input type="radio" name="gender" >
        <label>Strength</label><input type="checkbox" name="check1" >
        <label>Invulnerability</label><input type="checkbox" name="check2" >
        <input type="submit" value="Submit">
    </form>


</p>
</body>
</html>