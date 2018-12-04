<?php

if(!isset($_SESSION))
{
    session_start();
}

if(isset($_POST['login']))
{    
    $_SESSION['login'] = checkLogin($_POST['form_username'], $_POST['form-Password']);
}

header("Location: ../index.php");

function checkLogin($username, $password)
{
    $login = false;
    
    //open file
    $file = fopen("../login.txt", "r");
    
    //check username and password 
    $storedUsername = fgets($file);
    $storedPassword = fgets($file);
    
   
    if((trim($username) == trim($storedUsername)) && (trim($password) == trim($storedPassword)))
    {
        $login = true;
        $_SESSION["Username"] = $username;
    }
    
    
    fclose($file);
    return $login;
    
}