<?php 
//index.php

require_once('src/controllers/homepage.php');
require_once('src\controllers\login.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'login') {
        login();
    }elseif($_GET['action'] === 'createAccount') {
        accountCreation();
    } else {
        throw new Exception('Action non définit');
    }
} else {
    homepage();
}