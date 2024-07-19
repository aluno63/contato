<?php

    /*comentario */

    if(isset ($_GET["bt_nome"])){
        $nome = $_GET["bt_nome"];
        $Email = $_GET["bt_email"];
        $mensagem = $_GET["bt_mensagem"];
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link real="stylsheet" href="meu_estilo.css">
</head>
<body>
    <div class="container text-center">
        <h1> Contato</h1>
    </div>
    <div class="container">
        <form action="" method="get">
            <label for="">Nome:</label>
            <input class="form-control" type="text" name="bt_nome">
            <label for="">E-mail:</label>
            <input class="form-control" type="text" name="bt_email">
            <label for="">mensagem:</label>
            <input class="form-control" type="text" name="bt_mensagem">

            <input class="btn btn-success" type="submit">
            <input class="btn btn-warning" type="reset">
        </form>

        <?php
        if(isset ($nome)){
            
           
            if($nome){

                echo "<hr>";
                echo "<p>";
                echo "nome" . $nome;
                echo "<p>";
                echo "<hr>";
                echo "<p>";
                echo "email" . $Email;
                echo "<p>";
                echo "<hr>";
                echo "<p>";
                echo "mensagem" . $mensagem;
                echo "<p>";
                echo "<hr>";
            }
            
         }
         
        ?>
        
        
    </div>
</body>
</html>