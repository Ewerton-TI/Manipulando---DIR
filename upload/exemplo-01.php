<!--enctype pega o conteudo do arquivo se não pegaria apenas o nome do arquivo-->
<form method="POST" enctype="multipart/form-data">
    
    <input type="file" name="fileUpload">
    
    <button type="submit">Enviar</button>
    
</form>

<?php
//Verifica e guarda o tipo de metodo da pagina GET,POST.
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    
    //array super global serve para tratar arquivos enviados via upload
    //serve para guardar as informações temporario do arquivo
    
    $file = $_FILES["fileUpload"];
    
    //caso tenha algum erro ele retorna o erro.
    if($file["error"]){
      
        throw new Exception("Error:".$file["error"]); 
    }
    
    $dirUploads = "uploads";
    
    if(!is_dir($dirUploads)){
        
        mkdir($dirUploads);
    }
   //move o arquivo temporario para o diretorio fisico do arquivo que foi feito o upload
   if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
       
       echo "Upload realizado com sucesso!";
       
   }else{
       throw new Exception("Não foi possivel realizar o upload.");
   }
    
}


?>

