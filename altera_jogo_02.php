<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Registro</title>
</head>
<body>

<?php
require_once("conect.php");

if(isset($_POST['btn_salvar'])){

    $id =       $_POST['id_oculto'];
    $nome =     $_POST['txtnome'];
    $genero =   $_POST['gen'];
    $nota =     $_POST['txtnota'];
    $desc =     $_POST['desc'];


/*          ╭═════════════════╮
                Mover Imagem

            ╰═════════════════╯
*/ 
    $img_tmp = $_FILES['img']['tmp_name'];
    $nome_arquivo = time();
    $novo = "img/$nome_arquivo.jpg";
    $mover = move_uploaded_file($img_tmp, $novo);
    
    $sql = "UPDATE jogos SET nome='$nome', descricao='$desc', id_categoria='$genero', imagem='$novo', nota='$nota' WHERE id_jogo=$id"; 
    $res = mysqli_query($conect, $sql);
    if(!$res){

        echo mysqli_error($conect);
    }else{
       //volta para pagina principal em 1 sec//
       sleep(2);
       header("Location:cadastra_jogo.php");
    }
}

?>
    
</body>
</html>