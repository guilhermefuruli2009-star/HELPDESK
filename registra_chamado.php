<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

$texto = $_POST['titulo'] . '#' . $_POST['categoria'] . '#' . $_POST['descricao'] . PHP_EOL;


echo $texto;

?>