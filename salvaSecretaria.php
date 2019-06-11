<?php 
include_once 'template/autoload.php';

$secretariaDao = new SecretariaDao(); 
$secretaria = new Secretaria();


if ($_GET['acao'] == 'Deletar') {
    $id = $_GET["idSecretaria"];
    $secretariaDao->deletarUsuarioSecretaria($id);
}else{
    
    $secretaria->setIdSecretaria($_POST['idSecretaria']);
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
	    $secretariaDao->atualizaSecretaria($secretaria);
	}
}
$msg = "Executado com sucesso!";
$class = "success";

header("Location: secretaria.php?msg=$msg&class=$class");
 ?>