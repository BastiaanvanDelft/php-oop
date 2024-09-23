<?php

require_once "vendor/autoload.php";
require_once "src/functions.php";

use Smarty\Smarty;

session_start();

$template = new Smarty();

$page = $_GET['page'] ?? null;
switch($page){
    case 'form':
        $template->display('templates/form.tpl');
        break;
    case 'result':
        // $_POST['email'], $_POST['password'], $_POST['check']
        $email = sanitizeInput($_POST['email']) ?? null;
        $_SESSION ['email'] = upperCaseInput($email);
        $_SESSION ['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $template->assign('data', $_SESSION);

        $template->display('templates/result.tpl');
        break;
    default:
        $template->display('templates/home.tpl');
}