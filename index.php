<?php
session_start();

if (isset($_SESSION['user_name'])) {
    if ($_SESSION['user_name'] !== '') {
        echo 'Здравствуйте, '.$_SESSION['user_name'].'!<br /><br />';
        echo '<a href="/exit.php">Выйти</a>';
    }
} else {
    include_once __DIR__.'/web/index.php';
}

