<?php

namespace App\Controllers\UsersController;

use \PDO;

use \app\Models\usersModel;

include_once '../app/models/usersModel.php';


function LoginFormAction(PDO $connexion)
{
    global $content, $title;
    $title = "login FORM";
    ob_start();
    include '../app/views/users/loginForm.php';
    $content = ob_get_clean();
}


function LoginAction(PDO $connexion, array $userData)
{
    // on va chercher le user qui correspond aux userData
    $user = usersModel\findOneByLoginAndPwd($connexion, $userData);


    //si y'en a pas , on redirige vers la route login
    if (!$user) {
        header('location:' . PUBLIC_BASE_URL . '/users/login-form');
    }

    //on redirige evrs le dashboard admin
    header('location:' . ADMIN_BASE_URL);
}
