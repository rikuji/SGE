<?php 
	include_once 'template/autoload.php';

	$disciplina = new Disciplina(); 
	$disciplinaDAO = new DisciplinaDAO(); 

	if (isset($_GET['idDisciplina']) and $_GET['acao'] == 'Deletar') {
		
		$disciplinaDAO->deletar($_GET['id']);
		
	}else{
		$disciplina->setIdDisciplina($_POST['id']);
		$disciplina->setDescricaoDisciplina($_POST['descricaoDisciplina']);

		$acao = $_GET['acao'];

		if ($acao == 'Cadastrar') {
			$disciplinaDAO->insereDisciplina($disciplina); 
		}
		else if($acao == 'Editar'){
			$disciplinaDAO->alterarDisciplina($disciplina);
		}
	}
	$msg = "Executado com sucesso!";
	$class = "success";

	header("Location: disciplina.php?msg=$msg&class=$class");
 ?>