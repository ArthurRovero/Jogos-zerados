<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos02.css" rel="stylesheet" >
    <title>Editar Categoria</title>
</head>
<body>
<!--fundo de tela-->
<body background="img/fundo_color_01.jpg" id="fundo">

<!--menu navbar--> 
<?php include("menu_novo.php");?>

    <?php
        require_once("conect.php");
        //insere valores//
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM categorias WHERE id_categoria=$id";
            $res = mysqli_query($conect, $sql);

            if(!$res){
                echo mysqli_error($conect);
            }
            else{
                
                $linha = mysqli_fetch_array($res, 2);
            }
        }
        else{
            echo "acesso invalido";
        }
    ?>
    <div class="container-md p-3">
        <div class="row" >
            <div class="col-6 offset-3 card bg-white border" style="opacity:0.92">

                     <form action="edita_categoria02.php" method="POST" id="form">
                        <div class="container-sm m-auto" style="text-align: center;">

                                <p><h3><b>EDITAR CATEGORIA</b></h3>

                                <input type="text" name="txtnome"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php if(isset( $linha )) {echo $linha[1] ;} ?>"></p>

                                <div id="emailHelp" class="form-text m-auto">Alterar para um Gênero/Categoria validos.</div><br>

                                <p><input type="hidden" name="ocultoid" value="<?php if(isset( $linha )) {echo $linha[0] ;}?>"></p>

                                <p class="text-center"><input type="submit" name="btne" value="Salvar" id="btn" class="btn btn-primary text-center"></p>
                        </div>
                    </form>

            </div>
        </div>   
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>