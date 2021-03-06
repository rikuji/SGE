<?php 
	require_once "template/header.php";
	require_once "template/menu.php";		

  $estadoCivilDAO = new EstadoCivilDAO();
  $estadoCivil = new EstadoCivil();

      if(isset($_GET['idEstadoCivil'])){ 

        $estadoCivil->setIdEstadoCivil($_GET['idEstadoCivil']);
 
        $acao = "Editar";

        }else{
          $acao = "Cadastrar";
        
        }
 ?>
 	<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">.:Editar de Estado Civil:.</h2>
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
                        <a href="javascript:history.back(-1)" class="btn btn-warning col-sm-2" style="">Voltar</a>
                  </div>
              </div>
            </div>

              <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">.:Editar Estado Civil:.</h3>
                    </div>
                    <div class="card-body">
                      
                     <form action="salvaEstadoCivil.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal">

            <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="descricao">Descrição:</label>
                    <div class="col-sm-9">
                        <input type="text"  id="descricaoEstadoCivil" name="descricaoEstadoCivil" class="form-control" value="<?php echo $estadoCivil->getDescricaoEstadoCivil(); ?>" ></input>
                        <input type="hidden" name="idEstadoCivil" value="<?php echo $estadoCivil->getIdEstadoCivil(); ?>"></input>
                    </div>
            </div>

            

     <button type="submit" class="btn btn-warning pull-right"><?php echo $acao; ?></button>
    </form>

    </div>
    </div>
    </div>
    </div>

<?php require_once "template/footer.php"; ?>