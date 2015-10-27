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

        // execute the SQL query

        $result = $db->query($sql_query);

        // iterate over $result object one $row at a time
        // use fetch_array() to return an associative array

        while($row = $result->fetch_array()){
           // print out fields from row of data
           echo  $row['title'] . "<br>";
        }

        $result->close();
           // close connection to database
           $db->close();

    ?>
</p>
</body>
</html>