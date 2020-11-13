<?php 

$mysqli = new mysqli('localhost', 'root', '', 'elite') or die(mqsqli_error($mysqli));

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];

    $mysqli->query("INSERT INTO details (name, phone, email,dob, age) VALUES('$name','$phone','$email','$dob','$age') ") or
        die($mysqli->error);
}