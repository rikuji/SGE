<?php 
	include_once 'template/autoload.php';

	$secretariaDao = new SecretariaDao(); 
	$secretaria = new Secretaria();

	if (isset($_GET['idSecretaria']) and $_GET['acao'] == 'Deletar') {
		
		$secretariaDao->deletarUsuarioSecretaria($_GET['idSecretaria']);
		
	}else{
		$secretaria->setNomeSecretaria($_POST['nomeSecretaria']);
		$secretaria->setCpfSecretaria($_POST['cpfSecretaria']);
		$secretaria->setSenhaSecretaria($_POST['senhaSecretaria']);
		$secretaria->setEmailSecretaria($_POST['emailSecretaria']);
		$secretaria->setCargoSecretaria($_POST['cargoSecretaria']);
		$secretaria->setIdTipoUsuario($_POST['idTipoUsuario']);

		$acao = $_GET['acao'];

		if ($acao == 'Cadastrar') {
			$secretariaDao->insereUsuarioSecretaria($secretaria); 
		}
		else if($acao == 'Editar'){
			$turmaDAO->alterarTurma($turma);
		}
	}
	$msg = "Executado com sucesso!";
	$class = "success";

	header("Location: secretaria.php?msg=$msg&class=$class");
 ?>