<?php
if( $action == 'guest' ){
      $nameForm = isset($_POST['name']) ? $_POST['name']:  null;
      $emailForm = isset($_POST['email']) ? $_POST['email'] : null;
      $messagesForm = isset($_POST['messages']) ? $_POST['messages'] : null;
        if ($nameForm && $emailForm && $messagesForm){
            $dataForm = [$nameForm,$emailForm,$messagesForm];
            $isValid = validate($dataForm);
                if ($isValid) {
                    save($dataForm, MESSAGE_PATH);
                    setcookie('name',$nameForm, time()+3600);
                    setcookie('email',$emailForm, time()+3600);
                }
        }

        // Делаем выборку с файла, что бы показать юзеру
        $messages = read(MESSAGE_PATH);
        if (!empty($newMessages)) {
            $messages = textChange($newMessages);
        }
//        if(mail($config['admin_email'], 'subject is form',"name {$nameForm} and bla bla")){
//            echo "mail send";
//        }
//        else echo "mail not send<hr>";
        view('guest', $messages);
    }