<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    


    <div>


        <?php
        // Operadores Relacionais
        /*
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 <br>";
        $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
        echo "O resultado será $r";
    
        echo "<br><br><br>";
        */
        $a = 3;
        $b = "3";
        $comp1 = $a == $b ? "são iguais ==" : "não são iguais ==";
        $comp2 = $a === $b ? "são iguais e com o mesmo tipo" : "podem ser iguais porém são de tipos diferentes";
        echo "As variáveis em comparação de iguadade, $comp1 <br>";
        echo "As variáveis em comparação de identidade, $comp2";
        
        echo "<br><br><br>";
        // Calculo de média do aluno, mostrando se ele foi aprovado ou reprovado
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) / 2;
        echo "A média entra a nota $nota1 e $nota2 do aluno é $m<br>";
        $sit = ($m > 6) ? "APROVADO!" : "REPROVADO";
        echo "O aluno, portanto, esta $sit";


        ?>


    </div>






</body>
</html>