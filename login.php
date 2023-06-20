<?php
include('verificador.php');



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand font-weight-bold" href="#">Sistema de Gestão</a>
    </nav>
    <div class="container d-flex justify-content-center align-items-center h-100">
        

        <div class="col-12">
            <?php
                if($_SESSION['userSenha']){
                    ?>
                    <div class="alert alert-danger" role="alert">Senha ou usuário incorreto. Tente novamente</div>
                    <?php
                }
            ?>
            <h3 class="text-center font-weight-bold">Autenticação de Usuário</h3>


            <form action="testeLogin.php" class="p-0 m-auto" method="post">
                    <div class="form-group col-md-6 offset-3 my-4 font-weight-bold">
                        <label for="login">Login</label>
                        <input type="text" class="form-control border border-dark" id="login" name="login" placeholder="Insira seu e-mail aqui">
                    </div>
                    <div class="form-group col-md-6 offset-3 my-4 font-weight-bold">
                        <label for="senha">Senha</label>
                        <input type="password" required class="form-control border border-dark" id="senha" name="senha"  placeholder="Insira sua senha aqui">
                    </div>
                    <div class="col-md-6 offset-3 my-4"><button type="submit" class="btn btn-success col-md-3 mr-2">Entrar</button><button type="button" id="cadastrar" class="btn btn-primary col-md-3"><a href="./cadastrar.html"  class="h-100 w-100 text-white text-decoration-none">Cadastrar</a></button></div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    
</body>
</html>