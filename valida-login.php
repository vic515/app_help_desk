<?php

    session_start();
    $_SESSION['x'] = 'Oi, sou um valor de sessão';
    print_r($_SESSION);
    include_once 'database_users.php';
    // echo '<pre>';
    // print_r($usuarios_app);
    // echo '</pre>';

    foreach ($usuarios_app as $key => $user) {
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];        
        }
    }



    if($usuario_autenticado) {
        header('Location:home.php');
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
    } else {
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NAO';
    }
 ?>