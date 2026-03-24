<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk</title>
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 
    <style>
        .card-login{
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;
        }
    </style>
 
</head>
<body>
 
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Help Desk
        </a>
    </nav>
 
    <div class="container">
        <div class="row">
            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="valida_login.php" method="post">
 
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="E-mail">
                            </div>
 
                            <div class="form-group">
                                <input type="password" name="senha" class="form-control" placeholder="Senha">
                            </div>
                            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') {?>
                            <div class="text-danger">
 
                            Usuário ou senha inválido(s) </div>
                            <?php } ?>
 
 
                            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') {?>
                            <div class="text-danger">
 
                            Faça login antes de acessar as paginas protegidas </div>
                            <?php } ?>
 
 
 
 
 
                            <button type="submit" class="btn btn-lg btn-info btn-block">Entrar</button>
                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
   
   
</body>
</html>