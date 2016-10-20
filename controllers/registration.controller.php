<?php
if($action == 'registration'){
    $nameForm = isset($_POST['name']) ? $_POST['name']:  null;
    $emailForm = isset($_POST['email']) ? $_POST['email'] : null;
    $loginForm = isset($_POST['login']) ? $_POST['login'] : null;
    $passwordForm = isset($_POST['password']) ? $_POST['password']:  null;

    if ($nameForm && $emailForm && $loginForm && $passwordForm) {

       $checkForUnique = checkUniqueUser($pdo,$emailForm,$loginForm);
        if(empty($checkForUnique)){
            $dataForm = [$nameForm,$emailForm,$loginForm, $passwordForm];
            $isValid = validate($dataForm);
            if ($isValid) {
                saveUser($pdo,$nameForm,$emailForm, $passwordForm,$loginForm);
          //      echo "all done, welcome";
            }
        }
       // else echo "<h3>This user already exist</h3>";


    }
//    echo "$nameForm  $emailForm  $loginForm  $passwordForm";
    view('registration');
}