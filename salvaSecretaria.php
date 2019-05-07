<?php
include_once 'template/autoload.php';
$secretaria = new Secretaria(); 
$secretariaDAO = new SecretariaDAO(); 


if (isset($_GET['idSecretaria']) and $_GET['acao'] == 'Deletar') {
		
		$secretariaDAO->deletarSecretaria($_GET['idSecretaria']);
	}else{
		$secretaria->setIdSecretaria($_POST['idSecretaria']);
		$secretaria->setNomeSecretaria($_POST['nomeSecretaria']);
		$secretaria->setCpfSecretaria($_POST['cpfSecretaria']);  
		$secretaria->setSenhaSecretaria($_POST['senhaSecretaria']);
		$secretaria->setEmailSecretaria($_POST['emailSecretaria']);
		$secretaria->setCargoSecretaria($_POST['cargoSecretaria']);

		$acao = $_GET['acao'];

		if ($acao == 'Cadastrar') {
			$secretariaDAO->insereSecretaria($secretaria);
		}
		else if($acao == 'Editar'){
			$secretariaDAO->alteraSecretaria($secretaria);
		}
	}
	$msg = "Executado com sucesso!";
	$class = "success";
	header("Location: secretaria.php?msg=$msg&class=$class");
?> 