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
            <h2 class="no-margin-bottom">.:Formulário de Turma:.</h2>
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
                    <a href="javascript:history.back(-1)" class="btn btn-warning col-sm-2" style="margin-left: auto; background-color: #0b56a6;">Voltar</a>
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
                                <div class="col-sm-12 offset-sm-3">
                                    <button type="submit" class="btn btn-info"><?php echo $acao; ?></button>
                                </div>
                            </div>

                        </form> <!-- fim formulario -->
                    </div>
                </div>
            </div>
          </div>
        </div>

  </div>
</section>

<?php
include ('template/footer.php');
?>