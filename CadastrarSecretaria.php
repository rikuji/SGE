<?php 
	require_once "template/header.php";
	require_once "template/menu.php";		

  $secretariaDAO = new SecretariaDAO();
  $secretaria = new Secretaria();

      if(isset($_GET['idSecretaria'])){

        $secretaria->setIdSecretaria($_GET['idSecretaria']);

        $acao = "Editar";

        }else{
          $acao = "Cadastrar";
        
        }
 ?>
 	<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">.:Cadastro Secretaria:.</h2>
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
                        <a href="secretaria.php" class="btn btn-warning col-sm-2" style="">Voltar</a>
                  </div>
              </div>
            </div>

              <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">.:Cadastro Secretaria:.</h3>
                    </div>
                    <div class="card-body">
                      
                     <form action="salvaSecretaria.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal">

            <div class="form-group row">
              <label class="col-sm-3 form-control-label" for="nomeSecretaria">Nome:</label>
                  <div class="col-sm-9">
                      <input type="text"  id="nomeSecretaria" name="nomeSecretaria" class="form-control" value="<?php echo $secretaria->getNomeSecretaria(); ?>" ></input>
                      <input type="hidden" name="nomeSecretaria" value="<?php echo $secretaria->getNomeSecretaria(); ?>"></input>
                  </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 form-control-label" for="cpfSecretaria">CPF:</label>
                  <div class="col-sm-9">
                      <input type="text"  id="cpfSecretaria" name="cpfSecretaria" class="form-control" value="<?php echo $secretaria->getCpfSecretaria(); ?>" ></input>
                      <input type="hidden" name="cpfSecretaria" value="<?php echo $secretaria->getCpfSecretaria(); ?>"></input>
                  </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 form-control-label" for="senhaSecretaria">Senha:</label>
                  <div class="col-sm-9">
                      <input type="password"  id="senhaSecretaria" name="senhaSecretaria" class="form-control" value="<?php echo $secretaria->getSenhaSecretaria(); ?>" ></input>
                      <input type="hidden" name="senhaSecretaria" value="<?php echo $secretaria->getSenhaSecretaria(); ?>"></input>
                  </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 form-control-label" for="emailSecretaria">Email:</label>
                  <div class="col-sm-9">
                      <input type="text"  id="emailSecretaria" name="emailSecretaria" class="form-control" value="<?php echo $secretaria->getEmailSecretaria(); ?>" ></input>
                      <input type="hidden" name="emailSecretaria" value="<?php echo $secretaria->getEmailSecretaria(); ?>"></input>
                  </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-3 form-control-label" for="cargoSecretaria">Cargo:</label>
                  <div class="col-sm-9">
                      <input type="text"  id="cargoSecretaria" name="cargoSecretaria" class="form-control" value="<?php echo $secretaria->getCargoSecretaria(); ?>" ></input>
                      <input type="hidden" name="cargoSecretaria" value="<?php echo $secretaria->getCargoSecretaria(); ?>"></input>
                  </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 form-control-label" for="idTipoUsuario">Tipo Usuario:</label>
                  <div class="col-sm-9">
                      <input type="number"  id="idTipoUsuario" name="idTipoUsuario" class="form-control" value="<?php echo $secretaria->getIdTipoUsuario(); ?>" ></input>
                      <input type="hidden" name="idTipoUsuario" value="<?php echo $secretaria->getIdTipoUsuario(); ?>"></input>
                  </div>
            </div>
            

     <button type="submit" class="btn btn-warning pull-right"><?php echo $acao; ?></button>
    </form>

    </div>
    </div>
    </div>
    </div>

<?php require_once "template/footer.php"; ?>