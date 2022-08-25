
<?php
require_once('conect.php');
echo "
    <nav class='navbar navbar-expand-lg bg-light border fixed-top' style='opacity:0.92'>
        <div class='container-fluid '>
            <a class='navbar-brand' href='index.php'><img src='img/fantasma.png' style = 'max-width: 50px'></a>
                <button class='navbar-toggler border-dark text-dark btn btn-outline-warning shadow' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
                </button>
            <div class='collapse navbar-collapse ' id='navbarSupportedContent'>
                    <ul class='navbar-nav me-auto mb-2 mb-lg-0'>

                        <li class='dropdown'>
                        <button class='border-dark text-dark btn btn-outline-warning shadow me-2 px-3 dropdown-toggle' type='button' id='dropdownMenuButton2' data-bs-toggle='dropdown' aria-expanded='false'>
                           Ações
                        </button>

                            <ul class='dropdown-menu'>
                                <li><a class='dropdown-item' href='cadastra_jogo.php'>Cadastrar Jogo</a></li>
                                <li><a class='dropdown-item' href='cadastra_categoria.php'>Cadastrar Gênero</a></li>
                            </ul>                          
                        </li>

                        <li class='dropdown'>
                        <button class='border-dark text-dark btn btn-outline-warning shadow px-2 dropdown-toggle' type='button' id='dropdownMenuButton2' data-bs-toggle='dropdown' aria-expanded='false'>
                           Gêneros
                        </button>";

                        $sql = "SELECT * FROM categorias ORDER BY nome_cat ASC";
                        $res = mysqli_query($conect, $sql);
                        
                        echo"<ul class='dropdown-menu'>";

                        while($row = mysqli_fetch_array($res, 2)){

                            echo "<li><a class='dropdown-item' href='$row[2]' value='$row[0]'>$row[1]</a></li>";

                        } echo "</ul>

                        <li class='nav-item'>
                            <a class='nav-link active' aria-current='page' href='index.php'>Home</a>
                        </li>

                        <li class='nav-item'>
                            <a class='nav-link' href='#'>Sobre</a>
                        </li>
                    </ul>

                    <form class='d-flex' role='search'  method='POST' action='search.php'>
                        <input name='srch' class='form-control me-2 border-dark btn btn-outline-warning shadow' type='search' placeholder='Buscar Jogo      🔍' aria-label='Search'>
                        <button class='border-dark text-dark btn btn-outline-warning shadow' type='submit'>Buscar</button>
                    </form>
            </div>
        </div>
    </nav><br><br><br><br>"

?>
