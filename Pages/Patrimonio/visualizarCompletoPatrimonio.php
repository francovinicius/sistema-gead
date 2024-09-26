<div class="d-flex flex-column div-center">


    <h3 class="mt-5 mb-5">Detalhes do Produto</h3>

    <?php

    define("HOSTADM", "localhost");
    define("USERADM", "root");
    define("PASSADM", "");
    define("DBADM", "sarton_servicos_adm");

    $connAdm = new mysqli(HOSTADM, USERADM, PASSADM, DBADM);

    $sql = "SELECT * FROM patrimonio_sarton WHERE id=" . $_REQUEST["id"];

    $res = $connAdm->query($sql);

    if ($res->num_rows > 0) {
        // Obtém a linha do resultado
        $row = $res->fetch_assoc();

    ?>

        <div class="card border shadow-sm p-5 rounded mt-2 me-2 mb-5">
            <div class="d-flex align-items-end gap-5 ">
                <div class="me-5">
                    <img style="width: 200px;" class="border shadow-sm bg-body rounded mt-2 me-2 mb-2 " src="https://media.istockphoto.com/id/1337144146/pt/vetorial/default-avatar-profile-icon-vector.jpg?s=1024x1024&w=is&k=20&c=QCo1Ofk9vCIkFWEA4umPvgQZMmrjRtFAGjKDgoWS7TQ=" alt="">
                    <p><strong><?php echo htmlspecialchars($row['produto']); ?></strong></p>
                </div>

                <div>
                    <div style="width: 300px;">
                        <label><strong>Modelo</strong></label>
                        <p><?php echo htmlspecialchars($row['modelo']); ?></p>
                    </div>
                    <div style="width: 300px;">
                        <label><strong>Patrimônio</strong></label>
                        <p><?php echo htmlspecialchars($row['numero_patrimonio_antigo']); ?></p>
                    </div>
                    <div style="width: 300px;">
                        <label><strong>Empresa</strong></label>
                        <p><?php echo htmlspecialchars($row['empresa']); ?></p>
                    </div>
                </div>

                <div>
                    <div style="width: 300px;">
                        <label><strong>Local</strong></label>
                        <p><?php echo htmlspecialchars($row['local']); ?></p>
                    </div>
                    <div style="width: 300px;">
                        <label><strong>Condição do bem</strong></label>
                        <p><?php echo htmlspecialchars($row['condicao']); ?></p>
                    </div>
                    <div style="width: 300px;">
                        <label><strong>Nota Fiscal</strong></label><br>
                        <button onclick="window.open('<?php echo htmlspecialchars($row['nota_fiscal']); ?>', '_blank')" class="btn btn-sm btn-dark ms-4 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <hr class="mt-5">
            <h5 class="mb-5 ms-5">Mais informações</h5>


            <div class="ms-5 mt-2 d-flex justify-content-center flex-wrap gap-5" style="width: 1200px;">

                <div style="width: 300px;">
                    <label><strong>Identificador</strong></label>
                    <p><?php echo htmlspecialchars($row['identificador']); ?></p>
                </div>

                <div style="width: 300px;">
                    <label><strong>Aquisição</strong></label>
                    <p><?php echo htmlspecialchars($row['aquisicao']); ?></p>
                </div>
                <div style="width: 300px;">
                    <label><strong>Valor</strong></label>
                    <p><?php echo htmlspecialchars($row['valor']); ?></p>
                </div>


                <div style="width: 300px;">
                    <label><strong>Tempo de vida</strong></label>
                    <p><?php echo htmlspecialchars($row['prazo_de_vida']); ?></p>
                </div>
                <div style="width: 300px;">
                    <label><strong>Depreciação</strong></label>
                    <p><?php echo htmlspecialchars($row['depreciacao_taxa']); ?></p>
                </div>
                <div style="width: 300px;">
                    <label><strong>Observações</strong></label>
                    <p><?php echo htmlspecialchars($row['observacao']); ?></p>
                </div>




            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
                <button class="btn btn-dark"><a class="nav-left" href="?page=listar">Voltar</button>
            </div>
        <?php
    } else {
        echo "Erro ao encontrar a resposta, por favor tente novamente mais tarde";
    }
        ?>