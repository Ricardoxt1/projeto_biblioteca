<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Editoras</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="../../../bootstrap-5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../bootstrap-5.2.3/dist/css/pages.css">

</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Biblioteca Pedbot</a>
        <button class="navbar-toggler position-center d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../../menu/menu">Voltar ao menu</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                                <span>Cadastro</span>
                            </h6>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/register/registerCostumer">
                                <span data-feather="registerCostumer" class="align-text-bottom">Usuarios</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/register/registerAuthor">
                                <span data-feather="registerAuthor" class="align-text-bottom">Autores</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/register/registerBook">
                                <span data-feather="registerBook" class="align-text-bottom">Livros</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/register/registerEmployee">
                                <span data-feather="registerEmployee" class="align-text-bottom">Funcionário(a)</span>
                            </a>
                        </li>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                            <span>Opções</span>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="../../pages/register/registerRental">
                                    <span name="rentals" class="align-text-bottom">Alugar livro</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../list/listCostumers">
                                    <span data-feather="list" class="align-text-bottom">Listagem</span>
                                </a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </nav>

            <main class="col-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                    <body class="bg-body-tertiary">

                        <div class="container">
                            <main>
                                <div class="py-5 ml-2">
                                    <h2>Cadastro de Editoras</h2>
                                    <div>
                                        <?php
                                        if (isset($_SESSION['msg'])) {
                                            echo $_SESSION['msg'];
                                            unset($_SESSION['msg']);
                                        }
                                        ?>
                                    </div>
                                    <div class="row g-5 pt-5">
                                        <div class="col-md-7 col-lg-10">
                                            <h5 class="mb-3">Informações revelantes sobre a editora</h5>
                                        </div>
                                    </div>
                                    <form class="needs-validation" action="../../../controllerDB/register/registerPublisher" method="post" novalidate="">
                                        <div class="row g-3">
                                            <div class="col-sm-7">
                                                <label for="name_publisher" class="form-label">Nome da editora</label>
                                                <input type="text" class="form-control" name="name" id="name_publisher" placeholder="Editora São Miguel" value="" required="">
                                                <div class="invalid-feedback">
                                                    É necessario digitar o nome da editora.
                                                </div>
                                                <hr class="my-4">

                                                <button class="w-20 btn btn-primary btn-ls" type="submit">Enviar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <footer class="text-muted text-center py-5">
                                    <div class="container">
                                        <p class="mb-1">© 2023 Biblioteca Pedbot</p>
                                    </div>
                                </footer>
                            </main>
                        </div>

                    </body>

                </div>
            </main>
        </div>
    </div>
    <script src="../../../bootstrap-5.2.3/dist/css/bootstrap.css"></script>
    <script src="../../../bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>


</body>

</html>