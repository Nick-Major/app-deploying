<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My app</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php include 'about-me.html'; ?>
        
        <?php
        if (isset($_SESSION['user-name'])) {
            include 'welcome.html';
        } else {
            include 'form.html';
        }
        ?>
    </div>
</body>
</html>