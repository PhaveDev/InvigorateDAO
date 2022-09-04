<?php
    $dbUser = "root";
    $dbPass = "";
    $dbAddress = "localhost";
    $dbName = "invigoratedao";

    $pdoConnect = new PDO('mysql:host='.$dbAddress.';dbname='.$dbName, $dbUser, $dbPass);
    $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>