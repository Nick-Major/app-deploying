<?php
declare(strict_types=1);

session_start();

$name = isset($_POST['name-field']) ? trim($_POST['name-field']) : '';

if (!empty($name)) {
    $_SESSION['user-name'] = $name;
}

header("Location: index.php");
exit;