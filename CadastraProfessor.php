<?php
    include 'template/header.php';
    include 'template/menu.php';
    //nome professor
<<<<<<< HEAD
    $professor = new Professor();
    $professorDAO = new ProfessorDAO();

    if(isset($_GET['id'])){

         $professor->setId($_GET['id']);

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

=======
    //$professor = new Professor();
    //$professor = new ProfessorDAO();

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
        
>>>>>>> 5983eebc6e4a2a1dd7de0b72b25c8598168e039b
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
<<<<<<< HEAD
                <label class="col-sm-3 form-control-label" for="nome">Nome:</label>
                  <div class="col-sm-9">
                  <input type="text" name="nome"  class="form-control" required="" value="<?php echo $professor->getNome() ?>">                    
                    <input type="hidden" name="id" id="id" value="<?php echo $professor->getId(); ?>">
               </div>
             </div>
=======

                <label class="col-sm-3 form-control-label" for="professor">Nome:</label>
                  <div class="col-sm-9">
                    <input type="text" name="professor" id="professor" class="form-control" required="" value="" placeholder="Nome Professor(a)" />
               </div></div>

>>>>>>> 5983eebc6e4a2a1dd7de0b72b25c8598168e039b
               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-15%;" class="col-sm-3 form-control-label" for="cpf">CPF:</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-15%;" type="number"  name="cpf" id="cpf" class="form-control" required="" value="" placeholder="EX: 12345678901" />
               </div></div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="sexo">Sexo:</label>
                  <div class="col-sm-9">
                    <select value="sexo">
                      <option value="feminino">Feminino</option>
                      <option value="masculino">Masculino</option>
                      <option value="outro">Outro</option>
                    </select><br><br>
                    <input type="text" name="sexo" id="sexo" class="form-control" required="" value="" placeholder="Sexo" />
               </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-25%;"class="col-sm-3 form-control-label" for="email">Email:</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-28%;" type="text" name="email" id="email" class="form-control" required="" value="" placeholder="exemplo@gmail.com"/>
               </div></div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="disciplina">Disciplina Ministrada:</label>
                  <div class="col-sm-9">
                    <select value="disciplina">
                      <option value="biologia">Biologia</option>
                      <option value="ef">Ed.Fisica</option>
                      <option value="espanhol">Espanhol</option>
                      <option value="fisica">Fisica</option>
                      <option value="geografia">Geografia</option>
                      <option value="historia">História</option>
                      <option value="ingles">Inglês</option>
                      <option value="matematica">Matemática</option>
                      <option value="portugues">Português</option>
                      <option value="quimica">Quimica</option>
                      <option value="outro">Outra</option>
                    </select><br><br>
                    <input type="text" name="disciplina" id="disciplina" class="form-control" required="" value="" placeholder="Uma ou mais"/>
               </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-40%;"class="col-sm-3 form-control-label" for="periodo">Periodo:</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-50%;" type="text" name="periodo" id="periodo" class="form-control" required="" value="" placeholder="periodo" />
               </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-23%;"class="col-sm-3 form-control-label" for="registro">Registro de Professor(a):</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-20%;"type="number" name="registro" id="registro" class="form-control" required="" value="" placeholder="123456" />
               </div></div>

               <div class="form-group row"> <label style="margin-top: -5%;"
               class="col-sm-3 form-control-label" for="senha">Senha:</label>
               <div class="col-sm-9"> <input type="password"
               name="senhaProfessor" id="senhaProfessor" class="form-control"
               required="" value="" placeholder="Letras e numeros" />
               </div></div>
<<<<<<< HEAD
               <button type="submit" class="btn btn-warning pull-right" <?php echo $disabled; ?> ><?php echo $acao; ?></button>
             </form>
=======

               <input type="submit" value="Cadastrar" name="Cadastrar" class="btn btn-warning pull-right"/>
>>>>>>> 5983eebc6e4a2a1dd7de0b72b25c8598168e039b
    </div>
  </div>
 </section> 
<?php 
    require_once 'template/footer.php';
?>    