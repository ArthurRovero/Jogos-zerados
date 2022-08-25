<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos02.css" rel="stylesheet" >
    <title>Cadastrar jogos</title>
</head>
<style>
    #card-hover-01:hover{
    transform: scale3d(1.02, 1.02, 1);
    transition: 0.6s, 0.6s;
}

#card-hover-02:hover{
    transform: scale3d(1.1, 1.1, 1);
    transition: 0.6s, 0.6s;
}

#card-hover-img:hover{
    transform: scale3d(2, 2, 1);
    transition: 0.6s, 0.6s;
    
}
</style>

<!--╔═══════════════╗
      Fundo de tela
    ╚═══════════════╝-->
<body background="img/fundo_color_01.jpg" id="fundo">

<!--╔═══════════════╗
          Navbar
    ╚═══════════════╝--> 
    <?php include("menu_novo.php");?>
     
<!--╔═══════════════╗
    Menu Cadastração
    ╚═══════════════╝-->
<div class="container-md px-3 ">
            
    <div class="row justify-content-lg-center">
        <div class="col-lg-8 offset-lg card bg-light px-4 py-4 " style="opacity:0.92">
                
            <form method="POST" action="#" enctype="multipart/form-data"> 
                <h3 class="text-center">CADASTRAR JOGO</h3>

                <div class="col">
                    <label class="col-sm-2 col-form-label">Nome</label>
                    <input autofocus type="text" name="txtnome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o Nome do Jogo"></p>
                </div>
                            
                <div class="col" >
                    <label class="col-sm-2 form-label">Imagem</label>
                    <input class="form-control" type="file" name="img" accept="image/*">
                </div>

                <div class="col">

                    <?php
                        require_once("conect.php");

                        $sql = "SELECT * FROM categorias ORDER BY id_categoria DESC";
                        $res = mysqli_query($conect, $sql);

                        echo "<label class='col-sm-2 col-form-label'>Categoria</label>
                                <select name='gen' class='form-control'>";

                                    while($row = mysqli_fetch_array($res, 2)){

                                        echo "<option value='$row[0]'>$row[1]</option>";

                                    } echo "</select>";
                    ?>  

                </div>

                <div class="col">
                    <label class="col-sm-2 col-form-label">Avaliação</label>
                    <input type="number-format" name="txtnota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0~10"></p>
                </div>

                <div class="col">
                    <label class="col-sm-2 col-form-label">Descrição</label>
                    <textarea type="text" name="desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escreve uma breve descrição do Jogo" rows="3"></textarea></p>
                </div>

                <div class="col-sm py-4 text-center" >
                    <button type="submit" value="CADASTRAR" name="btn" class="border-dark text-dark btn btn-warning btn-outline-light shadow btn-200">Cadastrar</button></p>
                </div>

            </form>

        </div>
    </div> 
</div>

        <!-- ╔════════════════•ೋೋ•════════════════╗ 
                             PHP Start
             ╚════════════════•ೋೋ•════════════════╝ -->

<?php
require_once("conect.php");

/*                    ╭═════════════════════╮
                        Testa se os campos 
                        estão vazios

                      ╰═════════════════════╯
*/ 
    if(isset($_POST['btn']) && empty($_POST['txtnome']) && empty($_POST['txtnota'])){

        echo "<div class='alert alert-warning col-6 offset-3 text-center fixed-top alert-dismissible fade show' role='alert'>
                <strong>Preencha os campos vazios !</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
             </div>";
    }
    
    elseif(isset($_POST['btn'])){

    $nome =     $_POST['txtnome'];
    $genero =   $_POST['gen'];
    $nota =     $_POST['txtnota'];
    $desc =     $_POST['desc'];


/*                    ╭═════════════════╮
                         Mover Imagem

                      ╰═════════════════╯
*/ 

    $img_tmp = $_FILES['img']['tmp_name'];
    $nome_arquivo = time();
    $novo_img = "img/$nome_arquivo.jpg";
    $mover = move_uploaded_file($img_tmp, $novo_img);

    $sql = "INSERT INTO `jogos` (nome, descricao, id_categoria, imagem, nota) VALUES ('$nome', '$desc', '$genero', '$novo_img', '$nota')";  
    $res = mysqli_query($conect, $sql);
    $row = mysqli_affected_rows($conect);


/*                    ╭══════════════════════╮
                         Testa se Cadastrou
                         
                      ╰══════════════════════╯
*/     
    
        if($row>0){

                echo "<div class='alert alert-success col-6 offset-3 text-center fixed-top alert-dismissible fade show ' role='alert'>
                            Jogo Cadastrado com sucesso !
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
        }else{
            echo "Erro" . mysqli_error($conect);
        }
    }


/*                    ╭══════════════════════╮
                            Deletar Jogo
                         
                      ╰══════════════════════╯
*/ 
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $sql = "DELETE FROM jogos WHERE id_jogo=$id";
        $res = mysqli_query($conect, $sql);
    }

/*                    ╭══════════════════════╮
                         Exibe os Jogos 
                         em tabela
                         
                      ╰══════════════════════╯
*/ 

        $sql = "SELECT * FROM jogos INNER JOIN categorias ON (jogos.id_categoria = categorias.id_categoria) ORDER BY `id_jogo` DESC";
        $res = mysqli_query($conect, $sql);

        echo "
        <div class='container-md  py-5 px-3' style='opacity:0.92'>
        <div class='row'>
        <div class='col card bg-light '>
                <table class='table table-hover table-light'>";
        echo "
                <tr>              
                    <th scope='col-sm'>Nome</th>                           
                    <th scope='col'>Capa</th>             
                    <th scope='col'>Del</th>
                    <th scope='col'>Edit</th>
            </tr>
            ";
        while($row = mysqli_fetch_array($res,2)){
           
            
        echo " 
                <tr id='card-hover-01'>                                
                    <td><h6>$row[1]</td>
                    <td><img src='$row[4]' height= '65' width='100' class='rounded' id='card-hover-img'></td> 
                    <td id='card-hover-02'><a style='text-decoration:none;' href='?id=$row[0]'>❌</a></td>
                    <td id='card-hover-02'><a style='text-decoration:none;' href='altera_jogo.php?id=$row[0]'>📝</a></td>
                 </tr>";
                
        }
         echo "</table>
        </div>
        </div>
        </div>"; 
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>