<?php
    include('header_.php');
    include('_conexao.php');

    $sql = "SELECT * FROM `cad_empresa`";
    $buscar = mysqli_query($conexao,$sql);
?>

<div class="container">
    <h3 class="h3empresa">Empresas Cadastradas</h3>
    <table class="table table-striped table-houver">
        <thead>
            <tr>
                <th>Nome Fantasia</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Endereço</th>
            </tr>
        </thead>

        <?php
                while ($array = mysqli_fetch_array($buscar)){
                    $id = $array['id'];
                    $nome_fatasia = $array['nome_fantasia'];
                    $razao_social = $array['razao_social'];
                    $cnpj_empresa = $array['cnpj_empresa'];
                    $end_empresa = $array['end_empresa'];
                /*}*/
        ?>

        <tr>
            <td><?php echo $nome_fatasia ?></td>
            <td><?php echo $razao_social ?></td>
            <td><?php echo $cnpj_empresa ?></td>
            <td><?php echo $end_empresa ?></td>

            <td>
                    <a class="btn btn-warning btn-sm" href="editar_emp.php?id=<?php echo $id ?>" role="button"><i class="far fa-edit"></i>Editar</a>
                    <a class="btn btn-danger btn-sm" href="deletar_emp.php?id=<?php echo $id ?>" role="button"><i class="far fa-trash-alt"></i>Excluir</a>
            </td>
        </tr>
        <?php } ?>

    </table>   
</div>

<div class="container">
    <a href="index.php" class="btn btn-secondary btn-sm">Cadastrar Nova Empresa</a>
</div>

<?php
    include('footer_.php');
?>

