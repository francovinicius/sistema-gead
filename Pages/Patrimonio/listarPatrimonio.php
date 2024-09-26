<div class="d-flex flex-column div-center">
    <h3 class="mt-5">Produtos Cadastrados</h3>

    <form action="export.php" method="post">
        <br>
        <button class="btn btn-dark" type="submit">Exportar Tabela para Excel</button>
        <br><br>
    </form>

    <table class="table table-hover table-dark table-striped table-border mt-5" style="width: 1280px;">
        <thead>
            <tr>
                <th>Detalhe</th>
                <th>Patrimônio</th>
                <th>Produto</th>
                <th>Local</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php
            //conexao com o banco

            define("HOSTADM", "localhost");
            define("USERADM", "root");
            define("PASSADM", "");
            define("DBADM", "sarton_servicos_adm");

            $connAdm = new mysqli(HOSTADM, USERADM, PASSADM, DBADM);


            $sql = "SELECT * FROM patrimonio_sarton";
            $res = $connAdm->query($sql);

            $quantidade = $res->num_rows;

            while ($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>
            <button onclick=\"
             location.href='?page=visualizar&id=" . $row->id . "'\" 
             class='btn btn-dark'>
                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z'/>
                <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0'/>
                </svg>
             </button>
            </td>";
                print "<td>{$row->numero_patrimonio_antigo}</td>";
                print "<td>{$row->produto}</td>";
                print "<td>{$row->local}</td>";
                print "<td class='acoes'>
            <button onclick=\"
             location.href='?page=editar&id=" . $row->id . "'\" 
             class='btn btn-success'>Ver/Editar</button>
             <button onclick=\"
            if(confirm('Tem certeza que dejesa excluir este usuário?')){
                location.href='?page=salvar&acao=excluirPatrimonio&id=" . $row->id . "';
            }else{
                false;
            }\"
            class='btn btn-danger'>Excluir</button>
            </td>";
                print "<tr>";
            }


            ?>
        </tbody>
    </table>

</div>