<?php 
	require_once "template/header.php";
	require_once "template/menu.php";
	$professorDAO = new ProfessorDAO();
	$professor = new Professor(); 

if (isset($_GET['idprofessor']))
{ 

    $professor->setIdProfessor($_GET['idprofessor']);

    $professor = $professorDAO->procurar($professor->getIdProfessor());

    $acao = 'Editar';
  } else if (isset($_GET['acao']) && $_GET_['acao'] == 'Vizualizar') {
    
    $acao = "Vizualizar";
  } 
else
  {
    $acao = 'Cadastrar';

  }


if (isset($_POST['pesquisa'])){
    $query = $professorDAO->listar($_POST['pesquisa']);
  } 
else
  {
        $query = $professorDAO->listar();
    }
 ?>
	<div class="content-inner">
		<header class="page-header">
			<div class="container-fluid">
				<h2 class="no-margin-bottom">.:Lista de Professores:.</h2>
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
						<input type="text" class="form-control col-lg-8" style="float:left; border-radius: 8px;" name="termo" placeholder="Nome do Professor(a)" />
						&nbsp;
						<button class="btn btn-warning" style="background-color: #008fd7;">Buscar</button>
					</form>
				</div>								
			</div>
		</div>
			&nbsp;
	        &nbsp;
<a href="principal.php" class="btn btn-warning col-sm-2" style="margin-left: auto; padding: 15px; background-color: #0b56a6;">Voltar</a>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<table class="table table-bordered table-striped">
<thead>
	<tr>
		<th>Professor(a)</th>
		<th>Cpf</th>
		<th>Email</th>
		<th>Registro de Professor</th>
		<th>Ações</th>
	</tr>
</thead>
	<tbody>
	<?php foreach($query AS $professor){  
		$professor = $professorDAO->listarProfessor($professor);}
			?>
		<tr>
			<td><?php echo ($professor->getNomeProfessor());?></td>
			<td><?php echo ($professor->getCpfProfessor());?></td>
			<td><?php echo ($professor->getEmailProfessor());?></td>
			<td><?php echo ($professor->getRegistroProfessor())?></td>
			<td>
				 <a href="#" class="btn btn-info" data-toggle="tooltip" data-placement="top" 	title="Editar">
					 <i class="fa fa-cog" aria-hidden="true"></i>
					</a>
					
				 <a href="" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Excluir">
					 <i class="fa fa-eye" aria-hidden="true"></i>
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
