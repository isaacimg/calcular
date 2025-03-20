<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<style>
    body{
        font-family: arial, sans-serif;
        text-align: center;
        margin-top: 50px;
    }

    form {
        background:rgb(51, 116, 201);
        padding: 20px;
        display: inline-block;
        border-radius: 5px;
    }
    .resultado{
        margin-top: 20px;
        font-weight: bold;
    }
</style>

<body>
    <form method="post">
        <label for="num">Digite um número</label>
        <input type="number" name="num" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (!empty($_POST["num"])) {
       $num = $_POST["num"];
       echo "<p class='resultado'>o valor anterior de $num é " . ($num - 1) . " e o posterior é " . ($num + 1) . ".</p>";
           }
           ?>
</body>
</html>