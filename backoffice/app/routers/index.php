
<?php

// route Posts.show
// pattern: /posts/id/slug
//url ?posts=show&id=x
// router posts

if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';





// ROUTE PAR DÉFAUT: Les 10 derniers posts
// PATTERN: /
// URL: ?
// CTRL: postsController
// ACTION: index
else:
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
endif;
