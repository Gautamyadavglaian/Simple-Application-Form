<?php
    $sub = false;
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $con = mysqli_connect($server, $user, $password);
    if (!$con){
        die ("Failed to connect" . mysqli_connect_error());
    }
    else
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sql = "insert into `Add`.`student` values ('$name' , '$fname', '$mname', '$class', '$phone', '$email');";
    
    if ($con->query($sql) == true)
    {
        // echo "Subbmitted";
        $sub = true;
    }
    else
    {
        // echo "Eroor: $sql <br> $con->error";
    }
    $con->close();
?>