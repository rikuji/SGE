<?php
include_once 'template/autoload.php';
$professor = new Professor(); 
$professorDAO = new ProfessorDAO(); 

if (isset($_GET['id']) and $_GET['acao'] == 'Deletar') {
		
		$professorDAO->deletar($_GET['id']);
	}else{
		$professor->setId($_POST['id']);
		$professor->setNome($_POST['nome']);
		$professor->setCpf($_POST['cpf']); 
		$professor->setSexo($_POST['sexo']);
		$professor->setEmail($_POST['email']);
		$professor->setDisciplina($_POST['disciplina']);
		$professor->setPeriodo($_POST['periodo']);
		$professor->setRegistro($_POST['registro']);
		$professor->setSenhaProfessor($_POST['senhaProfessor']);

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
	header("Location: professor.php?msg=$msg&class=$class");
?> 