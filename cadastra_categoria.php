<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos02.css" rel="stylesheet" >
    <title>Cadastrar uma Categoria</title>
</head>
<body>
    <!--menu-->
    <?php include("menu_novo.php");?><br>

    <!--background-->
    <body background="img/fundo_color_01.jpg" id="fundo">
     
    <!--Menu-->

        <div class="container-md p-3">
            <form action="#" method="POST" id="form">           
                    <div class="container-md card bg-light px-4 py-4" style="text-align: center; opacity:0.92";>
                        <label for="exampleInputEmail1" class="form-label"><H3><b>NOVA CATEGORIA</b></H3></label>

                        <div class="container-md">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <input autofocus type="text" name="txtnome" placeholder="Adicionar Nova Categoria" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        
                        <div id="emailHelp" class="form-text m-auto">Digite um Nome de Gênero/ Categoria de Jogo</div><br>
                        <p class="text-center"><input type="submit" name="btn" value="Salvar" id="btn" class="border-dark text-dark btn btn-warning btn-outline-light shadow btn-200"></p>
                    </div>
                </div>
            </form>
        </div>
 


<!--PHP start ADICIONAR-->
<?php
    require_once("conect.php");

    /*                    ╭═════════════════════╮
                             Testa se os campos 
                            estão vazios

                          ╰═════════════════════╯
*/ 

    if(isset($_POST['btn']) && empty($_POST['txtnome'])){

        echo "<div class='alert alert-warning col-6 offset-3 text-center ' role='alert'>
                            Digite o Nome da Categoria/Gênero !
                    </div>";

    }//-----------insere valores--------------//

    elseif(isset($_POST['btn'])){
        $nome = $_POST["txtnome"];
        $sql = "INSERT INTO categorias (nome_cat) VALUE ('$nome')";
        $res = mysqli_query($conect, $sql);
        $qtd = mysqli_affected_rows($conect);
        if($qtd>0){
            echo "<div class='alert alert-warning col-3 m-auto' role='alert'>
                        Sucesso, Categoria Salva com Sucesso !
                  </div>";
        }
        else{
            echo "<p>Erro na Conexao! $qtd registros encontrados.</p>" . mysqli_error($conect);
        }
    }

    // -------------deleta valores-------------- //
    if(isset($_GET['id'])){

        $id  = $_GET['id'];
        $sql = "DELETE FROM categorias WHERE id_categoria=$id";
        $res = mysqli_query($conect, $sql);
        if($res){
            echo "<div class='alert alert-danger col-3 m-auto' role='alert'>
                        Categoria $id Excluído com Sucesso !
                </div>";
        }
    }

    // -------------exibe em ordem decrescente----------------//
    $sql = "SELECT * FROM categorias ORDER BY id_categoria DESC";
    $res = mysqli_query($conect, $sql);
        echo "<div class='container-xl' style='opacity:0.92'>
           
                <div class='card bg-light px-4 py-4'>
                    <table class='table table-sm'>";

        echo "<tr class='table-primary'>
                <td><b>Categoria</td>
                <td><b>Deletar</td>
                <td><b>Editar</td>
            </tr>";
            
        while($linha = mysqli_fetch_array($res, 2)){

        echo "<tr>
                <td>$linha[1]</td>
                <td><a style='text-decoration:none' href='?id=$linha[0]'>❌</a></td>
                <td><a style='text-decoration:none' href='edita_categoria.php?id=$linha[0]'>📝</a></td>
             </tr>
            
             </div>";
}
echo "</table></div>";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>