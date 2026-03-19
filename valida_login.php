<?php
    //echo "Funcionando";

    //echo $_GET['email'];
    //echo "<br>";
    //echo $_GET['password'];

    //echo $_POST['email'];
    //echo "<br>";
    //echo $_POST['password'];

    //Usuarios do sistema

    $usuario_autenticado = false;

    $usuario_app = array(
        array("email" => "admin@test.com.br", "password" => "123456"),
        array("email" => "user@test.com.br", "password" => "abcdef")
    );

    foreach($usuario_app as $user) {
        if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
            $usuario_autenticado = true;
        }
    }

    if ($usuario_autenticado) { //usuario_autenticado == true
        echo "Usuário autenticado";
    } else {
        echo "Erro de autenticação";
    };
    


    
?>