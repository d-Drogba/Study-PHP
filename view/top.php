<?php 
require_once('lib/print.php');
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?php
        print_title();
        ?>
    </title>
</head>

<body>
    <h1><a href="index.php">WEB</h1>
    <ol>
        <?php
        print_list();
        ?>
    </ol>