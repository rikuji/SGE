<?php
include_once 'template/autoload.php';
$professor = new Professor(); 
$professorDAO = new ProfessorDAO(); 

if (isset($_GET['idProfessor']) and $_GET['acao'] == 'Deletar') {
		
		$professorDAO->deletarProfessor($_GET['idProfessor']);

	}else{
		
		$professor->setNomeProfessor($_POST['nomeProfessor']);
		$professor->setCpfProfessor($_POST['cpfProfessor']); 
		$professor->setSexoProfessor($_POST['sexoProfessor']);
		$professor->setEmailProfessor($_POST['emailProfessor']);
		$professor->setMatutino($_POST['matutino']);
		$professor->setVespertino($_POST['vespertino']);
		$professor->setNoturno($_POST['noturno']);
		$professor->setRegistroProfessor($_POST['registroProfessor']);
		$professor->setSenhaProfessor($_POST['senhaProfessor']);
		$professor->setIdTipoUsuario($_POST['idTipoUsuario']);

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