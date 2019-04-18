<?php 
	include_once 'template/autoload.php';

	$turma = new Turma(); 
	$turmaDAO = new TurmaDAO(); 

	if (isset($_GET['id']) and $_GET['acao'] == 'Deletar') {
		
		$turmaDAO->deletar($_GET['id']);
		
	}else{
		$turma->setId($_POST['id']);
		$turma->setDescricao($_POST['descricao']);

		$acao = $_GET['acao'];

		if ($acao == 'Cadastrar') {
			$turmaDAO->insereTurma($turma); 
		}
		else if($acao == 'Editar'){
			$turmaDAO->alterarTurma($turma);
		}
	}
	$msg = "Executado com sucesso!";
	$class = "success";

	header("Location: turma.php?msg=$msg&class=$class");
 ?>