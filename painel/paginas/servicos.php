<?php
$resultDados = new Conecxao();
$dados = $resultDados->selecionaDados('SELECT * FROM servicos');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Serviços <small> - Página Serviços</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Serviços</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                               
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="tabela-produtos" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Produto</th>
                                                <th>Tipo</th>
                                                <th>Valor (R$)</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            foreach ($dados as $dado) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $dado['id']; ?> </td>
                                                    <td><?php echo $dado['nome']; ?></td>
                                                    <td><?php echo $dado['tipo']; ?></td>
                                                    <td><?php echo $dado['valor']; ?></td>
                                                    <td>
                                                        <a href="?pg=servicos-visualizar&id=<?php echo $dado['id']; ?>" class="btn btn-outline-success"><span class="fa fa-eye"></span></a>
                                                        <a href="?pg=servicos-editar&id=<?php echo $dado['id']; ?>" class="btn btn-outline-warning"><span class="fa fa-edit"></span></a>
                                                        <a href="?pg=servicos-excluir&id=<?php echo $dado['id']; ?>" class="btn btn-outline-danger"><span class="fa fa-trash"></span></a>
                                                    </td>
                                                </tr>


                                                <?php
                                            }
                                            ?>



                                        </tbody>                                   
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
