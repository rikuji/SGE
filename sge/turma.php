<?php 
	require_once 'template/header.php';
	require_once 'template/menu.php';

	$turmaDAO = new TurmaDAO();
	$turma =  new Turma();

 ?>
 	<div class="content-inner">
 		<header class="page-header">
 			<div class="containter-fluid">
 				<h2 class="no-margin-bottom">Turma</h2>
 			</div>
 		</header>
 		<div class="panel-body">
 			<section class="tables">
 				<div class="containter-fluid">
 					<div class="col-lg-12">
 						<?php if(isset($_GET['msg'])){ ?>
 							<div class="alert alert-<?php echo $_GET['class'];  ?>">
 								<?php echo $_GET['msg']; ?>
 							</div>
 						<?php } ?>
 						<div class="cards">
 							<div class="card-header d-flex align-items-rigth">
 								<div class="panel panel-default">
 									<div class="panel-body">
 										<div class="panel-heading">
 											<form action="<?php echo $_SERVER['REQUEST_URI'] ?>">
 												<input type="text" name="termo" class="form-control col-lg-8" style="float: left;"/>
 												&nbsp;
 												<button class="btn btn-default">Buscar</button>
 											</form>
 										</div>
 									</div>
 								</div>
 								<a href="cadastrarTurma.php" class="btn btn-primary" id="direita" style="margin-left: auto;" >Nova Turma</a>
 								&nbsp;
 								&nbsp;
 								<a href="javascript:history.back(-1)" class="btn btn-warning col-sm-2">Voltar</a>
 							</div>
 						</div>
 					</div>
 					<div class="col-lg-12">
 						<div class="card">
 							<div class="card-header d-flex align-items-center">
 								<h3 class="h4">Listagem</h3>
 							</div>
 							<div class="card--body">
 								<table class="table table-striped table-hover">
 									<thead>
 										<tr>
 											<th>Descrição</th>
 											<th>Ações</th>
 										</tr>
 									</thead>
 									<tbody>
 										<?php if(isset($_GET['termo'])){
 											$query = $turmaDAO->listarTurma($_GET['termo']);
 										}else{
 											$query = $turmaDAO->listarTurma();
 										}foreach($query as $turma){ ?>
 											<tr>
 												<td><?php echo $turma->getDescricao(); ?></td>
 												<td>
													
 													<a href="#" class="btn btn-into" data-toggle="tolltip" data-placement="top" title="Visualizar">
 													<i class="icon-search"></i>
 													</a>
 													<a href="#" class="btn btn-warning" data-toggle="tolltip" data-placement="top" title="Editar">
 														<i class="fa fa-pencil" arial-hidden="true"></i>
 													</a>
 													<a href="" class="btn btn-danger" data-toggle="tolltip" data-placement="top" title="Deletar" onclick="return deletar('salvaTurma.php?acao=Deletar&id=<?php echo $turma->getId(); ?>')">
 														<div data-icon="y" class="icon"></div>
 													</a>
 											</td>
 											</tr>
 										<?php } ?>
 									</tbody>
 								</table>
 							</div>
 						</div>
 					</div>
 				</div>
 			</section>
 		</div>
 	</div>