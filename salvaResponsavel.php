<?php
include_once 'template/autoload.php';
$responsavel = new Responsavel(); 
$responsavelDAO = new ResponsavelDAO(); 

if (isset($_GET['idResponsavel']) and $_GET['acao'] == 'Deletar') {
		
		$responsavelDAO->deletarResponsavel($_GET['idResponsavel']);
	}else{
		$responsavel->setIdResponsavel($_POST['idResponsavel']);
		$responsavel->setNomeResponsavel($_POST['nomeResponsavel']);
		$responsavel->setCpfResponsavel($_POST['cpfResponsavel']);
		$responsavel->setEmailResponsavel($_POST['emailResponsavel']);
		$responsavel->setCelullarResponsavel($_POST['celullarResponsavel']);
		$responsavel->setTelFixoResponsavel($_POST['telFixoResponsavel']);
		$responsavel->setDtNascResponsavel($_POST['dtNascResponsavel']); 
		$responsavel->setSexoResponsavel($_POST['sexoResponsavel']);
		$responsavel->setLogradouroEndeResponsavel($_POST['logradouroEndeResponsavel']);
		$responsavel->setComplementoEndeResponsavel($_POST['complementoEndeResponsavel']);
		$responsavel->setBairroEndeResponsavel($_POST['bairroEndeResponsavel']);
		$responsavel->setCidadeEndeResponsavel($_POST['cidadeEndeResponsavel']);
		$responsavel->setCepEndeResponsavel($_POST['cepEndeResponsavel']);
		$responsavel->setNumeroEndeResponsavel($_POST['numeroEndeResponsavel']);
		$responsavel->setUfEndeResponsavel($_POST['ufEndeResponsavel']);
		$responsavel->setIdTipoUsuario($_POST['idTipoUsuario']);
		$responsavel->setIdEstadoCIvil($_POST['idEstadoCivil']);
		$responsavel->setLegalResponsavel($_POST['legalResponsavel']);
		$responsavel->setFinanceiroResponsavel($_POST['financeiroResponsavel']);
		$responsavel->setSenhaResponsavel($_POST['senhaResponsavel']);

		$acao = $_GET['acao'];

		if ($acao == 'Cadastrar') {
			$responsavelDAO->insereResponsavel($responsavel);
		}
		else if($acao == 'Editar'){
			$responsavelDAO->alterarResponsavel($responsavel);
		}
	}
	$msg = "Executado com sucesso!";
	$class = "success";
	header("Location:Responsavel.php?msg=$msg&class=$class");
?> 