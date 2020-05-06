<?php

// faz o scanner de toda a pasta(Direório).
$images = scandir("images");

foreach ($images as $img){
    //primeiro campo quem é o alvo que esta procurando quais as opções
    if(!in_array($img, array(".",".."))){
        //comando pathinfo comando para trazer mais informaçõs sobre os arquivos contidos na pasta
        $filename = "images".DIRECTORY_SEPARATOR."$img";
        $info = pathinfo($filename);
        
        var_dump($info);
    }
}

?>
