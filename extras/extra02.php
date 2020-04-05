<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            // Atribuição
            $preco = $_GET["p"];
            // echo "O preço do produto é R$ $preco";
            echo "O preço do produto é R$ " . number_format($preco, 2);
            
            $preco = $preco + ($preco*10/100);
            // $preco = $preco + ($preco*10/100); // 10% de aumento
            /********* OU *******************/
            // $preco += ($preco*10/100); aumento
            // $preco -= ($preco*10/100); desconto
            echo "<br> E o novo preço com 10% de aumento será R$ " . number_format($preco, 2);


        ?>  
    </div>

</body>
</html>