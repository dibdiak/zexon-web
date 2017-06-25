<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 23.6.2017
 * Time: 12:58
 */

require_once ("config.php");
require_once ("functions.php");

$username = $_POST["username"];
$password = $_POST["password"];



$user = findUser($username);

if(count($user) > 1 )
{
    exit("You have duplicate username in your table");
}


//TODO riesenie bolo cez password_verify pozriet zabezpecenie prihlasenia

if(count($user) === 0 || !($password === $user[0]["password"]) ){
    exit("Username or password is invalid");
}

$user = $user[0];

if(loginUser($user)){
    echo "User is logged in";
}else{
    echo "Could not log in user";
}

?>