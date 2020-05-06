<?php

$name = "images";

//função is_dir se não for um diretorio se ele não existe.
//Função mkdir cria o diretório
if(!is_dir($name)){
    
    mkdir($name);
    
    echo "Diretório $name criado com sucesso";
}else{
    
    //rmdir remove o diretorio caso ele ja exista
    rmdir($name);
    echo "Já existe o diretório: $name foi removido";
}

?>

