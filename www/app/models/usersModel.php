<?php

namespace App\Models\UsersModel;

use \PDO;

function findOneByLoginAndPwd(PDO $connexion, array $userData)
{
    $sql = " SELECT id,firstname,lastname,created_at
        FROM users
        where login = :login
        and pwd = :pwd;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':login', $userData['login'], PDO::PARAM_STR);
    $rs->bindValue(':pwd', $userData['pwd'], PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}
