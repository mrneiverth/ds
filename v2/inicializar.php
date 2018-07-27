<html lang="pt-br">
    <head>
        <title>Tinderinhas - Inicializar Coleção</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css"/> 
		<link rel="stylesheet" href="style.css">
		<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<style> 
         .graybox {
            align-items: center;
         }
        </style>

        <script type="text/javascript"> 
            function finalizar() {
                var jsonArray = {};
                for (var i = 0; i <= 681; ++i) {
                    var atual = document.getElementById("value_fig_" + i);
                    jsonArray[i] = parseInt(atual.textContent);
                }

                $.ajax({
                    url: "ds/v2/updatecolecaonova/",
                    type: "POST",
                    data: "campo1=dado1&campo2=dado2&campo3=dado3",
                    dataType: "html"
                });

                window.location = "updatecolecaonova.php";
            }
        </script>

    <body>
   
   	<main class="mdl-layout__content">    
        <div id="dvFigs" class = "mdl-grid">

        </div>
	</main>

   	<div> 
   		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="finalizar()">
          	Finalizar
        </button>
   	</div>

    <script type="text/javascript">

    	var mainDiv = document.getElementById("dvFigs");
    	for (var i = 0; i <= 681; ++i) {
    		var div = document.createElement('div');
    		div.className = "mdl-cell mdl-cell--2-col graybox";
    		var image = document.createElement('img');
            image.id = "image_fig_" + i;
    		image.src = "http://54.94.241.129/canarinho/canarinho" + i +".png";
    		
            var div2 = document.createElement('div');

    		var value = document.createElement('span');
    		value.id = "value_fig_" + i;
    		value.style = "margin: 10px;";
    		value.textContent = 0;

    		var minus = document.createElement('button')
    		minus.id = "minus_fig_" + i;
    		minus.className = "mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect";
    		minus.addEventListener('click', function() {
                var number = this.id.split("_")[2];
                var value = document.getElementById("value_fig_" + number);
                value.textContent = Math.max(parseInt(value.textContent) - 1, 0);

                if (parseInt(value.textContent) == 0) {
                    var image = document.getElementById("image_fig_" + number);
                    image.src = "http://54.94.241.129/canarinho/canarinho" + number +".png";
                }
    		  }
            );
    		
    		var minusSymbol= document.createElement('i');
    		minusSymbol.className = "material-icons";
    		minusSymbol.appendChild(document.createTextNode('remove'));
    		
			var plus = document.createElement('button')
    		plus.id = "plus_fig_" + i;
    		plus.className = "mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect";
    		plus.addEventListener('click', function() {
                var number = this.id.split("_")[2];
                var value = document.getElementById("value_fig_" + number);
                value.textContent = parseInt(value.textContent) + 1;

                if (parseInt(value.textContent) > 0) {
                    var image = document.getElementById("image_fig_" + number);
                    image.src = "http://54.94.241.129/firmino/firmino" + number +".png";
                }
              }
            );
    		var plusSymbol = document.createElement('i');
    		plusSymbol.className = "material-icons";
    		plusSymbol.appendChild(document.createTextNode('add'));

    		minus.appendChild(minusSymbol);
    		plus.appendChild(plusSymbol);
    		div.appendChild(image);
    		div2.appendChild(minus);
    		div2.appendChild(value);
    		div2.appendChild(plus);
            div.appendChild(div2);
    		mainDiv.appendChild(div);
    	}
    
    </script>

    </body>

</html>