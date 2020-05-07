<?php

//função FOPEN primeira variavel qual o endreço do arquivo, segunda variavel coomo
//controlar arquivo, ler, alterar,inserir,remover.
// W+ escrever dentro do arquivo e como não existe ele cria o arquivo.
//A+ para apenas adicionar no arquivo
$file = fopen("log.txt","a+");

//função fwrite para escrever dentro do arquivo
fwrite($file, date(" Y-m-d H:i:s ")."\r\n");

//fecha o arquivo o manipulador
fclose($file);

echo"Arquivo criado com sucesso";

?>
