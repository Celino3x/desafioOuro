<section class="container">
    <h2>Cadastro de Empresa</h2>
    <div class="mb-3">
        <label class="form-label">Nome Fantasia</label>
        <input type="text" class="form-control" id="NomeFantasia" placeholder="EduC Tech">
    </div>
    <div class="mb-3">
        <label class="form-label">Razão Social</label>
        <input type="text" class="form-control" id="RazaoSocial" placeholder="Educa Tecnologia">
    </div>
    <div class="mb-3">
        <label class="form-label">CNPJ</label>
        <input type="text" name="cnpj" id="cnpj" onkeyup="FormataCnpj(this,event)" maxlength="18"  class="form-control input-md" ng-model="cadastro.cnpj" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Endereço</label>
        <input type="text" class="form-control" id="Endereco" placeholder="Av. Sampaio 123">
    </div>
    <button class="btn btn-send"><a href="#">EXEMPLO</a></button>
</section>