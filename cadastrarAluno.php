<?php 
include 'template/header.php';
include 'template/menu.php';

   $aluno = new Aluno();
    $alunoDAO = new AlunoDAO();

    if(isset($_GET['idAluno'])){

         $Aluno->setIdAluno($_GET['idAluno']);

        $acao = "Editar";

        }else{
          $acao = "Cadastrar";
        
        }
        if(isset($_GET['acao']) AND $_GET['acao'] == 'Visualizar')
        {
        $disabled = 'disabled';
        }else{
        $disabled = "";
      }

?>

<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">.:Cadastro de Aluno(a):.</h2>
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

            <form action="salvaAluno.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="aluno">Nome:</label>
                  <div class="col-sm-9">
                    <input type="text" name="nomeAluno" id="nomeAluno" class="form-control" required=""value=""placeholder="Nome Aluno(a)"/>
               </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-15%;" class="col-sm-3 form-control-label" for="cpfAluno">CPF:</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-15%;" type="number"  name="cpfAluno" id="cpfAluno" class="form-control" required="" value="" placeholder="EX: 12345678901" />
               </div></div>
   						
   				<div class="form-group row">
                <label class="col-sm-3 form-control-label" for="emailAluno">Email:</label>
                  <div class="col-sm-9">
                    <input type="email" name="emailAluno" autocomplete="off"id="emailAluno" class="form-control" required="" value="" placeholder="exemplo@gmail.com"/>
               </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-15%;" class="col-sm-3 form-control-label" for="celullarAluno">Celular:</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-15%;" type="number"  name="celullarAluno" id="celullarAluno" class="form-control" required="" value="" placeholder="EX:(00)9 9999-8888"/>
               </div></div>

               <div class="form-group row">
                <label  class="col-sm-3 form-control-label" for="telFixoAluno">Data Nascimento:</label>
                  <div class="col-sm-9">
                    <input type="date"  name="telFixoAluno" id="telFixoAluno" class="form-control" required="" value="" placeholder="dd/mm/aaaa" />
               </div></div>

                <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-20%;" class="col-sm-3 form-control-label" for="telFixoAluno">Telefone:</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left:140%;margin-top:-20%;" type="number"  name="telFixoAluno" id="telFixoAluno" class="form-control" required="" value="" placeholder="EX:(00)9999-8888" />
               </div></div>

             <label class="col-sm-3 form-control-label" for="sexoAluno">Sexo:</label>
               <div class="form-group row">
                  <div class="col-sm-9">
                    <select value="sexoAluno" id="sexoAluno">
                      <option value="feminino">Feminino</option>
                      <option value="masculino">Masculino</option>
                    </select><br><br>
               </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-20%;" class="col-sm-3 form-control-label" for="logradouroEndeAluno">Logradouro:</label>
                  <div class="col-sm-9">
                    <input style="float: left;margin-left:140%;margin-top:-20%;" type="number"  name="logradouroEndeAluno" id="logradouroEndeAluno" class="form-control" required="" value=""/>
               </div></div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="complementoEndeAluno">Complemento:</label>
                  <div class="col-sm-9">
                    <input  type="text"name="complementoEndeAluno"id="complementoEndeAluno" class="form-control"required=""value=""/>
               </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-20%;" class="col-sm-3 form-control-label" for="bairroEndeAluno">Bairro:</label>
                  <div class="col-sm-9">
                    <input style="float: left;margin-left:140%;margin-top:-20%;" type="text"  name="bairroEndeAluno" id="bairroEndeAluno" class="form-control" required="" value=""/>
               </div></div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="cidadeEndeAluno">Cidade:</label>
                  <div class="col-sm-9">
                    <input type="text"  name="cidadeEndeAluno" id="cidadeEndeAluno" class="form-control" required="" value=""/>
               </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-20%;" class="col-sm-3 form-control-label" for="cepEndealuno">CEP:</label>
                  <div class="col-sm-9">
                    <input style="float: left;margin-left:140%;margin-top:-20%;" type="number"  name="cepEndealuno" id="cepEndealuno" class="form-control" required="" value="" placeholder="EX:00.123.456"/>
               </div></div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="numeroAluno">Numero:</label>
                  <div class="col-sm-9">
                    <input type="number"  name="numeroAluno" id="numeroAluno" class="form-control" required="" value=""/>
               </div></div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="ufEndeAluno" id="ufEndeAluno">UF:</label>
                  <div class="col-sm-9">
                    <select style="margin-top:-100%;" value="ufEndeAluno" id="ufEndeAluno">
                      <option value="ac">AC</option>
                      <option value="al">AL</option>
                      <option value="ap">AP</option>
                      <option value="am">AM</option>
                      <option value="ba">BA</option>
                      <option value="ce">CE</option>
                      <option value="df">DF</option>
                      <option value="es">ES</option>
                      <option value="go">GO</option>
                      <option value="ma">MA</option>
                      <option value="mt">MT</option>
                      <option value="ms">MS</option>
                      <option value="mg">MG</option>
                      <option value="pa">PA</option>
                      <option value="pb">PB</option>
                      <option value="pr">PR</option>
                      <option value="pe">PE</option>
                      <option value="pi">PI</option>
                      <option value="rj">RJ</option>
                      <option value="rn">RN</option>
                      <option value="rs">RS</option>
                      <option value="ro">RO</option>
                      <option value="rr">RR</option>
                      <option value="sc">SC</option>
                      <option value="sp">SP</option>
                      <option value="se">SE</option>
                      <option value="to">TO</option>
                    </select><br><br>
                 </div></div>

                 <div class="form-group row"> 
                <label style="float: left;margin-left:97%;margin-top:-20%;"
               class="col-sm-3 form-control-label" for="senhaAluno">Senha:</label>
               <div class="col-sm-9"> 
                <input type="password" style="float: left;margin-left:140%;margin-top:-20%;" name="senhaAluno" id="senhaAluno" class="form-control"required="" value="" 
                placeholder="Letras e numeros" />
               </div></div>

		<button type="submit" class="btn btn-warning pull-right">
			<?php echo $acao; ?></button>    
       </div>
   </div>
</div>
</form>
</section>
<?php include 'template/footer.php'; ?>

         