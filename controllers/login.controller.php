<?php
if ($action == 'login'){
    $loginForm = isset($_POST['login']) ? $_POST['login'] : null;
    $passwordForm = isset($_POST['password']) ? $_POST['password']:  null;

    $autrizationOk = authorizationUser($pdo,$loginForm,$passwordForm);

    if ($autrizationOk){
         var_dump($autrizationOk);
        $_SESSION['id'] = $autrizationOk[0]['id'];
        $_SESSION['role'] = $autrizationOk[0]['role'];
    }


    view('login');
}