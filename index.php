<?php
include('./verificador.php');
include('./bloqueador.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captção de sintomas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body class="">

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand font-weight-bold" href="#">Paciente</a>
        <a class="text-decoration-none text-white" href="./logout.php">Sair</a>
    </nav>
    <div class="container geral d-flex justify-content-center flex-wrap align-items-center text-center h-100">
        <div class="col-12">
            <form action="" class="p-0 m-auto" method="post">
                <div class="form-row p-0">
                    <div class="form-group col-md-6 offset-3 my-4">
                        <button class="btn btn-info" id="start" type="button">Gravar</button>
                    </div>
                    <div class="form-group col-md-6 offset-3 my-4 ">
                        
                        <input type="text" class="form-control border border-dark" id="sintomas" name="sintomas" placeholder="Exemplo: Dor de Cabeça, Febre, Dor de Estomago...">
                        <input type="text" class="form-control border border-dark d-none" id="log" name="log" placeholder="Exemplo: Dor de Cabeça, Febre, Dor de Estomago...">
                    </div>
                    <div class="col-md-6 offset-3 my-4"><button type="submit" class="btn btn-primary">Próximo</button></div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>
</html>