<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos02.css" rel="stylesheet" >
    <title>Alteração de registro</title>
</head>
<body>
    <?php
    require_once("conect.php");
    //altera registros//
    if(isset($_POST['btne'])){

        $id = $_POST['ocultoid'];
        $nome = $_POST['txtnome'];
        $sql = "UPDATE `categorias` SET `nome_cat`='$nome' WHERE id_categoria='$id'";
        $res = mysqli_query($conect, $sql);

        if(!$res){

            echo mysqli_error($conect);
        }else{

            sleep(2);
            header("location: cadastra_categoria.php");
        }
    }
    ?>
</body>
</html>