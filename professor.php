<?php
require_once "template/header.php";
require_once "template/menu.php";

    $professor = new Professor();
		$professorDAO  = new ProfessorDAO();
		$disciplina = new Disciplina();
		$disciplinaDAO = new DisciplinaDAO();
    
if (isset($_GET['idProfessor']))
{     
        $professor->setIdProfessor($_GET['idProfessor']);  
        $professor = $ProfessorDAO->procurar($professor->getIdProfessor());
        $acao = 'Editar';

} else if (isset($_GET['acao']) && $_GET_['acao'] == 'Vizualizar') 
    {    
        $acao = "Vizualizar";
    }else
      {
        $acao = 'Cadastrar';
      }
if (isset($_POST['pesquisa']))
{
        $query = $professorDAO->listar($_POST['pesquisa']);
} else
      {
          $query = $professorDAO->listar();
     }
       
?>

<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">.:Professor(a):.</h2>
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
		<th>Nome</th>
		<th>Registro</th>
		<th>Matutino</th>
		<th>Vespertino</th>
		<th>Noturno</th>
    	<th>Disciplina</th>
		<th>Ações</th>
	</tr>
</thead>
	<tbody>
	<?php foreach($query AS $professor){  
		$lista = $professorDAO->listarProfessor($professor);
			?>
		<tr>	
			<td><?php echo $professor->getNomeProfessor();?></td>
			<td><?php echo $professor->getRegistroProfessor();?></td>
			<td><?php echo $professor->getMatutino();?></td>
			<td><?php echo $professor->getVespertino();?></td>
			<td><?php echo $professor->getNoturno();?></td>
      		<td><?php echo "    ";?></td>
			<td>
				<a href="cadastrarProfessor.php?acao=Editar&idPro$professor=<?php echo $professor->getIdProfessor(); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar">
             <i class="fa fa-pencil" aria-hidden="true"></i>
         </a>
  			 <a href="professor.php" class="btn btn-danger" onclick="return excluir('salvaProfessor.php?acao=Deletar&idProfessor=<?php echo $professor->getIdProfessor(); ?>')" data-toggle="tooltip" data-placement="top" title="Deletar">
						 <div class="fa fa-trash-o" aria-hidden="true" ></div>
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

<?php include 'template/footer.php'; ?>