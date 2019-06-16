<?php 
require_once "template/header.php";
require_once "template/menu.php";		

$secretariaDAO = new SecretariaDAO();
$secretaria = new Secretaria(); 

$tipoUsuario = TipoUsuarioDAO::listarTipoUsuario();

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
              <a href="javascript:history.back(-1)" class="btn btn-info col-sm-2" style="background-color: #0b56a6;">Voltar</a>
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
              <form action="salvaSecretaria.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal col-sm-12">
              	<div class="form-group row">
                    <label class="form-control-label" for="nomeSecretaria">Nome:</label>
                        <div class="col-sm-4">
                            <input type="text"  id="nomeSecretaria" name="nomeSecretaria" class="form-control" value="<?php echo $secretaria->getNomeSecretaria(); ?>" ></input>
                            <input type="hidden" name="idSecretaria" id="idSecretaria" value="<?php echo $secretaria->getIdSecretaria(); ?>"></input>
                        </div>
                
                <div class="form-group row">
                  <label class="col-sm-1 form-control-label" for="cpfSecretaria">CPF:</label>
                      <div class="col-sm-9">
                          <input type="text"  maxlength="11" id="cpfSecretaria" name="cpfSecretaria" class="form-control" value="<?php echo $secretaria->getCpfSecretaria(); ?>" ></input>
                      </div>
                </div>
              </div>

              <div class="form-group row">
                  <label class=" form-control-label" for="emailSecretaria">Email:</label>
                      <div class="col-sm-4">
                          <input type="text"  id="emailSecretaria" name="emailSecretaria" class="form-control" value="<?php echo $secretaria->getEmailSecretaria(); ?>" placeholder="email@email.com" ></input>
                      </div>
                <div class="form-group row">
                  <label class="col-sm-1 form-control-label" for="cargoSecretaria">Cargo:</label>
                      <div class="col-sm-9">
                          <input type="text"  id="cargoSecretaria" name="cargoSecretaria" class="form-control" value="<?php echo $secretaria->getCargoSecretaria(); ?>" ></input>
                      </div>
                </div>
              </div>

                
                <div class="form-group row"> 
                  <label class=" form-control-label" for="idTipoUsuario">Tipo Usuario:</label>
                  <div class="col-sm-3"> 
                    <select name="idTipoUsuario" id="idTipoUsuario" value="idTipoUsuario">
                      <option value="1">Secretaria</option>
                      <option value="2">Professor</option>
                      <option value="3">Aluno</option>
                      <option value="4">Responsavel</option>
                    </select value="<?php echo $secretaria->getIdTipoUsuario();?>">
                  </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label" for="senhaSecretaria">Senha:</label>
                      <div class="col-sm-9">
                          <input type="password" maxlength="15" id="senhaSecretaria" name="senhaSecretaria" class="form-control" value="<?php echo $secretaria->getSenhaSecretaria(); ?>" ></input>
                      </div>
                </div>
              </div>
                
                <button type="submit" class="btn btn-info pull-right"><?php echo $acao; ?></button>
              </form>
            </div>
          	</div>
        </div>
    </div>
  	</section>
	<?php require_once "template/footer.php"; ?>
</div>	