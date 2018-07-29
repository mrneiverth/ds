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

            require_once('db.class.php');
            $objDb = new db();
            $link = $objDb->conecta_mysql();
            $sql = "SELECT * FROM figurinha";

            $result = mysqli_query($link, $sql);
            #echo mysqli_fetch_row($result);
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
            #echo $result[0]['Nome'];
        ?>
        <div id="masterdiv" >
                <?php
                    echo "<tbody>";
                    $repetidas = $user->getColecao()->getRepetidas();

                    //if(count($repetidas) > 0){
                    $k = 0;
                    for ($i = 0; $i < 682; $i++){
                      if($repetidas[$i] != 0){
                        $k = -1;
                      }
                    }

                    if($k == -1){

                      echo "<table class='mdl-data-table mdl-js-data-table'>
                          <thead>
                              <tr>
                              <th class='mdl-data-table__cell'>Número</th>
                              <th class='mdl-data-table__cell'>Nome da Figurinha</th>
                              <th class='mdl-data-table__cell'>Quantidade</th>
                              </tr>
                          </thead>";

                      for ($i = 0; $i < 682; $i++){
                        if($repetidas[$i] != 0){
                          #echo "<h4> $i " . "Redirect: " . $user->getColecao()->getAlbum()->getFigurinhas()[$i] . "</h4>";
                          echo "<tr>";
                          echo "<td> <a href='figurinha.php?id=$i".$user->getColecao()->getAlbum()->getFigurinhas()[$i]."'>" .$i. "</a></td>";
                          echo "<td> <a href='figurinha.php?id=$i".$user->getColecao()->getAlbum()->getFigurinhas()[$i]."'>" . $result[$i]['Nome']. "</a></td>";
                          echo "</a>";
                          echo "<td> $repetidas[$i] </td>";
                          echo "</tr>";

                        }
                      }
                      echo "</tbody>";
                    }else{
                          echo "
                            <div class='demo-card-wide mdl-card mdl-shadow--2dp'>
                              <div class='mdl-card__title'>
                                <h2 class='mdl-card__title-text'>Lista de repetidas</h2>
                              </div>
                              <div class='mdl-card__supporting-text'>
                                Você ainda não tem repetidas :O
                              </div>
                              <div class='mdl-card__actions mdl-card--border'>
                                <a class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect' href='meualbum.php''>
                                  Adicionar Figurinhas
                                </a>
                              </div>
                            </div>";
                        }
                ?>
            </table>
        </div>
    </body>
</html>


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

.demo-card-wide.mdl-card {
  width: 512px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 176px;
  background: url('https://getmdl.io/assets/demos/welcome_card.jpg') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}

body {
  padding: 20px;
  background: #fafafa;
  position: relative;
}
</style>
