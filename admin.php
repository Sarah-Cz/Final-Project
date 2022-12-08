<?php
require './incl/database.php';
//table info to access and post
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$ok = true;

require './incl/header.php';
//error messages for empty fields
if(empty($name)){
    echo '<p> your name is required</P>';
    $ok=false;
}
if(empty($email)) {
    echo '<p> An email is required</P>';
    $ok = false;
}
if(empty($password) | ($password != $confirm)){
    echo '<p>Passwords do not match</p>';
    $ok=false;
}
//confirmation for correct info
if($ok) {
    $password = hash('sha512', $password);
    $sql = "INSERT INTO USERS(name, email, password) VALUES ($name, $email, $password)";
    $conn->exec($sql);
    $conn = null;
}
//delete data from table
function deleteRecord($id)
{
    $query = "DELETE FROM users WHERE id = '$id'";
    $sql = $this->conn->query($query);
    if ($sql == true) {
        header("Location:users.php?msg3=delete");
    } else {
        echo "Record did not delete try again";
    }
}