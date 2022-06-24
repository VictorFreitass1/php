<?php
if(isset($_GET['nome'])){
    $txtnome = $_GET['nome'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro PHP</title>
    <link rel="stylesheet" href="css/style.css"
    <link rel="stylesheet" href="css/reset.css"
</head>
<body>
    <?php
    $nome = 'José';
    $idade = 19;
    $nome = 25;
    echo ($nome);
    ?>
    <a href="https://www.sp.senac.br/itaquera">?php echo($nome).'Pao'; ?></a>
    <form action="#" method="get">
        <input type="text" name="nome">
        <button type="submit" name="btn"></button>
        <p>
            <?php
            if(isset($txtnome)){
                echo($txtnome);
            }
            ?>
        </p>
    </form>
</body>
</html>