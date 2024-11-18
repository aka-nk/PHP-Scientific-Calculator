<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="ex1.php" method="post">
        <input type="text" name="valor">
        <input type="submit" value="Enviar">
    </form>
    

    <?php
     


    if (isset($_POST["valor"])) {
        echo "O valor é: " . $_POST["valor"];
    }
    
    $valor = $_POST["valor"];
    $valor = strtolower($valor);
    $valor = str_replace(' ', '', $valor);
    $valor = str_replace(',', '', $valor);
    $valor = preg_replace("/[^a-zA-Z0-9,\"\s]/", '', $valor);
    $ePalindromo = ($valor == strrev($valor));



    if ($ePalindromo) {
        echo "'$valor' e palíndromo!";
    } else {
        echo "'$valor' nao e palíndromo.";
    }
    ?>
    



