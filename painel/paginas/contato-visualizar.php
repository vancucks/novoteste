
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhes do produto - Página Contato do Painel Administrativo</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contato-Vizualizar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>

    <!DOCTYPE HTML>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Faça você mesmo</title>

            <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" href="assets/css/stilo.css" />
            <!-- icomoon -->
            <link rel="stylesheet" href="plugins/icomoon/icomoon.css" />
        </head>
        <body>
            <div class="container mt-5">
                <h1 class="text-center pb-2">Faça você mesmo</h1>
                <div class="form w-75 h-50 mx-auto ">
                    <div class="row justify-content-center">
                        <div class="col-5">

                            <div class="form-group">
                                <span class="reg-user"></span>  
                                <label for="exampleFormControlInput1">Nome e Sobrenome:</label>
                                <br />
                                <?php
                                foreach ($dados as $dado) {
                                    echo $dado['nome'] . '<br>';
                                }
                                ?>

                            </div>
                            <div class="-group">
                                <span class="vic-whatsapp"></span>  
                                <label for="exampleFormControlInput1">Localidade:</label>
                                <br />
                                <?php
                                foreach ($dados as $dado) {
                                    echo $dado['email'] . '<br>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-5">

                            <div class="form-group">
                                <span class="vic-cake"></span>
                                <label for="exampleFormControlSelect1">Usuário:</label>
                                <br />
                                <?php
                                foreach ($dados as $dado) {
                                    echo $dado['nome'] . '<br>';
                                }
                                ?>
                            </div>
                            <div class="form-group ">
                                <span class="vic-news-paper"></span>
                                <label for="exampleFormControlInput1">Curso/instituição:</label>
                                <span class="manu-document"></span>
                                <br />
                                <?php
                                foreach ($dados as $dado) {
                                    echo $dado['nome'] . '<br>';
                                }
                                ?>
                            </div> 

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 ml-5">
                            <div class="form-group text">
                                <label for="exampleFormControlTextarea1">Exemplo de textarea:</label>
                                <br />
                                <?php
                                foreach ($dados as $dado) {
                                    echo $dado['msg'] . '<br>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col mt-4">
                            <img class="img-fluid"src="https://placehold.it/300x500" alt=""/>
                        </div>
                    </div>
                </div>


            </div>
        </body>
    </html>
