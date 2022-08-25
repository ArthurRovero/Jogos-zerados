<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos02.css" rel="stylesheet" >
    <title>Jogos Zerados </title>
</head>
<style>
    #card-hover-01:hover{
    transform: scale3d(1.05, 1.05, 1);
    transition: 0.6s, 0.6s;
}
</style>

<!--fundo de tela-->
<body background="img/fundo_color_01.jpg" id="fundo">

<!--menu navbar--> 
   <?php include("menu_novo.php");?>

<!--jogos zerados-->

<?php

    include_once("conect.php");
    $sql = "SELECT * FROM jogos INNER JOIN categorias ON (jogos.id_categoria = categorias.id_categoria) ORDER BY id_jogo DESC";

    $res = mysqli_query($conect, $sql);

     echo "<div class='album'>
                <div class='container' style='opacity:0.88'>
                    <div class='row'>";

    while($row = mysqli_fetch_array($res, 2)){

        echo "<div class='col-md-4' id='card-hover-01'>

                <div class='card bg-warning border-dark mb-4'>   
                    <img src='$row[4]' class='card-img-top' >
                <div class='card-body'>

                    <h6 class='card-title shadow-text-sm'><b>$row[0]->$row[1]</b></h6>
                        <div class='card border-dark bg-dark text-white px-1 shadow'>
                            <div class='row-sm overflow-auto m-auto shadow ' style='height:110px'><p style='font-size: 85%'>$row[2]</p></div>  
                        </div>
                    </div>
                    

                    <ul class='list-group list-group-flush border-dark shadow'>
                        <li class='list-group-item text-center bg-warning shadow'>Gênero: <span class='badge text-bg-dark'>🔑$row[7]</span>
                    
                    ";

                    if($row[5]>=6){

                        echo "<ul class='list-group list-group-flush'>
                                <li class='list-group-item text-center bg-warning'>Classificação : <span class='badge text-bg-success'>$row[5]</span></li>
                            </ul>";
                    }
                    
                    if($row[5]<6){
                        echo "<ul class='list-group list-group-flush'>
                                <li class=' list-group-item text-center bg-warning'>Classificação : <span class='badge text-bg-danger'>$row[5]</span></li>
                            </ul>";
                    }
                echo " </li> </ul>";

                echo "<div class='card-body'>
                        <a href='#'><button type='button' class='btn btn-outline-dark shadow'>Ver Mais</button></a>
                        <a href='#'><button type='button' class='btn btn-outline-dark shadow'>Comprar</button></a>
                        </div>
                    </div> 
                </div>";
}
        echo " </div> 
            </div> 
        </div>";

include('rodape.php');

?>
<!--jAVA sCRIPT-->
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>