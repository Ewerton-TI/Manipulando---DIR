<?php

$filename = "lobo.jpg";

//file_get_contents le o conteudo inteiro de um arquivo
//base64_encode converter em string
$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:".$mimetype.";base64," . $base64;
        
?>
<a href="<?=$base64encode?>"> Link Para Imagem</a>

<img src="<?=$base64encode?>">