<?php
if ($action == 'users'){

    $updateId = isset($_GET['update']) ? $_GET['update'] : null;
    if (!$updateId){
        $deletedId = isset($_GET['delete']) ? $_GET['delete'] : null;
        if ($deletedId) {
            $count = deleteUser($pdo,$deletedId);
            echo "deleted $count users";
        }

        $allUsers = getAllUsers($pdo);
        view('users/users', $allUsers);

    }
    else{

        $user = getUserInfo($pdo,$updateId);

        view('users/update_user',$user);
    }
}
