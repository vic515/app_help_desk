<?php 

echo '<pre>';
print_r($_POST);
echo '</pre>';

$arquivo = fopen('arquivo.hd', 'a');

$titulo = str_replace('#','-',$_POST['titulo']);
$categoria = str_replace('#','-',$_POST['categoria']);
$descricao = str_replace('#','-', $_POST['descricao']);

$chamado = $titulo.'#'.$categoria.'#'.$descricao. PHP_EOL ;

fwrite($arquivo,$chamado);
fclose($arquivo);
header('Location: abrir_chamado.php')
?>