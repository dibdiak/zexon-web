<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 23.6.2017
 * Time: 13:56
 * @param $username
 * @return array
 */

function findUser($username){
    $connectionString = "mysql:dbname=".DATABASE_NAME.";host=localhost";

    //TODO Pridat try catch na zachytenie vynimky

    $pdo = new PDO($connectionString, DATABASE_USERNAME, DATABASE_PASSWORD);

    $sql = "SELECT * FROM users WHERE username = :username";

    $statement = $pdo->prepare($sql);

    $executed = $statement->execute([":username" => $username]);



    if(!$executed){
        print_r($statement->errorInfo());
        exit("An error ocurred executing statement");
    }

    $result = $statement->fetchAll();


    return $result;
}

function loginUser($user){
    startSession();

    $_SESSION["id"] = $user["id"];
    $_SESSION["username"] = $user["username"];

    return $_SESSION["username"] && $_SESSION["id"];
}

function startSession(){

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

}


?>