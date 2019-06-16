<?php
include_once 'template/autoload.php';
$aluno = new Aluno(); 
$alunoDAO = new AlunoDAO(); 

if (isset($_GET['idAluno']) and $_GET['acao'] == 'Deletar') {
		
		$alunoDAO->deletarAluno($_GET['idAluno']);
	}else{ 
		$aluno->setIdAluno($_POST['idAluno']);
		$aluno->setNomeAluno($_POST['nomeAluno']);
		$aluno->setCpfAluno($_POST['cpfAluno']);
		$aluno->setEmailaluno($_POST['emailAluno']);
		$aluno->setCelullarAluno($_POST['celullarAluno']);
		$aluno->setTelFixoAluno($_POST['telFixoAluno']);
		$aluno->setDtNascAluno($_POST['dtNascAluno']); 
		$aluno->setSexoaluno($_POST['sexoAluno']);
		$aluno->setLogradouroEndeAluno($_POST['logradouroEndeAluno']);
		$aluno->setComplementoEndeAluno($_POST['complementoEndeAluno']);
		$aluno->setBairroEndeAluno($_POST['bairroEndeAluno']);
		$aluno->setCidadeEndeAluno($_POST['cidadeEndeAluno']);
		$aluno->setCepEndeAluno($_POST['cepEndeAluno']);
		$aluno->setNumeroEndeAluno($_POST['numeroEndeAluno']);
		$aluno->setSenhaAluno($_POST['senhaAluno']);
		$aluno->setUfEndeAluno($_POST['ufEndeAluno']);

		$acao = $_GET['acao'];

		if ($acao == 'Cadastrar') {
			$alunoDAO->insereAluno($aluno);
		}
		else if($acao == 'Editar'){
			$alunoDAO->alterarAluno($aluno);
		}
	}
	$msg = "Executado com sucesso!";
	$class = "success";
	header("Location:aluno.php?msg=$msg&class=$class");
?> 