<!DOCTYPE html>
<?php
if (isset($_GET['content'])) {
    $content = $_GET['content'];
} else {
    $content = 'home';
}
require_once 'resources/layout.php';
?>

