<div class="d-flex flex-column div-center">

    <h3 class="mt-5 mb-5">Cadastro de Bens</h3>

    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrarPatrimonio">

        <div class="ms-5 d-flex flex-wrap gap-5" style="width: 1200px;">

            <div class="" style="width: 300px;">
                <label>Produto *</label>
                <input type="text" class="form-control" name="produto" required>
            </div>

            <div class="" style="width: 300px;">
                <label>Modelo *</label>
                <input type="text" class="form-control" name="modelo" required>
            </div>

            <div class="" style="width: 300px;">
                <label>Identificador *</label>
                <input type="text" class="form-control" name="identificador" required>
            </div>

            <div class="" style="width: 300px;">
                <label>Empresa *</label><br>
                <select name="empresa" required class="form-select">
                    <option value="Selecione um grupo">Selecione uma opção</option>
                    <option value="AJR PUXADAS">AJR PUXADAS</option>
                    <option value="SDA Puxadas">SDA Puxadas</option>
                    <option value="Sarton Baixada">Sarton Baixada</option>
                    <option value="Sarton Courrier">Sarton Courrier</option>
                </select>
            </div>

            <div class="" style="width: 300px;">
                <label>Data de aquisição *</label>
                <input type="date" class="form-control" name="aquisicao" required>
            </div>

            <div class="" style="width: 300px;">
                <label>Valor do produto *</label>
                <input type="text" class="form-control" name="valor" required>
            </div>

            <div class="" style="width: 300px;">
                <label>Local onde o produto se encontra *</label>
                <input type="text" class="form-control" name="local" required>
            </div>

            <div class=" ">
                <label>Condição do produto *</label><br>
                <select name="condicao" required class="form-select">
                    <option value="Selecione um grupo">Selecione uma opção</option>
                    <option value="Em funcionamento">Em funcionamento</option>
                    <option value="Produto baixado">Produto baixado</option>
                    <option value="Produto vendido">Produto vendido</option>
                </select>
            </div>

            <div class="" style="width: 300px;">
                <label>Prazo de Substituição *</label>
                <input type="text" class="form-control" name="prazo_de_vida" required>
            </div>

            <div class="" style="width: 300px;">
                <label>Taxa de Depreciação *</label>
                <input type="text" class="form-control" name="depreciacao_taxa" required>
            </div>

            <div class="" style="width: 300px;">
                <label>Observação</label>
                <input type="text" class="form-control" name="observacao">
            </div>

            <div class="" style="width: 300px;">
                <label>Número de patrimônio antigo *</label>
                <input type="text" class="form-control" name="numero_patrimonio_antigo" required>
            </div>

            <div class="" style="width: 300px;">
                <label>Número de patrimônio atual *</label>
                <input type="text" class="form-control" name="novo_patrimonio" required>
            </div>

            <div class="" style="width: 300px;">
                <label>Cópia da nota fiscal *</label>
                <input type="text" class="form-control" name="nota_fiscal" required>
            </div>

        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-dark mt-5 mb-5">Cadastrar Item</button>
        </div>


    </form>

</div>