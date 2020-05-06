<?php

// faz o scanner de toda a pasta(Direório).
$images = scandir("images");

$data = array();

foreach ($images as $img){
    //primeiro campo quem é o alvo que esta procurando quais as opções
    if(!in_array($img, array(".",".."))){
        //comando pathinfo comando para trazer mais informaçõs sobre os arquivos contidos na pasta
        $filename = "images".DIRECTORY_SEPARATOR."$img";
        $info = pathinfo($filename);
        
        //para pegar o tamanho do arquivo filesize();
        $info["size"] = filesize($filename);
        //para pegar a data de modificação dos arquivos
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        //passar o arquivo via URL - função str_replace para trocar a barra que ficou invertida
        $info["url"] = "http://localhost/DIR/".str_replace("\\","/",$filename);
        //enpura todos os elementos da variavel $info para variavel $data.
        array_push($data,$info);
    }
}
echo json_encode($data);

?>
