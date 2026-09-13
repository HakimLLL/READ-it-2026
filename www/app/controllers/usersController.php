<?php

namespace App\Controllers\UsersController;

use \PDO;

// use \app\Models\UsersModel;
//include_once '../app/models/usersModel.php;


function LoginFormAction(PDO $connexion)
{
    global $content, $title;
    $title = "login FORM";
    ob_start();
    include '../app/views/users/loginForm.php';
    $content = ob_get_clean();
}
