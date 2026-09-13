<?php


namespace App\Controllers\PostsController;


use \PDO;


function indexAction(PDO $connexion)
{
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\postsModel\findAll($connexion);


    global $content;
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}



function showAction(PDO $connexion, int $id)
{
    include_once '../app/models/postsModel.php';
    $post = \App\Models\postsModel\findOneByID($connexion, $id);


    global $content;
    $title = $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}
