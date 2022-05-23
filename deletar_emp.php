<?php
        include('header_.php');
        include('_conexao.php');

        $id = $_GET['id'];

        $query = "DELETE FROM `cad_empresa` WHERE id = $id";
        $deletar = mysqli_query($conexao,$query);
?>

<div class="container">
        <h3>Empresa Deletada</h3>
        <a href="consulta.php" class="btn btn-sm btn-warning"><i class="fas fa-arrow-left"></i> Voltar</a>
</div>

<?php
        include('footer_.php');
?>