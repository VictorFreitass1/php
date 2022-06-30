<?php 
  $a = $_GET['a'];
  $b = $_GET['b'];
  $c = $_GET['c'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Equação de 2º Grau</h2>
        <form action="exercicio2.php" method="get">
            <label for="txtCapital">Coeficiente A
                <input type="text" name="a" id="a" required>
            </label>
            <br/>
            <label for="txtTaxa">Coeficiente B 
                <input type="text" name="b" id="b">
            </label>
            <br/>
            <label for="txtPrazo">Coeficiente C
                <input type="text" name="c" id="c">
            </label>
            <br>
            <button type="submit" name="btnCalcular">Calcular</button>
        </form>
        <div class="resultado">
            <h3>Resultado do Cálculo da Equação:</h3>
        </div>
    </div>
</body>
</html>