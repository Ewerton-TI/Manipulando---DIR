<?php

$filename = "usuarios.csv";

if(file_exists($filename)){

// r diz para abrir o arquivo de leitura
$file = fopen($filename,"r");

//implode transforma um array em string
//explode transforma uma string em array e explode toda vez que acha uma virgula
//FGETS pega uma linha por vez do arquivo.
$headers = explode(",",fgets($file));

$data = array();
while ($row = fgets($file)){
    
    $rowData = explode(",", $row);
    $linha = array();
    
    for ($i = 0; $i < count($headers); $i++){
        $linha[$headers[$i]] = $rowData[$i];
    }
    
    array_push($data,$linha);
}
    fclose($file);
    echo json_encode($data);
}

?>