<?php
include 'dbh.php';
$date = $_POST['date'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$job = $_POST['job'];
// insert data into servis db 
try {
    $sql = "INSERT INTO zakazivanje(date,name,email,phone,job) VALUES (:date,:name,:email,:phone,:job)";
    $stmt =$dbh->prepare($sql);
    $stmt->execute(array(':date'=>$date,':name'=>$name,':email'=>$email,':phone'=>$phone,':job'=>$job));
echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }





header('Location: http://localhost/auto%20servis/public/calendar.php');

?>