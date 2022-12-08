<?php
require './incl/database.php';
//accessing table
$title = $_POST['title'];
$author = $_POST['author'];
$status = $_POST['status'];
$ok = true;

require './incl/header.php';
//error messages for empty fields
if(empty($title)){
    echo '<p>A book title is required</P>';
    $ok=false;
}
if(empty($author)) {
    echo '<p>The authors name is required</P>';
    $ok = false;
}
if(empty($status)){
    echo '<p>Please select a status</p>';
    $ok=false;
}
//confirmation for correct info
if($ok){
    $sql = "INSERT INTO BOOKS(title, author, status) VALUES ($title, $author, $status)";
    $conn->exec($sql);
    $conn = null;
}

