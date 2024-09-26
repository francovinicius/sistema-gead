<?php

define("HOSTT", "localhost");
define("USERT", "root");
define("PASST", "");
define("DBT", "sarton_servicos_adm");

$connTickets = new mysqli(HOSTT, USERT, PASST, DBT);

switch ($_REQUEST["acao"]) {
    case 'enviarTicket':
        $responsavel = $_POST["responsavel"];
        $prioridade = $_POST["prioridade"];
        $descricao = $_POST["descricao"];
        $status = $_POST["status"];

        $sql = "INSERT INTO tickets_abertos (
            responsavel, prioridade, descricao, status
        ) VALUES (
            '{$responsavel}', '{$prioridade}', '{$descricao}', '{$status}')";

        $res = $connTickets->query($sql);

        if ($res === true) {
            echo "<script>alert('Ticket enviado com sucesso!');</script>";
            echo "<script>location.href='?page=meusTickets';</script>";
        } else {
            echo "<script>alert('Não foi possível enviar! Tente novamente');</script>";
            echo "<script>location.href='?page=meusTickets';</script>";
        }

    break;
    case 'editarPatrimonio':

        $produto = $_POST["produto"];
        $modelo = $_POST["modelo"];
        $identificador = $_POST["identificador"];
        $empresa = $_POST["empresa"];
        $aquisicao = $_POST["aquisicao"];
        $valor = $_POST["valor"];
        $local = $_POST["local"];
        $condicao = $_POST["condicao"];
        $prazo_de_vida = $_POST["prazo_de_vida"];
        $depreciacao_taxa = $_POST["depreciacao_taxa"];
        $observacao = $_POST["observacao"];
        $numero_patrimonio_antigo = $_POST["numero_patrimonio_antigo"];
        $novo_patrimonio = $_POST["novo_patrimonio"];
        $nota_fiscal = $_POST["nota_fiscal"];

        $sql = "UPDATE patrimonio_sarton SET
            produto='{$produto}',
            modelo='{$modelo}', 
            identificador='{$identificador}', 
            empresa='{$empresa}', 
            aquisicao='{$aquisicao}', 
            valor='{$valor}', 
            local='{$local}', 
            condicao='{$condicao}', 
            prazo_de_vida='{$prazo_de_vida}', 
            depreciacao_taxa='{$depreciacao_taxa}', 
            observacao='{$observacao}', 
            numero_patrimonio_antigo='{$numero_patrimonio_antigo}', 
            novo_patrimonio='{$novo_patrimonio}', 
            nota_fiscal='{$nota_fiscal}'
    
            WHERE id=" . $_REQUEST["id"];

        $res = $connAdm->query($sql);

        if ($res == true) {
            print "<script>alert('Produto Editado com Sucesso!')</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Não foi possível editar o produto!')</script>";
            print "<script>location.href='?page=cadastro'</script>";
        }

        break;


    case 'excluirPatrimonio':
        $sql = "DELETE FROM patrimonio_sarton WHERE id=" . $_REQUEST["id"];
        $res = $connAdm->query($sql);

        if ($res == true) {
            print "<script>alert('Produto excluido com sucesso!')</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Não foi possível excluir o produto!')</script>";
            print "<script>location.href='?page=cadastro'</script>";
        }

        break;
}
