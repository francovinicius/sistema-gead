<div class="div-center">
    <h3 class="mt-5 ms-1 mb-5">Meus Tickets</h3>

    <div class="card border shadow-sm ps-5 rounded mt-2 me-2 mb-1" style="width: 1200px;">



        <h3 class="mt-5 mb-5">Solicitar Suporte</h3>

        <form action="?page=salvarTicket" method="POST">
            <input type="hidden" name="acao" value="enviarTicket">

            <div class="ms-5 d-flex flex-wrap gap-5" style="width: 1000px;">

                <div class="" style="width: 300px;">
                    <label>Setor Responsável:</label><br>
                    <select name="responsavel" required class="form-select">
                        <option value="Selecione um grupo">Selecione uma opção</option>
                        <option value="DP e RH">DP e RH</option>
                        <option value="Financeiro">Financeiro</option>
                        <option value="Patrimonio">Patrimônio</option>
                        <option value="TI">TI</option>
                    </select>
                </div>

                <div class="" style="width: 300px;">
                    <label>Nivel de prioridade:</label><br>
                    <select name="prioridade" required class="form-select">
                        <option value="Selecione um grupo">Selecione uma opção</option>
                        <option value="Leve">Leve</option>
                        <option value="Intermediária">Intermediária</option>
                        <option value="Alta">Alta</option>
                    </select>
                </div>

                <div class="" style="width: 300px;">
                    <label>Data</label><br>
                    <input class="form-control" type="date">
                </div>

                <div class="" style="width: 300px;">
                    <label>Status</label><br>
                    <select name="prioridade" required class="form-select">
                        <option value="Selecione um grupo">Em andamento</option>
                    </select>
                </div>


                <div class="" style="width: 650px;">
                    <label for="" class="form-label">Descreva a Solicitação</label>
                    <textarea class="form-control" name="descricao" id="" rows="3"></textarea>
                </div>

            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button type="submit" class="btn btn-dark mt-5 mb-5">Enviar Ticket</button>
            </div>

        </form>
    </div>

    <div class="card border shadow-sm p-5 rounded mt-2 me-2 mb-5" style="width: 1200px;">

        <h3 class="mt-2 mb-2">Suas Pendências</h3>

        <table class="table table-hover table-striped table-border mt-5" style="width: 900px;">
            <thead>
                <tr>
                    <th>Nº Ticket</th>
                    <th>Data</th>
                    <th>Prioridade</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php

                $responsavel = $_SESSION['tipo'];

                //conexao com o banco
                define("HOSTT", "localhost");
                define("USERT", "root");
                define("PASST", "");
                define("DBT", "sarton_servicos_adm");

                $connTickets = new mysqli(HOSTT, USERT, PASST, DBT);

                $sqlTickets = "SELECT * FROM tickets_abertos WHERE responsavel = ?";
                $stmtTickets = $connTickets->prepare($sqlTickets);
                $stmtTickets->bind_param("s", $responsavel);
                $stmtTickets->execute();
                $res = $stmtTickets->get_result();
                $quantidade = $res->num_rows;

                while ($row = $res->fetch_object()) {
                    print "<tr>";
                    print "<td>{$row->idTicket}</td>";
                    print "<td>{$row->data}</td>";
                    print "<td>{$row->prioridade}</td>";
                    print "<td>{$row->status}</td>";
                    print "<td class='acoes'>
                        <button onclick=\"
                        location.href='?page=editar&id=" . $row->idTicket . "'\" 
                        class='btn btn-dark'>Detalhes</button>
                        <button onclick=\"
                        if(confirm('Tem certeza que dejesa excluir este usuário?')){
                            location.href='?page=salvar&acao=excluirPatrimonio&id=" . $row->idTicket . "';
                        }else{
                            false;
                        }\"
                        class='btn btn-success'>Alterar Satus</button>
                        </td>";
                    print "<tr>";
                }
                ?>
            </tbody>
        </table>

    </div>



</div>

<script>
    // Definir a data atual no campo de data
    document.getElementById('data').value = new Date().toISOString().split('T')[0];
</script>