<?php 
	require_once "template/header.php";
	require_once "template/menu.php";		

  $id = $_GET["idTurma"]; 
  $turmaDAO = new TurmaDAO();
  $turma = new Turma();

  $query = $turmaDAO->listarPorIdTurma($id);

  foreach ($query as $listarId){
    $turma->setIdTurma($listarId['idTurma']);
		$turma->setDescricaoTurma($listarId['descricaoTurma']);
		$turma->setPeriodoTurma($listarId['periodoTurma']);
  }

      if(isset($_GET['idTurma'])){

        $turma->setIdTurma($_GET['idTurma']);

        $acao = "Editar";

        }else{
          $acao = "Cadastrar";
        
        }
 ?>
 	<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">.:Editar de Turma:.</h2>
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
                      <a style="margin-left: auto;"></a>  
                        &nbsp;
                        &nbsp;
                        <a href="javascript:history.back(-1)" class="btn btn-info col-sm-2" style="background-color: #0b56a6;">Voltar</a>
                  </div>
              </div>
            </div>

              <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">.:Editar Turma:.</h3>
                    </div>
                    <div class="card-body">
                      
                     <form action="salvaTurma.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal col-sm-12">

            <div class="form-group row">
                <label class=" col-sm-1form-control-label" for="descricao">Descrição:</label>
                    <div class="col-sm-6">
                        <input type="text"  id="descricaoTurma" name="descricaoTurma" class="form-control" value="<?php echo $turma->getDescricaoTurma(); ?>" ></input>
                        <input type="hidden" name="idTurma" value="<?php echo $turma->getIdTurma(); ?>"/>
                    </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-1 form-control-label" for="descricao">Periodo:</label>
                    <div class="col-sm-6">
                        <input type="text"  id="periodoTurma" name="periodoTurma" class="form-control" value="<?php echo $turma->getPeriodoTurma(); ?>"></input>
                    </div>
            </div>

     <button type="submit" class="btn btn-info  pull-right" style="background-color:#0b56a6"><?php echo $acao; ?></button>
    </form>

    </div>
    </div>
    </div>
    </div>

<?php require_once "template/footer.php"; ?>