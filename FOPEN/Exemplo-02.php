<?php

require_once("config.php");

$sql = new sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$header = array();

foreach ($usuarios[0] as $key => $value){
    array_push($header, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $header)."\r\n");

foreach ($usuarios as $row){
    
    $data = array();
    
    foreach ($row as $key => $value){
    
        array_push($data,$value);
    
    }//End Foreach de coluna
fwrite($file, implode(",", $data)."\r\n");
}//End Foreach de linha
fclose($file);
//função implode recebe dois parametros, 1 - O que colocar para separar um item do outro da tabela
//2 - é o array ou o campo que eu quero aplicar a regra.
//echo implode(",", $header);

?>
