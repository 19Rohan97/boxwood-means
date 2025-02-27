<?php
include 'includes/header.php';

// Check if a page is specified in the URL, default to 'newEvaluation.php'
$page = isset($_GET['page']) ? $_GET['page'] : 'newEvaluation';

// Ensure the page file exists before including it
$pageFile = 'pages/' . $page . '.php';
if (file_exists($pageFile)) {
    include $pageFile;
} else {
    echo 'Page not found.';
}

include 'includes/footer.php';