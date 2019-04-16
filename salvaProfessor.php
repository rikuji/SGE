<?php
include_once 'template/autoload.php';

$professor = new Professor();
$professorDAO = new ProfessorDAO();

if (isset($_GET['professor']) and $_GET['acao'] == 'Deletar') {
		
		$professorDAO->deletar($_GET['professor']);
	}else{
		$professor->setIdProfessor($_POST['professor']);
		$professor->setIdProfessor($_POST['professor']);

		$acao = $_GET['acao'];

		if ($acao == 'Cadastrar') {
			$professorDAO->insereProfessor($professor);
		}
		else if($acao == 'Editar'){
			$professorDAO->alterarProfessor($professor);
		}
	}
	$msg = "Executado com sucesso!";
	$class = "success";
?>