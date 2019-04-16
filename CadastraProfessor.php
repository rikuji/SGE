<?php
    include 'template/header.php';
    include 'template/menu.php';
    //nome professor
    if(isset($_GET['professor'])){

        $professor->setIdProfessor($_GET['professor']); 
        $acao = "Editar";
        }else{
          $acao = "Cadastrar";
        }
        if(isset($_GET['acao']) AND $_GET['acao'] == 'Visualizar'){
        $disabled = 'disabled';
        }else{
        $disabled = "";
        }
        // cpf
        if(isset($_GET['cpf'])){

        $professor->setIdProfessor($_GET['cpf']); 
        $acao = "Editar";
        }else{
          $acao = "Cadastrar";
        }
        if(isset($_GET['acao']) AND $_GET['acao'] == 'Visualizar'){
        $disabled = 'disabled';
        }else{
        $disabled = "";
        }
        //sexo
        if(isset($_GET['sexo'])){

        $professor->setIdProfessor($_GET['sexo']); 
        $acao = "Editar";
        }else{
          $acao = "Cadastrar";
        }
        if(isset($_GET['acao']) AND $_GET['acao'] == 'Visualizar'){
        $disabled = 'disabled';
        }else{
        $disabled = "";
        }
        //email
        if(isset($_GET['email'])){

        $professor->setIdProfessor($_GET['email']); 
        $acao = "Editar";
        }else{
          $acao = "Cadastrar";
        }
        if(isset($_GET['acao']) AND $_GET['acao'] == 'Visualizar'){
        $disabled = 'disabled';
        }else{
        $disabled = "";
        }
        //disciplina
        if(isset($_GET['disciplina'])){

        $professor->setIdProfessor($_GET['disciplina']); 
        $acao = "Editar";
        }else{
          $acao = "Cadastrar";
        }
        if(isset($_GET['acao']) AND $_GET['acao'] == 'Visualizar'){
        $disabled = 'disabled';
        }else{
        $disabled = "";
        }
        //periodo
        if(isset($_GET['periodo'])){

        $professor->setIdProfessor($_GET['periodo']); 
        $acao = "Editar";
        }else{
          $acao = "Cadastrar";
        }
        if(isset($_GET['acao']) AND $_GET['acao'] == 'Visualizar'){
        $disabled = 'disabled';
        }else{
        $disabled = "";
        }
        //registro
        if(isset($_GET['registro'])){

        $professor->setIdProfessor($_GET['registro']); 
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
  <h2 class="no-margin-bottom">.:Cadastro de Professor(a):.</h2>
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
          <h3 class="h4">.:Cadastrar Professor(a):.</h3>
        </div>
          <div class="card-body">
            <form action="salvaProfessor.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="professor">Nome:</label>
                  <div class="col-sm-9">
                    <input type="text" name="professor" id="professor" class="form-control" required="" value="" placeholder="Nome Professor(a)" />
               </div></div>
               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-15%;" class="col-sm-3 form-control-label" for="cpf">CPF:</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-15%;" type="text"  name="cpf" id="cpf" class="form-control" required="" value="" placeholder="EX: 12345678901" />
               </div></div>
               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="sexo">Sexo:</label>
                  <div class="col-sm-9">
                    <input type="text" name="sexo" id="sexo" class="form-control" required="" value="" placeholder="Sexo" />
               </div></div>
               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-15%;"class="col-sm-3 form-control-label" for="email">Email:</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-15%;" type="text" name="email" id="email" class="form-control" required="" value="" placeholder="exemplo@gmail.com"/>
               </div></div>
               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="disciplina">Disciplina Ministrada:</label>
                  <div class="col-sm-9">
                    <input type="text" name="disciplina" id="disciplina" class="form-control" required="" value="" placeholder="Uma ou mais"/>
               </div></div>
               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-15%;"class="col-sm-3 form-control-label" for="periodo">Periodo:</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-15%;" type="text" name="periodo" id="periodo" class="form-control" required="" value="" placeholder="periodo" />
               </div></div>
               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="registro">Registro de Professor(a):</label>
                  <div class="col-sm-9">
                    <input type="text" name="registro" id="registro" class="form-control" required="" value="" placeholder="Registro de Professor(a)" />
               </div></div>
               <input type="submit" value="Cadastrar" name="Cadastrar" class="btn btn-warning pull-right"/>
    </div>
  </div>
 </section> 
<?php
    require_once 'template/footer.php';
?>    