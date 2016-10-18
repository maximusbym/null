<?php
if ($action == 'login'){
    $loginForm = isset($_POST['login']) ? $_POST['login'] : null;
    $passwordForm = isset($_POST['password']) ? $_POST['password'] : null;
    $rememberMe = isset($_POST['rememberMe']) ? $_POST['rememberMe'] : null;
    $autrizationOk = authorizationUser($pdo,$loginForm,$passwordForm);

    if ($autrizationOk)  {
        $_SESSION['id'] = $autrizationOk[0]['id'];
        $_SESSION['role'] = $autrizationOk[0]['role'];
        echo "well done";
    }
//    if ($rememberMe){
//        setcookie();
//    }
    view('login');
}