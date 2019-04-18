<?php
include_once 'template/autoload.php';
$secretaria = new Secretaria(); 
$secretariaDAO = new SecretariaDAO(); 

if (isset($_GET['idSecretaria']) and $_GET['acao'] == 'Deletar') {
		
		$secretariaDAO->deletar($_GET['idSecretaria']);
	}else{
		$secretaria->setIdSecretaria($_POST['idSecretaria']);
		$secretaria->setNomeSecretaria($_POST['nomeSecretaria']);
		$secretaria->setCpfSecretaria($_POST['cpfSecretaria']); 
		$secretaria->setEmailSecretaria($_POST['emailSecretaria']);
		$secretaria->setsenhaSecretaria($_POST['senhaSecretaria']);
		$secretaria->setcargoSecretaria($_POST['cargoSecretaria']);

		$acao = $_GET['acao'];

		if ($acao == 'Cadastrar') {
			$secretariaDAO->inseresecretaria($secretaria);
		}
		else if($acao == 'Editar'){
			$secretariaDAO->alterarsecretaria($secretaria);
		}
	}
	$msg = "Executado com sucesso!";
	$class = "success";
	header("Location: secretaria.php?msg=$msg&class=$class");
?> 