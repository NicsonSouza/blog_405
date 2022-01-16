<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Post</title>
</head>
<body>

    <header>
        <div class="conteudo">
            <img src="https://place-hold.it/1028x280" alt="">
            <div class="subtitulo"><h3>subtitulo</h3></div>
            <div class="media-social">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </header>
        
    <!-- navbar para navegação e pesquisa -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
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
                        <li class="nav-item">
                            <a class="nav-link" href="cad_usuario.php">Cadastrar</a>
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

    <!-- descrição de produto -->
    <main class="mx-auto col-7" style="border: solid 1px;">
        <div class="m-5 title">
            <h1>titulo</h1>
        </div>
        <div class="">
            <img class="img-fluid" src="https://place-hold.it/685x400" style="width: 100%;" alt="">
        </div>
        <div class="mt-5 mb-5 text-center conteudo">
        <textarea class="img-fluid" name="variavel" id="" cols="90" rows="10"></textarea>
        </div>
    </main>

    <!-- rodapé com formulario de comentario -->
    <footer class="mx-auto col-7">
    <h2 style="margin-top: 32px;">Deixe um comentário</h2><br>
    <textarea class="img-fluid" name="" id="" cols="104" rows="3"></textarea>

    <div class="contato" style="margin:32px; display: flex; justify-content: space-around;">
    <a href="">Contato</a>
    <a href="#">Topo da página</a>
    <a href="index.php">Pagina inicial</a>
</div>
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>