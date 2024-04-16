<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "trip";

    $conn=mysqli_connect ($db_hostname, $db_username, $db_password , $db_name );
    if(!$conn){
        echo "Connection failed: ".mysqli_connect_error();
        exit;
    }
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $otherinfo=$_POST['otherinfo'];

    $sql = "INSERT INTO visit (`name`, `age`, `gender`, `email`, `phone`, `otherinfo`,`date`) VALUES ('$name',$age,$gender, '$email',$phone, '$otherinfo' current_timestamp())";

    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "Error:" .mysqli_error($conn);
        exit;
    }

    echo "Registration successful";
    mysqli_close($conn);




?>