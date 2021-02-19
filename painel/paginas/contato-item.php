 <!DOCTYPE HTML>
<html lang="pt-br">
    <head>
</html>
        <meta charset="UTF-8">
        <title>Faça você mesmo</title>
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/stilo.css" />
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-center pb-2">Faça você mesmo</h1>
            <div class="form w-75 h-50 mx-auto ">
                <div class="row justify-content-center">
                    <div class="col-6">

                        <div class="form-group">
                            <span class="vic-user"></span>  
                            <label for="exampleFormControlInput1">Nome e Sobrenome</label>                           
                            <input type="email" name="nome" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <span class="vic-whatsapp"></span>  
                            <label for="exampleFormControlInput1">Localidade</label>
                            <input type="email" name="local" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <span class="vic-cake"></span>
                            <label for="exampleFormControlSelect1">...</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Aluno</option>
                                <option>Ex-aluno</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <span class="vic-news-paper"></span>
                            <label for="exampleFormControlInput1">Curso/instituição</label>
                            <span class="manu-document"></span>
                            <input type="email" name="curso" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div> 

                    </div>
                </div>
            </div>
        </div>
    </body>











     <?php
                                foreach ($dados as $dado) {
                                    ?>

                                    <tr>
                                        <td><?php echo $dado['id']; ?> </td>
                                        <td><?php echo $dado['nome']; ?></td>
                                        <td><?php echo $dado['curso']; ?></td>
                                        <td><?php echo $dado['local']; ?></td>
                                        <td><?php echo $dado['usuario']; ?></td>
                                        <td><?php echo $dado['artigo']; ?></td>
                                        <td><?php echo $dado['video']; ?></td>
                                       
                                    </tr>


                                    <?php
                                }
                                ?>