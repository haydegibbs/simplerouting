<?php
$page = $_GET['page'] ?? 'home';

if ($page == 'home') {
    echo "Welcome on the main palge!";
} elseif ($page == 'about') {
    echo "Page about us.";
} else {
    echo "Page not found.";
}
?>
