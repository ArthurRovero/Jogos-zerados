<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos02.css" rel="stylesheet" >
    <title>Editar/ Alterar Jogo</title>
</head>
<body>

<!--╔═══════════════╗
      Fundo de tela
    ╚═══════════════╝-->
<body background="img/fundo_color_01.jpg" id="fundo">


<!--╔═══════════════╗
          Navbar
    ╚═══════════════╝--> 
   <?php

use Sabberworm\CSS\Property\Selector;

 include("menu_novo.php");?>
   

 <!-- ╔════════════════•ೋೋ•════════════════╗ 
                       PHP Start
      ╚════════════════•ೋೋ•════════════════╝ -->

 <?php

require_once("conect.php");

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $sql = "SELECT * FROM jogos INNER JOIN categorias ON (jogos.id_categoria = categorias.id_categoria) WHERE id_jogo=$id";
        $res = mysqli_query($conect, $sql);

        if(!$res){
            echo mysqli_error($conect);
        }
        else{
            $row = mysqli_fetch_array($res, 2);
        }
    }
    else{

        echo "<br>
                <div class='alert alert-danger col-6 offset-3 text-center' role='alert'>
                    Acesso inválido !!!
                </div>"; 
    }
?>

<!--╔═══════════════╗
    Menu Cadastração
    ╚═══════════════╝-->

    <div class="container-lg p-3">
            
        <div class="row justify-content-lg-center">
            <div class="col-lg-8 offset-lg card bg-light px-4 py-4" style="opacity:0.92">
                
                <form method="POST" action="altera_jogo_02.php" enctype="multipart/form-data"> 
                    <h3 class="text-center">EDITAR JOGO 📝</h3>

                        <div class="col">
                            <label class="col-sm-4 col-form-label">Alterar Nome </label>
                            <input type="text" name="txtnome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php if(isset($row)){ echo "$row[1]";} ?>"></p>
                        </div>           
                            
                        <div class="col" >
                            <label class="col-sm-6 form-label">Alterar Imagem Selecionada  </label>
                            <input class="form-control"  type="file" name="img" accept="image/*" value="">
                        </div>
                            
                        <div class="col-sm-fluid py-3">
                            <img src="<?php if(isset($row)){ echo "$row[4]";}?>"  class="card" style="max-width: 250px">
                            <h6> Atual Imagem selecionada </h6>
                        </div>


                        <div class="col"><!--seleciona as categorias do jogo dinamicamente-->

                        <?php
                            require_once("conect.php");

                            $sql2 = "SELECT * FROM categorias ORDER BY id_categoria DESC";
                            $res2 = mysqli_query($conect, $sql2);

                                echo "<label class='col-sm-4 col-form-label'>Editar Categoria</label>
                                        <select name='gen' class='form-control'>";

                                            while($row2 = mysqli_fetch_array($res2, 2)){

                                                echo "<option value='$row2[0]'>$row2[1]</option>";

                                                } echo "</select>";
                                            
                        ?>                              
                        </div>

                        <div class="col">
                            <label class="col-sm-4 col-form-label">Editar Avaliação</label>
                            <input type="number-format" name="txtnota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php if(isset($row)){ echo "$row[5]";} ?>"></p>
                        </div>

                        <div class="col">
                            <label class="col-sm-4 col-form-label">Editar Descrição</label>
                            <input type="text" name="desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php if(isset($row)){ echo "$row[2]";} ?>"></input></p>
                        </div>

                        <p><input type="hidden" name="id_oculto" value="<?php if(isset($row)){echo $row[0];} ?>"></p>
                <div class="row">
                        <div class="col-sm-2 py-2 " >
                            <button type="submit" value="SALVAR" name="btn_salvar" class="btn btn-primary btn-200">Salvar</button>
                        </div>
                 </div>
                </form>
                <div class="col-sm py-2" >
                            <a href="cadastra_jogo.php"><button type="submit" value="voltar" name="voltar" class="btn btn-primary btn-200"> < Voltar</button></a></p>
                        </div> 
            </div>
        </div> 

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>