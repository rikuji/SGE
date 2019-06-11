<?php
require_once "template/header.php";
require_once "template/menu.php";

$id = $_GET["idSecretaria"];
$secretariaDAO = new SecretariaDAO();
$secretariaDAO->listarPorIdSecretaria($id);

$results = $secretariaDAO->listarPorIdSecretaria($id);

foreach ($results as $result){
    $idSecretaria      = $result["idSecretaria"  ];         
    $nomeSecretaria    = $result["nomeSecretaria"]; 
    $cpfSecretaria     = $result["cpfSecretaria"]; 
    $senhaSecretaria   = $result["senhaSecretaria"]; 
    $emailSecretaria   = $result["emailSecretaria"]; 
    $cargoSecretaria   = $result["cargoSecretaria"]; 
    $idTipoUsuario     = $result["idTipoUsuario"];  
}
$secretaria = new Secretaria();
$acao = "Editar";

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
              <form action="salvaSecretaria.php?acao=<?php echo $acao; ?>&id" method="POST" class="form-horizontal">
              	<div class="form-group row">
                    <label class="col-sm-3 form-control-label" for="nomeSecretaria">Nome:</label>
                        <div class="col-sm-9">
               				<input type=hidden name="idSecretaria" id="idSecretaria" value="<?php echo $idSecretaria; ?>"></input>
                            <input type="text"  id="nomeSecretaria" name="nomeSecretaria" class="form-control" value="<?php echo $nomeSecretaria; ?>" ></input>
                        </div>
                  </div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label" for="cpfSecretaria">CPF:</label>
                      <div class="col-sm-9">
                          <input type="text"  id="cpfSecretaria" name="cpfSecretaria" class="form-control" value="<?php echo $cpfSecretaria; ?>" ></input>
                      </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label" for="senhaSecretaria">Senha:</label>
                      <div class="col-sm-9">
                          <input type="text"  id="senhaSecretaria" name="senhaSecretaria" class="form-control" value="<?php echo $senhaSecretaria; ?>" ></input>
                      </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label" for="emailSecretaria">Email:</label>
                      <div class="col-sm-9">
                          <input type="text"  id="emailSecretaria" name="emailSecretaria" class="form-control" value="<?php echo $emailSecretaria; ?>" ></input>
                      </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label" for="cargoSecretaria">Cargo:</label>
                      <div class="col-sm-9">
                          <input type="text"  id="cargoSecretaria" name="cargoSecretaria" class="form-control" value="<?php echo $cargoSecretaria; ?>" ></input>
                      </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label" for="idTipoUsuario">Tipo Usuario:</label>
                      <div class="col-sm-9">
                          <input type="number"  id="idTipoUsuario" name="idTipoUsuario" class="form-control" value="<?php echo $idTipoUsuario; ?>" ></input>
                      </div>
                </div>
                <button type="submit" class="btn btn-warning pull-right"><?php echo $acao; ?></button>
              </form>
            </div>
          	</div>
        </div>
    </div>
  	</section>
	<?php require_once "template/footer.php"; ?>
</div>	