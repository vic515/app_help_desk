<?php
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
        array('email' => 'lemosvict@gmail.com', 'senha' => 'papeldecarta')
    );
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
    if(in_array($_POST,$usuarios_app)) {
        echo "<hr><hr> Usuário autenticado com sucesso";
    } else {
        header('Location: index.php?login=erro');
    }
 ?>