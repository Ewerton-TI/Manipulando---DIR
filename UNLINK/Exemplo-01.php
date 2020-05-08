<?php

$file = fopen("teste.txt","w+");

fclose($file);
//O comando UNLINK para remover um diretório/pasta
unlink("teste.txt");

echo "Arquivo removido com sucesso";
?>