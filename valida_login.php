<?php

    session_start();

    //echo 'Funcionando!';

    // echo $_GET['email'];
    // echo '<br>';
    // echo $_GET['senha'];

    // echo $_POST['email'];
    // echo '<br>';
    // echo $_POST['senha'];

   //Usuários do Sistema

   $usuario_autenticado = false;

   $usuarios_app = array(
    array('email' => 'admin@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd')
   );

   foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
   }

   if($usuario_autenticado){ //$usuario_autenticado == true
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');
   }else{
    //echo 'Erro de autenticação';
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
   }
?>