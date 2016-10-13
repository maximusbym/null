<?php
function saveUser($pdo, $name, $email, $password, $login){
    $insert = $pdo->prepare("INSERT INTO users(`name`,`email`,`password`,`login`) VALUES (?,?,?,?)");
    $insert->execute(array($name, $email, $password, $login));
}
function CheckUniqueUser($pdo,$email,$login){
    $user = $pdo->query("SELECT * FROM `users` WHERE `login` ='{$login}' AND `email` = '{$email}'");
    $userCheck = $user->fetchAll();
    return $userCheck;
}