<?php 
	require_once "template/header.php";
	require_once "template/menu.php";

	 $SecretariaDAO = new SecretariaDAO();
	 $Secretaria = new Secretaria();

if (isset($_GET['idSecretaria']))
{ 

    $Secretaria->setidSecretaria($_GET['idSecretaria']);

    $Secretaria = $SecretariaDAO->procurar($Secretaria->getId());

    $acao = 'Editar';
  } else if (isset($_GET['acao']) && $_GET_['acao'] == 'Vizualizar') {
    
    $acao = "Vizualizar";
  } 
else
  {	
    $acao = 'Cadastrar';

  }


if (isset($_POST['pesquisa'])){
    $query = $SecretariaDAO->listar($_POST['pesquisa']);
  } 
else
  {
        $query = $SecretariaDAO->listar();
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
										<input type="text" class="form-control col-lg-8" style="float:left; border-radius: 8px;" name="termo" placeholder="Secretaria" />
										&nbsp;
										<button class="btn btn-warning" style="background-color: #008fd7;">Buscar</button>
									</form>
								</div>								
							</div>
						</div>
							<a href="CadastraSecretaria.php" class="btn btn-primary" id="direita" style="margin-left: auto;" >Cadastra Novo Usuario(a)</a>
							&nbsp;
							&nbsp;
						<a href="javascript:history.back(-1)" class="btn btn-warning col-sm-2" style="margin-left: auto; padding: 15px; background-color: #0b56a6;">Voltar</a>
					</div>
				</div>
			</div>
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Nome</th>
										<th>CPF</th>
										<th>Email</th>
										<th>Senha</th>
										<th>Cargo</th>
										<th>Ações</th>
									</tr>
								</thead>
									<tbody>
										<tr>
											<td>Lucas Vale</td>
											<td>000.999.777-09</td>
											<td>lucasvalle@gmail.com</td>
											<td>*****************</td>
											<td>Aluno</td>
											<td>
												 <a href="#" class="btn btn-info" data-toggle="tooltip" data-placement="top" 	title="Editar">
			     								 <i class="icon-search" ></i>
			      								</a>
			      								
												 <a href="" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Excluir">
			     								 <div data-icon="y" class="icon" ></div>
			      								</a>

											</td>
										</tr>			
										<tr>
											<td>Luzivaldo</td>
											<td>000.949.437-12</td>
											<td>luzivaldohen@gmail.com</td>
											<td>****************</td>
											<td>Professor</td>
											<td>
												 <a href="#" class="btn btn-info" data-toggle="tooltip" data-placement="top" 	title="Editar">
			     								 <i class="icon-search" ></i>
			      								</a>
			      								
												 <a href="" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Excluir">
			     								 <div data-icon="y" class="icon" ></div>
			      								</a>

											</td>
										</tr>			
										<tr>
											<td>Deivysson Edu</td>
											<td>157.171.155-32</td>
											<td>deivisson@gmail.com</td>
											<td>***************</td>
											<td>Responsável</td>
											<td>
												 <a href="#" class="btn btn-info" data-toggle="tooltip" data-placement="top" 	title="Editar">
			     								 <i class="icon-search" ></i>
			      								</a>
			      								
												 <a href="" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Excluir">
			     								 <div data-icon="y" class="icon" ></div>
			      								</a>

											</td>
										</tr>									
									</tbody>
							</table>
						</div>
					</div>
				</div>
		</div>
	</section>
</div>
 <?php 
 	require_once "template/footer.php";
  ?>
