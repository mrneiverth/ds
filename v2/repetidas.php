<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Tinderinhas - Home</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css"/> 
    		<link rel="stylesheet" href="style.css">
    		<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    </head>
    
    <body>

        <?php
	        ini_set('display_errors', 'On');

            require_once 'VerificadorSessao.class.php';
            require_once 'UsuarioCadastrado.class.php';
            require_once 'Colecao.class.php';
            require_once 'db.class.php';

            session_start();
            VerificadorSessao::verificarSessao();
            $user = $_SESSION['usuario_ativo'];

        ?>
      <!-- Square card -->
      <style>

      #masterdiv {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        min-height: 100vh;
        margin-top: -88px;
        
      }
      </style>
        <div id="masterdiv" >
            <table class="mdl-data-table mdl-js-data-table">
                <thead>
                    <tr>
                    <th class="mdl-data-table__cell">Nome da Figurinha</th>
                    <th class="mdl-data-table__cell">Numero </th>
                    <th class="mdl-data-table__cell">Quantidade</th>
                    </tr>
                </thead>
                <?php
                    echo "<tbody>";
                    $repetidas = $user->getColecao()->getRepetidas();
                    for ($i = 0; $i < 682; $i++){
                        if($repetidas[$i] != 0){
                            echo "<tr>";
                            echo "<td> <a href='figurinha.php?id=".$user->getColecao()->getAlbum()->getFigurinhas()[$i]."'> $i </a> </td>";
                            echo "<td> $i</td>";
                            echo "<td> $repetidas[$i] </td>";
                            echo "</tr>";
                        }
                    }
                    echo "</tbody>";
                ?>
            </table>
        </div>
    </body>
</html>