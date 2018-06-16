<?php
$user = 'root';
$pass ='';

    $dbh = new PDO('mysql:host=localhost;dbname=servis', $user, $pass);
    $dbh -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

