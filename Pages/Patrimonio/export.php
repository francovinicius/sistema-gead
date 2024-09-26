<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sarton_servicos_adm";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta para buscar os dados da tabela
$sql = "SELECT produto, modelo, identificador, empresa, aquisicao, valor, local, condicao, prazo_de_vida, depreciacao_taxa, observacao, numero_patrimonio_antigo, novo_patrimonio, nota_fiscal FROM patrimonio_sarton";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Definir o tipo de conteúdo como excel
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="patrimonio_sarton.xls"');

    // Primeira linha com os nomes das colunas
    $fields = $result->fetch_fields();
    foreach ($fields as $field) {
        echo $field->name . "\t";
    }
    echo "\n";

    // Dados das linhas
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $value) {
            echo $value . "\t";
        }
        echo "\n";
    }
} else {
    echo "Nenhum dado encontrado";
}

$conn->close();
?>