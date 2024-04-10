<?php

    $db_host = "localhost";
    $dbu = "root";
    $dbpw = "";
    $dbn = "holidaydb";
    $conn = "";

    try{
        $conn = mysqli_connect(
            $db_host,
            $dbu,
            $dbpw,
            $dbn
        );
    }
    catch(mysqli_sql_exception){
        echo "Could not connect! <br>";
    }