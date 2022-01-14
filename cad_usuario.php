<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastrar usuário</title>
</head>
<body>
    
<section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Pesquisa</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <form action="cad_insert_bd.php" method="POST">
        <div class="mx-auto mt-5 col-5">
            <h1 class="text-center">Cadastrar de usuário</h1>
            <label class="form-label">Nome: </label>
            <input class="form-control" type="text" placeholder="Nome Completo" name="nome">
            <label class="form-label">Avatar: </label>
            <input class="form-control" type="text" placeholder="Exemplo Usuario123" name="avatar">
            <label class="form-label">Email: </label>
            <input class="form-control" type="email" placeholder="digite seu email" name="email">
            <label class="form-label">Senha: </label>
            <input class="form-control" type="password" placeholder="insira a senha" name="senha">
            <div class="text-center">
            <button class="btn btn-primary mt-3" type="submit">Cadastrar</button>
            </div>    
        </div>
    </form>

</body>
</html>