<div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="mb-3">
            <label class="form-label" for="nomeDoProduto">Nome do produto</label>
            <input class="form-control" id="nomeDoProduto" type="text" placeholder="Nome do produto" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nomeDoProduto:required">Nome do produto is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="fornecedor">Fornecedor</label>
            <input class="form-control" id="fornecedor" type="email" placeholder="Fornecedor" data-sb-validations="email,required" />
            <div class="invalid-feedback" data-sb-feedback="fornecedor:required">Informe o Fornecedor do produto</div>
            <div class="invalid-feedback" data-sb-feedback="fornecedor:email">Fornecedor Email is not valid.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="valor"> Valor</label>
            <input class="form-control" id="valor" type="text" placeholder=" Valor" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="valor:required">Informe o Valor do produto.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="quantidade">Quantidade </label>
            <select class="form-select" id="quantidade" aria-label="Quantidade ">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="provedorDoProduto">Provedor do Produto</label>
            <select class="form-select" id="provedorDoProduto" aria-label="Provedor do Produto">
                <option value="Carlos">Carlos</option>
                <option value="Roberto">Roberto</option>
                <option value="Marcos">Marcos</option>
                <option value="Vinicius">Vinicius</option>
            </select>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Produto Cadastrado</div>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Confirmar</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>