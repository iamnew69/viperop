<?php

session_start();

$con = mysqli_connect('localhost','viperop','mayon@1234')

mysqli_select_db($con, 'viperop');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" User with this name already exists";
}else{
    $reg= " insert into usertable(name, password, email) values ('$name, '$pass', '$email')";
    mysqli_query($con, $reg);
    echo" Registered Successfully!"
}

?>