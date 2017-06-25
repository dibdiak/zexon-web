<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 23.6.2017
 * Time: 12:50
 */
?>

<!DOCTYPE html>
<html>

    <head>
    <meta charset="UTF-8"
        <title>login page</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" media="screen" charset="UTF-8">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css" media="screen" charset="UTF-8">
        <link rel="stylesheet" href="../assets/css/loginForm.css" media="screen" charset="UTF-8">


    </head>

        <body class="login-container">

            <form class="login" action="admnistration.php" method="post">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="submit"></label>
                    <input type="submit" name="submit" id="submit" class="form-control" >
                </div>
                </div>
            </form>


        </body>

</html>


