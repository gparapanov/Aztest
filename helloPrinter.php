<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
    <?php
        $query=$_GET["query"];
        echo "You have chosen ".$query."<br>";

        $name=$_POST["name"];
        $dob=$_POST["dob"];

        $gender;
        if(isset($_POST["gender"])){
            $gender=$_POST["gender"];
        }
        $powers;
        if(isset($_POST["check1"])){
            $powers=$_POST["check1"]." ";
        }
        if(isset($_POST["check2"])){
            $powers.=$_POST["check2"];
        }
        echo "Superhero name: ".$name." DOB: ".$dob." Gender: ".$gender." Powers: ".$powers;
    ?>
</p>
</body>
</html>