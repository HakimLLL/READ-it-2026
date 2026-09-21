
<?php

// ROUTE PAR DÉFAUT: DASHBOARD
// PATTERN: /
// URL: ?
// CTRL: postsController
// ACTION: index

include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\dashboardAction($connexion);
