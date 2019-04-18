<?php
    include 'template/header.php';
    include 'template/menu.php';
    //$secretaria = new Secretaria();
    //$secretaria = new SecretariaDAO();

    if(isset($_GET['idSecretaria'])){

        $professor->setIdSecretaria($_GET['idSecretaria']); 
        $acao = "Editar";
        }else{
          $acao = "Cadastrar";
        }
        if(isset($_GET['acao']) AND $_GET['acao'] == 'Visualizar'){
        $disabled = 'disabled';
        }else{
        $disabled = "";
        }
        
?>
<div class="content-inner">
<!-- Page Header-->
<header class="page-header">
<div class="container-fluid">
  <h2 class="no-margin-bottom">.:Cadastro de Secretaria:.</h2>
</div>
</header>
 <section class="forms">
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
  <!--form elements-->
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <h3 class="h4">.:Cadastrar Secretaria:.</h3>
        </div>
          <div class="card-body">
            <form action="salvaSecretaria.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal">
              <div class="form-group row">

                <label class="col-sm-3 form-control-label" for="secretaria">Nome:</label>
                  <div class="col-sm-9">
                    <input type="text" name="nomeSecretaria" id="nomeSecretaria" class="form-control" required="" value="" placeholder="Nome Completo" />
               </div></div>

               <div class="form-group row">
                <label style="float:left;margin-left:97%; margin-top:-15%;" class="col-sm-3 form-control-label" for="cpf">CPF:</label>
                  <div class="col-sm-9">
                    <input style="float:left;margin-left:140%; margin-top:-15%;" type="number"  name="cpfSecretaria" id="cpfSecretaria" class="form-control" required="" value="" placeholder="EX: 12345678901" />
               </div></div>

               <div class="form-group row">
                <label style="float:left;margin-left:97%;margin-top:-2%;" class="col-sm-3 form-control-label" for="email">Email:</label>
                  <div class="col-sm-9">
                    <input style="float:left;margin-left:140%;margin-top:-1%;" type="text" name="email" id="email" class="form-control" required="" value="" placeholder="exemplo@gmail.com"/>
               </div></div>

               <div class="form-group row"> 
                <label style="margin-top:-15%;" class="col-sm-3 form-control-label" for="senha">Senha:</label>
               <div class="col-sm-9"> 
                <input style="margin-top:-13%;" type="password"name="senhaSecretaria" id="senhaSecretaria" class="form-control"
               required="" value="" placeholder="Letras e numeros" />
               </div></div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="periodo">Cargo:</label>
                  <div class="col-sm-9">
                    <input  type="text" name="cargoSecretaria" id="cargoSecretaria" class="form-control" required="" value="" placeholder="Cargo" />
               </div></div>

               <input type="submit" value="Cadastrar" name="Cadastrar" class="btn btn-warning pull-right"/>
    </div>
  </div>
</form>
 </section> 
<?php
    require_once 'template/footer.php';
?>    