<?php
    include('_conexao.php');

    $nome_fantasia = $_POST['nome_fantasia'];
    $razao_social = $_POST['razao_social'];
    $cnpj_empresa = $_POST['cnpj_empresa'];
    $end_empresa = $_POST['end_empresa'];
    
    $sql = "INSERT INTO `cad_empresa`(`nome_fantasia`, `razao_social`, `cnpj_empresa`, `end_empresa`) VALUES ('$nome_fantasia','$razao_social','$cnpj_empresa','$end_empresa')";
    
    $inserir = mysqli_query($conexao, $sql);
?>

<?php
    include('header_.php');
?>
    <div class="container">
        <h3>Cadastrado</h3>
        <a href="index.php" class="btn btn-sm btn-warning">Voltar</a>
    </div>
<?php
    include('footer_.php');
?>