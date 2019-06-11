<?php 
require_once "template/header.php";
require_once "template/menu.php";

$secretariaDAO = new SecretariaDAO();
$secretaria = new Secretaria();

if (isset($_GET['idSecretaria']))
{ 
	$secretaria->setIdSecretaria($_GET['idSecretaria']);

	$secretaria = $secretariaDAO->procurar($secretaria->getIdSecretaria());

	$acao = 'Editar';
} 
else if(isset($_GET['acao']) && $_GET_['acao'] == 'Vizualizar')
{
  $acao = "Vizualizar";
} 
else
{
	$acao = 'Cadastrar';
}

if (isset($_POST['pesquisa'])){
	$query = $secretariaDAO->listar($_POST['pesquisa']);
} 
else
{
	$query = $secretariaDAO->listarSecretaria();
}
?>


<div class="content-inner">
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">.:Lista de Usuários:.</h2>
        </div>
    </header>
    <div class="panel-body">
        <section class="tables">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <?php if(isset($_GET['msg'])){ ?>
                    <div class="alert alert-<?php echo $_GET['class']; ?>">
                        <?php echo $_GET['msg']; ?>
                    </div>
                    <?php } ?>
                    <div class="cards">
                        <div class="card-header d-flex align-items-rigth" style="border-radius: 8px;">
                            <div class="paenl panel-default">
                                <div class="panel-body">
                                    <div class="panel-heading">
                                        <form action="<?php echo $_SERVER['REQUEST_URI'] ?>">
                                            <input type="text" class="form-control col-lg-8"
                                                style="float:left; border-radius: 8px;" name="termo"
                                                placeholder="Secretaria" />
                                            &nbsp;
                                            <button class="btn btn-warning"
                                                style="background-color: #008fd7;">Buscar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <a href="principal.php" class="btn btn-warning col-sm-2"
                                style="margin-left: auto;">Voltar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Email</th>
                                        <th>Senha</th>
                                        <th>Cargo</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($query as $secretaria): ?>
                                    <tr>
                                        <td><?php echo $secretaria["idSecretaria"]?></td>
                                        <td><?php echo $secretaria["nomeSecretaria"] ?></td>
                                        <td><?php echo $secretaria["cpfSecretaria"] ?></td>
                                        <td><?php echo $secretaria["emailSecretaria"] ?> </td>
                                        <td><?php echo $secretaria["senhaSecretaria"] ?></td>
                                        <td><?php echo $secretaria["cargoSecretaria"] ?> </td>
                                        <td>
                                            <a href="editarUsuario.php?idSecretaria=<?php echo $secretaria["idSecretaria"] ?>"
                                                class="btn btn-warning" data-toggle="tooltip" data-placement="top"
                                                title="Editar">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger"
                                                onclick="return excluir('salvaSecretaria.php?acao=Deletar&idSecretaria=<?php echo $secretaria["idSecretaria"]; ?>')"
                                                data-toggle="tooltip" data-placement="top" title="Deletar">
                                                <div class="fa fa-trash-o" aria-hidden="true"></div>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
 <?php 
 	require_once "template/footer.php";
  ?>
