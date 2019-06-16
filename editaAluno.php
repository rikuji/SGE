<?php 
include 'template/header.php';
include 'template/menu.php';
  $id = $_GET['idAluno'];
  $aluno = new Aluno();
  $alunoDAO = new AlunoDAO();

  $query = $alunoDAO->listarPorIdAluno($id);

  foreach($query as $listaAluno){
    $aluno->setIdAluno($listaAluno['idAluno']);
		$aluno->setNomeAluno($listaAluno['nomeAluno']);
		$aluno->setCpfAluno($listaAluno['cpfAluno']);
		$aluno->setEmailaluno($listaAluno['emailAluno']);
		$aluno->setCelullarAluno($listaAluno['celullarAluno']);
		$aluno->setTelFixoAluno($listaAluno['telFixoAluno']);
		$aluno->setDtNascAluno($listaAluno['dtNascAluno']); 
		$aluno->setSexoAluno($listaAluno['sexoAluno']);
		$aluno->setLogradouroEndeAluno($listaAluno['logradouroEndeAluno']);
		$aluno->setComplementoEndeAluno($listaAluno['complementoEndeAluno']);
		$aluno->setBairroEndeAluno($listaAluno['bairroEndeAluno']);
		$aluno->setCidadeEndeAluno($listaAluno['cidadeEndeAluno']);
		$aluno->setUfEndeAluno($listaAluno['ufEndeAluno']);		
		$aluno->setCepEndeAluno($listaAluno['cepEndeAluno']);
		$aluno->setNumeroEndeAluno($listaAluno['numeroEndeAluno']);
		$aluno->setSenhaAluno($listaAluno['senhaAluno']);
		$aluno->setIdTipoUsuario($listaAluno['idTipoUsuario']);
  }

    if(isset($_GET['idAluno'])){

         $aluno->setIdAluno($_GET['idAluno']);

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
                <a href="javascript:history.back(-1)" class="btn btn-warning col-sm-2" style="margin-left: auto; background-color: #0b56a6;">Voltar</a>
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

            <form action="salvaAluno.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal col-sm-12">
              <div class="form-group row">
                <label class="form-control-label" for="nomeAluno">Nome:</label>
                  <div class="col-sm-4">
                    <input type="text" name="nomeAluno" id="nomeAluno" class="form-control" required="" value="<?php echo $aluno->getNomeAluno()?>" placeholder="Nome Aluno(a)"/>
                    <input type="hidden" name="idAluno" id="idAluno" class="form-control" value="<?php echo $aluno->getIdAluno(); ?>">
                  </div>
               <div class="form-group row">
                <label class="col-sm-1 form-control-label" for="cpfAluno">CPF:</label>
                  <div class="col-sm-9">
                    <input type="text"  name="cpfAluno" maxlength="11" id="cpfAluno" class="form-control" required="" value="<?php echo $aluno->getCpfAluno()?>" placeholder="EX: 12345678901" />
               </div></div>
          </div>
   						
   				<div class="form-group row">
                <label class="form-control-label" for="emailAluno">Email:</label>
                  <div class="col-sm-4">
                    <input type="email" name="emailAluno" autocomplete="off"id="emailAluno" class="form-control" required="" value="<?php echo $aluno->getEmailAluno()?>" placeholder="exemplo@gmail.com"/>
               </div>

               <div class="form-group row">
                <label class="col-sm-2 form-control-label" for="celullarAluno">Celular:</label>
                  <div class="col-sm-8">
                    <input type="number"  name="celullarAluno" id="celullarAluno" class="form-control" required="" value="<?php echo $aluno->getCelullarAluno()?>" placeholder="EX:(00)9 9999-8888"/>
               </div></div>
          </div>

               <div class="form-group row">
                <label  class="form-control-label" for="dtNascAluno">Data Nascimento:</label>
                  <div class="col-sm-3">
                    <input type="date"  name="dtNascAluno" id="dtNascAluno" class="form-control" required="" value="<?php echo $aluno->getDtNascAluno()?>" placeholder="dd/mm/aaaa" />
               </div>

                <div class="form-group row">
                <label class="col-sm-2 form-control-label" for="telFixoAluno">Telefone:</label>
                  <div class="col-sm-7">
                    <input type="number"  name="telFixoAluno" id="telFixoAluno" class="form-control" required="" value="<?php echo $aluno->getTelFixoAluno()?>" placeholder="EX:(00)9999-8888" />
               </div></div>
            </div>

            <div class="form-group row">
                                <label class="form-control-label" for="sexoAluno">Sexo:</label>
                                <div class="col-sm-2">
                                    <select value=" <?php echo $aluno->getSexoAluno();?>"
                                        name="sexoAluno" id="sexoAluno">
                                        <option value="F">Feminino</option>
                                        <option value="M">Masculino</option>
                                    </select>
                                </div>

               <div class="form-group row">
                <label class="form-control-label" for="logradouroEndeAluno">Logradouro:</label>
                  <div class="col-sm-8">
                    <input  type="number" name="logradouroEndeAluno" id="logradouroEndeAluno" class="form-control" required="" value="<?php echo $aluno->getLogradouroEndeAluno()?>"/>
               </div></div>
          </div>

               <div class="form-group row">
                <label class=" form-control-label" for="complementoEndeAluno">Complemento:</label>
                  <div class="col-sm-3">
                    <input  type="text"name="complementoEndeAluno"id="complementoEndeAluno" class="form-control"required=""value="<?php echo $aluno->getComplementoEndeAluno()?>"/>
               </div>

               <div class="form-group row">
                <label class="col-sm-1 form-control-label" for="bairroEndeAluno">Bairro:</label>
                  <div class="col-sm-9">
                    <input  type="text"  name="bairroEndeAluno" id="bairroEndeAluno" class="form-control" required="" value="<?php echo $aluno->getBairroEndeAluno()?>"/>
               </div></div>
               </div>

               <div class="form-group row">
                <label class=" form-control-label" for="cidadeEndeAluno">Cidade:</label>
                  <div class="col-sm-3">
                    <input type="text"  name="cidadeEndeAluno" id="cidadeEndeAluno" class="form-control" required="" value="<?php echo $aluno->getCidadeEndeAluno()?>"/>
               </div>

               <div class="form-group row">
                <label class="col-sm-1 form-control-label" for="cepEndeAluno">CEP:</label>
                  <div class="col-sm-9">
                    <input  type="number"  name="cepEndeAluno" id="cepEndeAluno" class="form-control" required="" value="<?php echo $aluno->getCepEndeAluno()?>" placeholder="EX:00.123.456"/>
               </div></div>
               </div>

               <div class="form-group row">
                <label class=" form-control-label" for="numeroEndeAluno">Numero:</label>
                  <div class="col-sm-3">
                    <input type="number"  name="numeroEndeAluno" id="numeroEndeAluno" class="form-control" required="" value="<?php echo $aluno->getNumeroEndeAluno()?>"/>
               </div>

               <div class="form-group row">
                <label class="col-sm-1 form-control-label" for="ufEndeAluno">UF:</label>
                  <div class="col-sm-8">
                    <select value = "<?php echo $aluno->getUfEndeAluno();?>" id="ufEndeAluno" name = "ufEndeAluno">
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
                    </select>
                 </div></div>
          </div>
          <div class="form-group row"> 
                  <label class=" form-control-label" for="idTipoUsuario">Tipo Usuario:</label>
                  <div class="col-sm-3"> 
                    <select name="idTipoUsuario" id="idTipoUsuario" value="idTipoUsuario">
                      <option value="1">Secretaria</option>
                      <option value="2">Professor</option>
                      <option value="3">Aluno</option>
                      <option value="4">Responsavel</option>
                    </select value="<?php echo $aluno->getIdTipoUsuario();?>">
                  </div>

                 <div class="form-group row"> 
                <label 
               class="form-control-label" for="senhaAluno">Senha:</label>
               <div class="col-sm-9"> 
                <input type="password"  name="senhaAluno"  id="senhaAluno" class="form-control"required="" value="<?php echo $aluno->getSenhaAluno()?>" 
                placeholder="Letras e numeros" />
               </div></div>
          </div>

		<button type="submit" class="btn btn-info pull-right"><?php echo $acao; ?></button>
       </div>
   </div>
</div>
</form>
</section>
<?php include 'template/footer.php'; ?> 

         