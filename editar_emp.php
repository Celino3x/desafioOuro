<?php
        include('header_.php');
        include('_conexao.php');

        $id = $_GET['id'];
?>

<div class="container">
    <form action="_update_emp.php" method="post">
        <?php
            $query = "SELECT * FROM `cad_empresa` WHERE id = $id";
            $buscar = mysqli_query($conexao,$query);
            while ($array = mysqli_fetch_array($buscar)){
                    $id = $array['id'];
                    $nome_fatasia = $array['nome_fantasia'];
                    $razao_social = $array['razao_social'];
                    $cnpj_empresa = $array['cnpj_empresa'];
                    $end_empresa = $array['end_empresa'];
                /*}*/
        ?>

                <div class="mb-3">
                    <label class="form-label">Nome Fantasia</label>
                    <input type="text" name="nome_fantasia" class="form-control" id="NomeFantasia" value="<?php echo $nome_fatasia?>">
                    <input type="number" class="form-control ediID" name="id" display="none" value="<?php echo $id ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Razão Social</label>
                    <input type="text" name="razao_social" class="form-control" id="RazaoSocial" value="<?php echo $razao_social?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">CNPJ</label>
                    <input type="text" name="cnpj_empresa" id="cnpj" onkeyup="FormataCnpj(this,event)" maxlength="18"  class="form-control input-md" ng-model="cadastro.cnpj" value="<?php echo $cnpj_empresa?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Endereço</label>
                    <input type="text" name="end_empresa" class="form-control" id="Endereco" value="<?php echo $end_empresa?>">
                </div>
                <div class="sendForm">
                    <button type="submit" class="btn btn-dark">Atualizar</button>
                    <a href="consulta.php" class="btn btn-secondary">Consultar</a>
                </div>
                <?php } ?>
    </form>
</div>

<?php
    include('footer_.php');
?>