<?php
if( $action == 'guest' ){
      $nameForm = $_POST['name'];
      $emailForm = $_POST['email'];
      $messagesForm = $_POST['messages'];
        if (!empty($nameForm && $emailForm && $messagesForm)){
            $dataForm = [$nameForm,$emailForm,$messagesForm];
            $isValid = validate($dataForm);
            if ($isValid) {
                save($dataForm, MESSAGE_PATH);
            }
        }

        // Делаем выборку с файла, что бы показать юзеру
        $messages = read(MESSAGE_PATH);
        if (!empty($newMessages)) {
            $messages = textChange($newMessages);
        }
        view('guest', ['messages' => $messages]);
    }