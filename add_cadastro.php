<?php
include_once 'database_users.php';
$novo_cadastro = array();
$novo_cadastro['email'] = $_POST['email'];
$novo_cadastro['senha'] = $_POST['senha'];
$novo_cadastro['confirmaSenha'] = $_POST['confirmaSenha'];
echo '<pre>';
print_r($novo_cadastro);
print_r($usuarios_app);
echo '</pre>';
$message = false;
$novoemail = $novo_cadastro['email'];
foreach ($usuarios_app as $key => $users) {
    foreach ($users as $novoemail) {
        if ($novoemail == $users['email']) {
            $message = true;
            break;
        } 
    }
    if($message) {
        header('Location: novo_cadastro.php?email=cadastrado');
        break;
    }
}

if(!$message) {$usuarios_app[] = $novo_cadastro;}

echo '<pre>';
print_r($novo_cadastro);
print_r($usuarios_app);
echo '</pre>';


?>