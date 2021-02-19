<!-- Main content -->
<section class="content">
    <div class="form-group">
        <label for="nome">Nome do usuario:</label>
        <br />
        <?php
        foreach ($dados as $dado) {
            echo $dado['nome'] . '<br>';
        }
        ?>
    </div>
    <div class="form-group">
        <label for="nome">Nome do usuario:</label>
        <br />
        <?php
        foreach ($dados as $dado) {
            echo $dado['email'] . '<br>';
        }
        ?>
    </div>
    <div class="form-group">
        <label for="nome">Nome do usuario:</label>
        <br />
        <?php
        foreach ($dados as $dado) {
            echo $dado['msg'] . '<br>';
        }
        ?>
    </div>
</section>
<!-- /.content -->