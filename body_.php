<section class="container">
    <h2><img class="logo" src="./img/logob.png" alt="Ouro Moderno logo"> Cadastro de Empresa</h2>
    <div class="form">
        <form action="check.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Nome Fantasia</label>
                    <input type="text" name="nome_fantasia" class="form-control" id="NomeFantasia" placeholder="EduC Tech">
                </div>
                <div class="mb-3">
                    <label class="form-label">Razão Social</label>
                    <input type="text" name="razao_social" class="form-control" id="RazaoSocial" placeholder="Educa Tecnologia">
                </div>
                <div class="mb-3">
                    <label class="form-label">CNPJ</label>
                    <input type="text" name="cnpj_empresa" id="cnpj" onkeyup="FormataCnpj(this,event)" maxlength="18"  class="form-control input-md" ng-model="cadastro.cnpj" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Endereço</label>
                    <input type="text" name="end_empresa" class="form-control" id="Endereco" placeholder="Av. Sampaio 123">
                </div>
                <div class="sendForm">
                    <button type="submit" id="enviar" class="btn btn-dark">Enviar</button>
                    <a href="consulta.php" class="btn btn-secondary">Consultar</a>
                </div>
        </form>
    </div>
</section>