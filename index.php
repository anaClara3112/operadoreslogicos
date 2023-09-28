<!DOCTYPE html>
<html lang="en" dir="Itr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições 2023</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1> Seja bem vindo!<h1>
        <form method="post" action='<?php $_SERVER['PHP_SELF'] ?>'>
        <label for="idade">Qual sua idade?</label>
        <input type="number" name="value"> 
        <br><br>
        <input type="submit" value="Enter">
        </form>


<?php 

    if(isset($_POST['value'])){
        $idade = $_POST['value'];
    
        if ($idade < 16) {
            echo "<p>" . $idade . "Não pode votar!</p>";
        } else if (($idade >= 16) && ($idade < 18)) {
            echo "<p>" . $idade . "Voto facultativo!</p>";
        } else if (($idade > 18) && ($idade < 65)) {
            echo "<p>" . $idade . "O voto é obrigatório!</p>";
        } else if ($idade > 65) {
            echo "<p>" . $idade . "Voto facultativo!</p>";
        }

    }

?>

</body>
</html>
