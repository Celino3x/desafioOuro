<?php
        include('header_.php');
        include('_conexao.php');

        $id = $_POST['id'];
        $nome_fantasia = $_POST['nome_fantasia'];
        $razao_social = $_POST['razao_social'];
        $cnpj_empresa = $_POST['cnpj_empresa'];
        $end_empresa = $_POST['end_empresa'];

        $query = "UPDATE `cad_empresa` SET `nome_fantasia`='$nome_fantasia', `razao_social`='$razao_social',`cnpj_empresa`='$cnpj_empresa',`end_empresa`='$end_empresa' WHERE id = $id";

        $atualizar = mysqli_query($conexao, $query);
?>
    <div class="container">
        <h3>Atualizado</h3>
        <a href="consulta.php" class="btn btn-sm btn-warning"><i class="fas fa-arrow-left"></i> Voltar</a>
    </div>
<?php
 include('footer_.php');
?>