<div class="d-flex flex-column div-center">


    <h3 class="mt-5 mb-5">Editar</h3>

    <?php


    define("HOSTADM", "localhost");
    define("USERADM", "root");
    define("PASSADM", "");
    define("DBADM", "sarton_servicos_adm");

    $connAdm = new mysqli(HOSTADM, USERADM, PASSADM, DBADM);



    $sql = "SELECT * FROM patrimonio_sarton WHERE id=" . $_REQUEST["id"];
    $res = $connAdm->query($sql);
    $row = $res->fetch_object();
    ?>

    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editarPatrimonio">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">

        <div class="ms-5 d-flex flex-wrap gap-5" style="width: 1200px;">

            <div style="width: 300px;">
                <label>Produto *</label>
                <input type="text" class="form-control" name="produto" value="<?php print $row->produto; ?>" required>
            </div>

            <div style="width: 300px;">
                <label>Modelo *</label>
                <input type="text" class="form-control" name="modelo" value="<?php print $row->modelo; ?>" required>
            </div>

            <div style="width: 300px;">
                <label>Identificador *</label>
                <input type="text" class="form-control" name="identificador" value="<?php print $row->identificador; ?>" required>
            </div>

            <div style="width: 300px;">
                <label>Empresa *</label><br>
                <select name="empresa" required class="form-select">
                    <option value="Selecione um grupo">Selecione uma opção</option>
                    <option value="AJR PUXADAS">AJR PUXADAS</option>
                    <option value="SDA Puxadas">SDA Puxadas</option>
                    <option value="Sarton Baixada">Sarton Baixada</option>
                    <option value="Sarton Courrier">Sarton Courrier</option>
                </select>
            </div>

            <div style="width: 300px;">
                <label>Data de aquisição *</label>
                <input type="text" class="form-control" name="aquisicao" value="<?php print $row->aquisicao; ?>" required>
            </div>

            <div style="width: 300px;">
                <label>Valor do produto *</label>
                <input type="text" class="form-control" name="valor" value="<?php print $row->valor; ?>" required>
            </div>

            <div style="width: 300px;">
                <label>Local onde o produto se encontra *</label>
                <input type="text" class="form-control" name="local" value="<?php print $row->local; ?>" required>
            </div>

            <div style="width: 300px;">
                <label>Condição do produto *</label><br>
                <select name="condicao" required class="form-select">
                    <option value="Selecione um grupo">Selecione uma opção</option>
                    <option value="Em funcionamento">Em funcionamento</option>
                    <option value="Produto baixado">Produto baixado</option>
                    <option value="Produto vendido">Produto vendido</option>
                </select>
            </div>

            <div style="width: 300px;">
                <label>Prazo de Substituição *</label>
                <input type="text" class="form-control" name="prazo_de_vida" value="<?php print $row->prazo_de_vida; ?>" required>
            </div>

            <div style="width: 300px;">
                <label>Taxa de Depreciação *</label>
                <input type="text" class="form-control" name="depreciacao_taxa" value="<?php print $row->depreciacao_taxa; ?>" required>
            </div>

            <div style="width: 300px;">
                <label>Observação</label>
                <input type="text" class="form-control" name="observacao" value="<?php print $row->observacao; ?>">
            </div>

            <div style="width: 300px;">
                <label>Número de patrimônio antigo *</label>
                <input type="text" class="form-control" name="numero_patrimonio_antigo" value="<?php print $row->numero_patrimonio_antigo; ?>" required>
            </div>

            <div style="width: 300px;">
                <label>Número de patrimônio atual *</label>
                <input type="text" class="form-control" name="novo_patrimonio" value="<?php print $row->novo_patrimonio; ?>" required>
            </div>

            <div style="width: 300px;">
                <label>Cópia da nota fiscal *</label>
                <input type="text" class="form-control" name="nota_fiscal" value="<?php print $row->nota_fiscal; ?>" required>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
            <button type="submit" class="btn btn-dark">Atualizar Informações</button>
            <button class="btn btn-dark"><a class="nav-left" href="?page=listar">Voltar</button>
        </div>
    </form>

</div>