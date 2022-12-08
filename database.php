<?php
//connecting to database
try{
$conn = new PDO('mysql:host=localhost;dbname=readers', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch
(PDOExeption $e) {
    echo "Connection Failed: ";
}
//error message
