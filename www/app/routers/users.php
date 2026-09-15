<?php

use \app\Controllers\UsersController;

include_once "../app/controllers/usersController.php";

switch ($_GET['users']):
    case 'login':
        UsersController\LoginAction($connexion, $_POST);
        break;

    default:
        UsersController\LoginFormAction($connexion);
        break;

endswitch;
