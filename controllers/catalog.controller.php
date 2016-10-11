<?php
if( $action == 'catalog' ) {
//    echo "fds";
//    $nameForm = isset($_POST['name']) ? $_POST['name']:  null;
//    $emailForm = isset($_POST['email']) ? $_POST['email'] : null;
//    if ($nameForm && $emailForm){
//        $dataForm = [$nameForm,$emailForm,$messagesForm];
//        $isValid = validate($dataForm);
//        if ($isValid) {
//            setcookie('name',$nameForm, time()+3600);
//            setcookie('email',$emailForm, time()+3600);
//        }
//    }
    view('catalog');


    $categories = $pdo->query('SELECT `title` FROM `categories`');
    $categor = $categories->fetchAll(PDO::FETCH_ASSOC);

    foreach( $categor as $key ) {
        echo "<a href=/>".$key['title']."</a>";
        echo '<br/>';
    }
}
$sql = $db->prepare('SELECT `id`, `password` from `users` where `login`= ?');
$sql->execute(array($login));