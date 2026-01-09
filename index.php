<?php
include './includes/header.inc.php';
include './includes/navbar.inc.php';

$available_pages = ['login', 'register'];

if (isset($_GET['page'])) {
    $page = $_GET['page'];

    if (in_array($page, $available_pages)) {
        include './pages/' . $page . '.php';
    } else {
        echo '<h1>404 page not found</h1>';
    }
} else {
    echo '<h1>404 page not found</h1>';
}

include './includes/footer.inc.php';

?>


