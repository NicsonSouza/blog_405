<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastrar usuário</title>
</head>

<body>

    <!-- navbar para controle de navegação e pesquisa -->
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
                        <input class="form-control me-2" type="search" placeholder="Pesquisar produto" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Pesquisa</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <!-- formulario de cadastro -->
    <form action="cad_insert_bd.php" method="POST">
        <div class="p-3 mx-auto mt-5" style="max-width: 400px;">
            <h1 class="text-center">Cadastrar usuário</h1>
            <label class="form-label">Nome: </label>
            <input class="form-control" type="text" placeholder="Nome Completo" name="nome">
            <label class="form-label">Avatar: </label>
            <input class="form-control" type="text" placeholder="Usuario123" name="avatar">
            <label class="form-label">Email: </label>
            <input class="form-control" type="email" placeholder="Email" name="email">
            <label class="form-label">Senha: </label>
            <input class="form-control" type="password" placeholder="Senha" name="senha">
            <div class="text-center">
                <button class="btn btn-primary mt-3" type="submit">Cadastrar</button>
            </div>
        </div>
    </form>

    <!-- rodapé -->
    <footer>
        <div class="contato" style="margin:32px; display: flex; justify-content: space-around;">
            <a href="">Contato</a>
        </div>
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>