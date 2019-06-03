<?php require_once "template/header.php";
	  require_once "template/menu.php";		
 
	  $turmaDAO = new TurmaDAO();
	  $turma = new Turma(); 

if (isset($_GET['idTurma']))
{ 

    $turma->setIdTurma($_GET['idTurma']);

    $turma = $turmaDAO->procurar($turma->getIdTurma());

    $acao = 'Editar';
  } else if (isset($_GET['acao']) && $_GET_['acao'] == 'Vizualizar') {
    
    $acao = "Vizualizar";
  } 
else
  {
    $acao = 'Cadastrar';

  }


if (isset($_POST['pesquisa'])){
    $query = $turmaDAO->listar($_POST['pesquisa']);
  } 
else
  {
        $query = $turmaDAO->listar();
    }
?>
 	<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">.:Turmas:.</h2>
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
						<input type="text" class="form-control col-lg-8" style="float:left; border-radius: 8px;" name="termo" placeholder="Nome da Turma" />
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
<div class="card-header d-flex align-items-center">
                        <h3 class="h4">.:Lista de turmas:.</h3>
                    </div>
    <div class=" card card-body">
                <table class="table table-striped table-hover">
            <thead>
                          <tr>
                              <th>Descrição</th>
                              <th>Periodo</th>
                              <th>Ação</th>
                            </tr>
                        </thead>
                                 <tbody>
                          <?php foreach($query AS $turma){  
                                $temturma = $turmaDAO->listarTurma($turma);

                            ?>
                            <tr>
                              <td><?php echo $turma->getDescricaoTurma(); ?></td>
                              <td><?php echo $turma->getPeriodoTurma(); ?></td>
                              <td>

                                <a href="novaTurma.php?acao=Editar&idTurma=<?php echo $turma->getIdTurma(); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar">
                                  <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                    <a href="#" class="btn btn-danger" onclick="return excluir('salvaTurma.php?acao=Deletar&idTurma=<?php echo $turma->getIdTurma(); ?>')" data-toggle="tooltip" data-placement="top" title="Deletar">
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



<?php
include ('template/footer.php');
?>