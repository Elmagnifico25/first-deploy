<?php
session_start();

if ($_POST['name'] !== '' && isset($_POST['name'])) {
    $_SESSION['user_name'] = $_POST['name'];
    header('Location: /first-deploy/');
}
