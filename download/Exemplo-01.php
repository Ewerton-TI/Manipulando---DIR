<?php

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

//transforma o que esta vindo pela URL em um arquivo Real.
$parse = parse_url($link);

//pega apenas o conteudo que esta no campo path que componhe o arquivo.
$basename = basename($parse["path"]);

$file = fopen($basename,"w+");

fwrite($file, $content);

fclose($file);

?>
<img src="<?=$basename?>">