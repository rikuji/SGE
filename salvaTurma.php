<?php 
	include_once 'template/autoload.php';

	$turma = new Turma();  
	$turmaDAO = new TurmaDAO(); 

	if (isset($_GET['idTurma']) and $_GET['acao'] == 'Deletar') {
		
		$turmaDAO->deletar($_GET['idTurma']);
		
	}else{
		$turma->setIdTurma($_POST['idTurma']);
		$turma->setDescricaoTurma($_POST['descricaoTurma']);
		$turma->setPeriodoTurma($_POST['periodoTurma']);

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