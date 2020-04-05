<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>

    <link rel="stylesheet" href="_css/estilo.css">

</head>
<body>
    

    <div>


        <?php

        // Operadores lógicos
        // quais   || or (ou) - && and (e) - xor (xou)


        // Programa que diz se a pessoa é obrigada a votar ou não
        $ano = $_GET["an"];
        $idade = 2014 - $ano;
        echo "Quem nasceu em $ano, tem idade de $idade<br>";
        $tipo = ($idade >= 18 && $idade < 65) ? "É OBRIGATÓRIO" : "NÃO É OBRIGATÓRIO";
        echo "E dessa forma, seu voto $tipo";


        ?>



    </div>




</body>
</html>