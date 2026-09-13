
<?php

// route Posts
// pattern: /posts/...
//url ?posts=...
// router posts

if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';


// route USERS
// pattern: /users/...
//url ?users=...
// router USERS

elseif (isset($_GET['users'])):
    include_once '../app/routers/users.php';



// ROUTE PAR DÉFAUT: Les 10 derniers posts
// PATTERN: /
// URL: ?
// CTRL: postsController
// ACTION: index
else:
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
endif;
