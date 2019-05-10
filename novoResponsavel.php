 <?php 
include 'template/header.php';
include 'template/menu.php';

?>

<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">.:Cadastro de Responsavel:.</h2>
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
                <a href="aluno.php" class="btn btn-warning col-sm-2" style="">Voltar</a>
          </div>
      </div>
    </div>
  <!--form elements--> 
    <div class="col-lg-12">
      <div class="card"> 
        <div class="card-header d-flex align-items-center">
          <h3 class="h4">.:Formulario de Cadastro:.</h3>
        </div>
          <div class="card-body">

            <form action="salvaAluno.php?acao=<?php echo $acao; ?>" method="POST"  class="form-horizontal col-lg-12">

              <div class="form-group row">
                <label class="form-control-label" for="aluno">Nome:</label>
                  <div class="col-sm-5">
                    <input type="text" name="nomeResponsavel" id="nomeResponsavel" class="form-control" required=""value=""placeholder="Nome Responsavel"/>
               </div>

               <div class="form-group row">
                <label style margin-top:-15%;" class="col-sm-1 form-control-label" for="cpfResponsavel">CPF:</label>
                  <div class="col-sm-7">
                    <input -top:-15%;" type="text"  name="cpfResponsavel" id="cpfResponsavel" class="form-control" required="" value="" placeholder="EX: 12345678901" />
               </div></div></div>
   						
   				<div class="form-group row">
                <label class="col-sm-3 form-control-label" for="emailResponsavel">Email:</label>
                  <div class="col-sm-9">
                    <input type="email" name="emailResponsavel" autocomplete="off"id="emailResponsavel" class="form-control" required="" value="" placeholder="exemplo@gmail.com"/>
               </div></div>

               <div class="form-group row">
                <label -top:-15%;" class="col-sm-3 form-control-label" for="celullarResponsavel">Celular:</label>
                  <div class="col-sm-9">
                    <input -top:-15%;" type="number"  name="celullarResponsavel" id="celullarResponsavel" class="form-control" required="" value="" placeholder="EX:(00)9 9999-8888"/>
               </div></div>

               <div class="form-group row">
                <label  class="col-sm-3 form-control-label" for="dtNascResponsavel">Data Nascimento:</label>
                  <div class="col-sm-9">
                    <input type="date"  name="dtNascResponsavel" id="dtNascResponsavel" class="form-control" required="" value="" placeholder="dd/mm/aaaa" />
               </div></div>

                <div class="form-group row">
                <label -top:-20%;" class="col-sm-3 form-control-label" for="telFixoResponsavel">Telefone:</label>
                  <div class="col-sm-9">
                    <input %;" type="number"  name="telFixoResponsavel" id="telFixoResponsavel" class="form-control" required="" value="" placeholder="EX:(00)9999-8888" />
               </div></div>

             <label class="col-sm-3 form-control-label" for="sexoResponsavel">Sexo:</label>
               <div class="form-group row">
                  <div class="col-sm-9">
                    <select value="sexoResponsavel" id="sexoResponsavel">
                      <option value="feminino">Feminino</option>
                      <option value="masculino">Masculino</option>
                    </select><br><br>
               </div></div>

               <div class="form-group row">
                <label -top:-20%;" class="col-sm-3 form-control-label" for="logradouroResponsavel">Logradouro:</label>
                  <div class="col-sm-9">
                    <input  type="number"  name="logradouroResponsavel" id="logradouroResponsavel" class="form-control" required="" value=""/>
               </div></div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="complementoResponsavel">Complemento:</label>
                  <div class="col-sm-9">
                    <input  type="text"name="complementoResponsavel"id="complementoResponsavel" class="form-control"required=""value=""/>
               </div></div>

               <div class="form-group row">
                <label -top:-20%;" class="col-sm-3 form-control-label" for="bairroResponsavel">Bairro:</label>
                  <div class="col-sm-9">
                    <input  type="text"  name="bairrorResponsavel" id="bairroResponsavel" class="form-control" required="" value=""/>
               </div></div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="cidade">Cidade:</label>
                  <div class="col-sm-9">
                    <input type="text"  name="cidadeResponsavel" id="cidadeResponsavel" class="form-control" required="" value=""/>
               </div></div>

               <div class="form-group row">
                <label -top:-20%;" class="col-sm-3 form-control-label" for="cepResponsavel">CEP:</label>
                  <div class="col-sm-9">
                    <input  type="number"  name="cepResponsavel" id="cepResponsavel" class="form-control" required="" value="" placeholder="EX:00.123.456"/>
               </div></div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="numeroResponsavel">Numero:</label>
                  <div class="col-sm-9">
                    <input type="number"  name="numeroResponsavel" id="numeroResponsavel" class="form-control" required="" value=""/>
               </div></div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="ufEndeAluno" id="ufEndeAluno">UF:</label>



<?php include 'template/footer.php'; ?>
