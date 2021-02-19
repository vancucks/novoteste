<div class="container">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">      
        <div class="content-header">
            
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-dark">
                                <div class="card-header">
                                    <h3 class="card-title"><span class="vini-user-plus"></span> Nova conta</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="?pg=contato-site" method="POST">


                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nome">Nome do usuario</label>
                                            <input type="text" name="nome" value="" class="form-control" autofocus="" id="nome" placeholder="nome">
                                        </div>
                                        <div class="form-group">
                                            <label for="tipo">Email</label>
                                            <input type="email" name="email" value="" class="form-control" id="email" placeholder="nome@exemplo.com">
                                        </div>
                                        <div class="form-group">
                                            <label  for="valor"> Mensagem</label>
                                            <textarea type="text"<textarea name="msg" value="" class="form-control" id="msg"></textarea>
                                        </div>
                                        <input type="hidden" value="" name="id">
                                    </div>


                                    <!-- /.card-body -->
                                    <div class="card-footer">                                   
                                        <button type="submit" class="btn btn-dark">Atualizar</button>
                                    </div>

                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">

                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
