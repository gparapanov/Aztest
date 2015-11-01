<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
    <?php

        $db = new mysqli(
        "eu-cdbr-azure-west-c.cloudapp.net",
        "b9427aa9fe6aad",
        "42d73b45",
        "cm3028test"
        );

        // test if connection was established, and print any errors

        if($db->connect_errno){
            die('Connectfailed['.$db->connect_error.']');
        }

        // create a SQL query as a string

        $sql_query = "SELECT * FROM marvelmovies WHERE title LIKE('X-Men%')";
        $sql_query2 ="SELECT * FROM marvelmovies where yearReleased<2010";
        $sql_query3="SELECT * FROM marvelmovies where notes like ('%Oscar%;')";

        // execute the SQL query

        $result = $db->query($sql_query);
        $result2=$db->query($sql_query2);
        $result3=$db->query($sql_query3);

        // iterate over $result object one $row at a time
        // use fetch_array() to return an associative array

        while($row = $result->fetch_array()){
           // print out fields from row of data
           echo  "xmen movies<br>".$row['marvelMovieID']." ".$row['notes']." ".$row['productionStudio']." ".$row['title']." ".$row['yearReleased'] . "<br>";
           echo "movies before 2010<br>". $row['marvelMovieID']." ".$row['notes']." ".$row['productionStudio']." ".$row['title']." ".$row['yearReleased'] . "<br>";
        }
        while($row = $result2->fetch_array()){
            // print out fields from row of data
            echo "movies before 2010<br>". $row['marvelMovieID']." ".$row['notes']." ".$row['productionStudio']." ".$row['title']." ".$row['yearReleased'] . "<br>";
        }
        while($row = $result3->fetch_array()){
            // print out fields from row of data
            echo "movies with oscars<br>". $row['marvelMovieID']." ".$row['notes']." ".$row['productionStudio']." ".$row['title']." ".$row['yearReleased'] . "<br>";
        }

        $result->close();
           // close connection to database
           $db->close();

    ?>
</p>
</body>
</html>