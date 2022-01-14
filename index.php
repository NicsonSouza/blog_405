<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Banana Blog</title>
</head>

<body>
    <header>
        <div class="conteudo">
            <img src="https://place-hold.it/1028x280" alt="">
            <div class="titulo"><h1>Banana Blog</h1></div>
            <div class="subtitulo"><h4>Expressando palavras ideias e pensamentos, sobre a vida, o universo e tudo mais…</h4></div>
            <div class="media-social">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </header>
        
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cad_usuario.php">Cadastro</a>
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
    

    <section class="container d-flex flex-wrap">
    <?php $i = 0; while ($i <= 14){$i++ ?>
                <div class="card m-3" style="width: 20rem;">
                    <img src="https://place-hold.it/300x160" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <a class="btn btn-primary" type="button" href="post.php">continuar lendo</a>
                    </ul>
                </div>
            <?php }; ?>
        </section>
    <footer>

<div class="contato" style="margin:32px; display: flex; justify-content: space-around;">
    <h3>Contato</h3>
    <a href="#">Topo da página</a>
</div>


    </footer>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>