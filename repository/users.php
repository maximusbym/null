<?php
function saveUser($pdo, $name, $email, $password, $login){
    $insert = $pdo->prepare("INSERT INTO users(`name`,`role`,`email`,`password`,`login`) VALUES (?,?,?,?,?)");
    $insert->execute(array($name,'customer',$email, $password, $login));
}
function checkUniqueUser($pdo,$email,$login){
    $user = $pdo->query("SELECT * FROM `users` WHERE `login` ='{$login}' OR `email` = '{$email}'");
    $userCheck = $user->fetchAll();
    return $userCheck;
}
function authorizationUser($pdo,$param,$password){
    $user = $pdo->query("SELECT * 
                          FROM `users` 
                          WHERE (`login` ='{$param}' AND `password` = '{$password}') 
                          OR (`email` ='{$param}' AND `password` = '{$password}')");
    $userCheck = $user->fetchAll();
    return $userCheck;
}
