<?php
declare(strict_types=1);

session_start();
unset($_SESSION['user-name']);
header("Location: index.php");
exit;