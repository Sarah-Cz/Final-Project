<?php
//verification for existing users
$name = $_POST['name'];
$password = hash('sha512', $_POST['password']);
require 'databse.php';
//access sql table for password and username
$sql = "SELECT id FROM users WHERE name = '$name' AND password = '$password'";
$result = $conn->query($sql);
$count = $result -> rowCount();
if($count == 1){
    echo '<p>Logged in Successfully</p>';
//if name and password are not entered correctly and not found they get this message
foreach($result as $row){
    session_start();
    $_SESSION['id'] = $row['id'];
    header('Location: .../users.php');
    }
}else{
    echo '<p>Incorrect username or password</p>';
}
$conn = null;

