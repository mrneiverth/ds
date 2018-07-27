<html lang="pt-br">
    <head>
        <title>Tinderinhas - Meu Album</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css"/> 
        <link rel="stylesheet" href="style.css">
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

        <?php 
            ini_set('display_errors', 'On');

            session_start();
            VerificadorSessao::verificarSessao();

            $user = $_SESSION['ususario_ativo'];
        ?>

        <style>
            .collapsible {
              background-color: #eee;
              color: #444;
              cursor: pointer;
              padding: 18px;
              width: 100%;
              border: none;
              text-align: left;
              outline: none;
              font-size: 15px;
            }

            /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
            .active, .collapsible:hover {
              background-color: #ccc;
            }

            /* Style the collapsible content. Note: hidden by default */
            .mdl-grid {
              display: none;
            }

        </style>

        <script type="text/javascript">
           function toggle_visibility(id) {
               var e = document.getElementById(id);
               if(e.style.display == 'block')
                  e.style.display = 'none';
               else
                  e.style.display = 'block';
           }
        </script>

    </head>
    
    <body>

        <?php 

            $sections = array(
                "Especiais" => 8,
                "Estádios" => 12,
                "Posteres" => 12,
                "Russia" => 20,
                "Arábia Saudita" => 20,
                "Egito" => 20,
                "Uruguai" => 20,
                "Portugal" => 20,
                "Espanha" => 20,
                "Marrocos" => 20,
                "Irã" => 20,
                "França" => 20,
                "Austrália" => 20,
                "Peru" => 20,
                "Dinamarca" => 20,
                "Argentina" => 20,
                "Islândia" => 20,
                "Croácia" => 20,
                "Nigéria" => 20,
                "Brasil" => 20,
                "Suiça" => 20,
                "Costa Rica" => 20,
                "Sérvia" => 20,
                "Alemanha" => 20,
                "México" => 20,
                "Suécia" => 20,
                "Coréia do Sul" => 20,
                "Bélgica" => 20,
                "Panamá" => 20,
                "Tunísia" => 20,
                "Inglaterra" => 20,
                "Polônia" => 20,
                "Senegal" => 20,
                "Colômbia" => 20,
                "Japão" => 20,
                "Legends" => 10
            ); 

            $j = 0;
            foreach ($sections as $section => $quantity) {
                echo "<div>
                        <button class=\"collapsible\" onclick=\"toggle_visibility('section_".$section."')\">".$section."</button>
                        <div class=\"mdl-grid\" id=\"section_".$section."\">";
                         
                for ($i=0; $i < $quantity; $i++) {
                    $path_to_image = $user->temFigurinha ? "firmino" : "canarinho";
                    echo "<div class=\"mdl-cell mdl-cell--2-col\"> 
                            <img src=\"http://54.94.241.129/".$path_to_image."/".$path_to_image.$j.".png\" href='figurinha.php?id=".$j."'> </div>"; 
                    $j = $j + 1;
                }
                
                echo "</div> </div>";

            }

        ?>

    </body>
</html>

