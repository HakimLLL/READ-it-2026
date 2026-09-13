<?php

use \app\Controllers\UsersController;

include_once "../app/controllers/usersController.php";

switch ($_GET['users']):
    default:
        UsersController\LoginFormAction($connexion);
        break;

endswitch;
