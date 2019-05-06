<?php 
	include_once 'template/autoload.php';

	$estadoCivilDAO = new EstadoCivilDAO(); 
	$estadoCivil = new EstadoCivil();

	if (isset($_GET['idEstadoCivil']) and $_GET['acao'] == 'Deletar') {
		
		$estadoCivilDAO->deletarEstadoCivil($_GET['idEstadoCivil']);
		
	}else{
		$estadoCivil->setIdEstadoCivil($_POST['idEstadoCivil']);
		$estadoCivil->setDescricaoEstadoCivil($_POST['descricaoEstadoCivil']);

		$acao = $_GET['acao'];

		if ($acao == 'Cadastrar') {
			$estadoCivilDAO->insereEstadoCivil($estadoCivil); 
		}
		else if($acao == 'Editar'){
			$estadoCivilDAO->alterarEstadoCivil($estadoCivil);
		}
	}
	$msg = "Executado com sucesso!";
	$class = "success";

	header("Location: estadoCivil.php?msg=$msg&class=$class");
 ?>