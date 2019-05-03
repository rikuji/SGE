<?php require_once "template/header.php";
	  require_once "template/menu.php";		
 
	  $turmaDAO = new TurmaDAO();
	  $turma = new Turma();

if (isset($_GET['id']))
{ 

    $turma->setId($_GET['id']);

    $turma = $turmaDAO->procurar($turma->getId());

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
            <h2 class="no-margin-bottom">.:Formulário de Cadastro:.</h2>
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


            <!-- Form Elements -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">.:Cadastro de turma:.</h3>
                    </div>
                    <div class="card-body">

                    <?php if (isset($_GET['acao']) && $_GET['acao'] == 'Vizualizar') { ?>

                        <form action="salvaTurma.php?acao=Editar&id=<?php echo $turma->getId(); ?>" method="POST" class="form-horizontal">

    

                         <div class="form-group row">
                                <label class="col-sm-3 form-control-label">turma:</label>
                                <div class="col-sm-9">
                                    <input type="text" disabled=""  name="descricao" class="form-control" required autofocus value="<?php echo $turma->getDescricao() ?>">
                                    <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $turma->getId(); ?>">        
                                </div>
                            </div>

                           
                            <div class="form-group row">
                                <div class="col-sm-4 offset-sm-3">
                                    <input type="submit" class="btn btn-primary" value="Editar">
                                </div>
                            </div>

                        </form> <!-- fim formulario -->
                    </div>
                </div>
                <?php }else{ ?>
                 <form action="salvaTurma.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal">

    

                         <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Descrição:</label>
                                <div class="col-sm-9">
                                    <input type="text"  name="descricaoTurma" id="descricaoTurma"class="form-control" required autofocus value="<?php echo $turma->getDescricaoTurma() ?>">
                                    <input type="hidden" name="idTurma" id="idTurma" class="form-control" value="<?php echo $turma->getIdTurma(); ?>">        
                                </div>
                            </div>
                          <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Periodo:</label>
                                <div class="col-sm-9">
                                    <input type="text"  name="periodoTurma" id="periodoTurma" class="form-control" required autofocus value="<?php echo $turma->getPeriodoTurma() ?>">
                                </div>
                            </div>

                           
                            <div class="form-group row">
                                <div class="col-sm-4 offset-sm-3">
                                    <button type="submit" class="btn btn-primary"><?php echo $acao; ?></button>
                                </div>
                            </div>

                        </form> <!-- fim formulario -->

<?php } ?>
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
                              <td><?php echo utf8_encode($turma->getDescricaoTurma()); ?></td>
                              <td><?php echo $turma->getPeriodoTurma(); ?></td>
                              <td>
                                <a href="novaTurma.php?acao=Vizualizar&id=<?php echo $turma->getIdTurma(); ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Vizualizar">
                                    <i class="icon-search" ></i>
                                </a>
                                <a href="novaTurma.php?acao=Editar&id=<?php echo $turma->getIdTurma(); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar">
                                    <i class=icon-search aria-hidden="true" ></i>
                                </a>
                                
                              <?php if($temturma = 0){ ?>
                                <button class="btn btn-danger" title="" disabled>
                                  <div data-icon="y" class="icon" data-toggle="tooltip" data-placement="top" title="Não pode ser excluído, tem turma em uso!">
                                </button>
                                <?php }else{ ?>

                                    <a href="#" class="btn btn-danger" onclick="return excluir('salvaTurma.php?acao=Deletar&id=<?php echo $turma->getIdTurma(); ?>')" data-toggle="tooltip" data-placement="top" title="Deletar">
                                     <div data-icon="y" class="icon" ></div>
                                </a>
                                <?php } ?>
                                   
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