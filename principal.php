<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINCIPAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .janela{
            border: 1px solid #000000;
            border-radius: 3%;
            background-color:gainsboro;
            margin: 25%;
        }
    </style>
</head>
<body>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8 col-xs-6 col-sm-6 col-md-4 col-lg-4 janela">
                <?php
                $usuario_cookie = $_COOKIE["usuario"] ?? "ERRO";
                if($usuario_cookie != "ERRO"){
                    echo("Bem vindo " . $usuario_cookie);
                }
                else{
                    echo("Bem vindo Convidado");
                    
                }
                ?>
            </div>
        </div>
    </div>
</body>
        

</body>
</html>

