<div class="div-center" style="width: 65vw;">
            <h3 class="mt-5">Dashboard</h3>
            <div class="card border shadow-sm p-3 bg-body rounded mt-5">
                <div class="card-body">
                    <h5 class="card-title">Olá <?php echo htmlspecialchars($_SESSION['nome']); ?>, seja bem-vindo ao GEAD!</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Esse é seu painel personalizado</h6>
                </div>
            </div>

            <div class="d-flex">

                <div class="card border shadow-sm p-3 bg-body rounded mt-2" style="width: 40rem;">
                    <div class="card-body">
                        <h5 class="card-title">Acesso Rápido</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Links rápidos para atividades cotidianas</h6>
                    </div>
                </div>


                <div class="card border shadow-sm p-3 bg-body rounded mt-2 ms-2">
                    <div class="card-body">
                        <h5 class="card-title">Solicitações Totais</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Num. Total</h6>
                    </div>
                </div>

                <div class="card border shadow-sm p-3 bg-body rounded mt-2 ms-2" style="width: 14rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Seu Perfil</h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?php echo htmlspecialchars($_SESSION['tipo']); ?></h6>
                    </div>
                </div>

            </div>

            <div class="card border shadow-sm p-3 bg-body rounded mt-2 mb-2">
                <div class="card-body">
                    <h5 class="card-title mb-5">Tarefas em Andamento</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Num. Solicitação</th>
                                <th>Setor</th>
                                <th>Solicitante</th>
                                <th>Data</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TI</td>
                                <td>João</td>
                                <td>01/01/2021</td>
                                <td>Em andamento</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Financeiro</td>
                                <td>Maria</td>
                                <td>02/01/2021</td>
                                <td>Concluído</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>DP</td>
                                <td>Carlos</td>
                                <td>03/01/2021</td>
                                <td>Em andamento</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Patrimônio</td>
                                <td>Julia</td>
                                <td>04/01/2021</td>
                                <td>Concluído</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>TI</td>
                                <td>João</td>
                                <td>05/01/2021</td>
                                <td>Em andamento</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Financeiro</td>
                                <td>Maria</td>
                                <td>06/01/2021</td>
                                <td>Concluído</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>DP</td>
                                <td>Carlos</td>
                                <td>07/01/2021</td>
                                <td>Em andamento</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Patrimônio</td>
                                <td>Julia</td>
                                <td>08/01/2021</td>
                                <td>Concluído</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column div-right align-items-center" style="min-width: 300px;">

            <div class="card m-2 shadow-sm p-3 bg-body rounded" style="width: 22rem; height: 100vh;">
                <div class="card-body">
                    <?php
                    // Obter o mês e o ano atuais
                    $mes_escrito = date('M');
                    $ano_escrito = date('y');
                    $mes = date('m');
                    $ano = date('Y');

                    ?>

                    <h5 class="card-title text-center mt-2"><?php echo htmlspecialchars($mes_escrito) ?>/<?php echo htmlspecialchars($ano_escrito) ?></h5>
                    <?php

                    // Obter o número de dias no mês atual
                    $dias_no_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

                    // Obter o primeiro dia da semana do mês atual
                    $primeiro_dia_mes = date('w', mktime(0, 0, 0, $mes, 1, $ano));

                    // Dias da semana
                    $dias_semana = ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'];

                    // Início da tabela do calendário
                    echo '<table class="table mt-4">';
                    echo '<tr>';

                    // Cabeçalho com os dias da semana
                    foreach ($dias_semana as $dia_semana) {
                        echo '<th class="table-danger">' . $dia_semana . '</th>';
                    }

                    echo '</tr><tr>';

                    // Preencher os dias antes do início do mês
                    for ($i = 0; $i < $primeiro_dia_mes; $i++) {
                        echo '<td></td>';
                    }

                    // Preencher os dias do mês
                    for ($dia = 1; $dia <= $dias_no_mes; $dia++) {
                        if (($dia + $primeiro_dia_mes - 1) % 7 == 0 && $dia != 1) {
                            echo '</tr><tr>';
                        }
                        echo '<td>' . $dia . '</td>';
                    }

                    // Preencher os dias após o final do mês
                    while (($dia + $primeiro_dia_mes - 1) % 7 != 0) {
                        echo '<td></td>';
                        $dia++;
                    }

                    echo '</tr>';
                    echo '</table>';
                    ?>

                    <hr class="mt-5">
                    <h5 class="mt-5">Quadro de avisos</h5>


                </div>
            </div>






        </div>