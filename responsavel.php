<?php require_once "template/header.php";
	  require_once "template/menu.php";

	  $responsavel = new Responsavel();
	  $responsavelDAO = new ResponsavelDAO();

	  if(isset($_GET['idResponsavel'])){

	  	$responsavel->setIdResponsavel($_GET['idResponsavel']);
	  	
	  	$responsavel = $responsavelDAO->procura($responsavel->getIdResponsavel());
	  	
	  	$acao = 'Editar';
	  
	  } else if (isset($_GET['acao']) && $_GET['acao'] == 'Vizualizar') {
	  	
	  	$acao  = 'Vizualizar';
	  
	  }
	  else
	  {
	  	$acao = 'Cadastrar';

	  }
	  if (isset($_POST['pesquisar'])){

	$query = $responsavelDAO->listar($_POST['pesquisa']);

}
else
{
	$query = $responsavelDAO->listarResposavel();
}
 ?>
 <div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">.:Formulário de Responsavel:.</h2>
        </div>
    </header>

    
      <section class="forms"> 
        <div class="container-fluid">

        <div class="col-lg-12">
              <?php if(isset($_GET['msg'])){ ?>   
              <div class="alert alert-<?php echo $_GET['class']; ?>">
                <?php echo $_GET['msg']; ?>
              </div>
              <?php } ?>
              <div class="cards">
                  <div class="card-header d-flex align-items-right">
                    <a href="javascript:history.back(-1)" class="btn btn-warning col-sm-2" style="margin-left: auto;">Voltar</a>
                  </div>
              </div>
            </div>


           
<div class="card-header d-flex align-items-center">
                        <h3 class="h4">.:Lista de Responsavel:.</h3>
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


 <?php require_once "template/footer.php"; ?>