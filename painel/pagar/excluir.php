<?php 
$tabela = 'pagar';
require_once("../../conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];


$query = $pdo->query("SELECT * FROM $tabela where id = '$id' and pago = 'Sim'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	echo 'Você não pode excluir uma conta já Paga!';
	exit();
}

$query = $pdo->query("SELECT * FROM $tabela where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
$foto = $res[0]['arquivo'];
if($foto != "sem-foto.png"){
	@unlink('../images/contas/'.$foto);
}

$pdo->query("DELETE FROM $tabela where id = '$id'");

echo 'Excluído com Sucesso';

//inserir log
$acao = 'exclusão';
$descricao = $nome;
$id_reg = $id;
require_once("../inserir-logs.php");

?>