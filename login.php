<?php


$username = $_POST["username"];
$password = $_POST["password"];

if($username == "admin" && $password == "admin123") {
    header (
        'location:home-page.html'
    );
}
else{
    echo "usuario ou senha invalidos";
}