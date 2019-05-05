<?php
    include 'template/header.php';
    include 'template/menu.php';
    //nome professor
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
                <a href="professor.php" class="btn btn-warning col-sm-2" style="">Voltar</a>
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

            <form action="salvaProfessor.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label" for="professor">Nome:</label>
                  <div class="col-sm-9">
                    <input type="text" name="professor" id="professor" class="form-control" required=""value=""placeholder="Nome Professor(a)"/>
               </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-15%;" class="col-sm-3 form-control-label" for="cpf">CPF:</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-15%;" type="number"  name="cpf" id="cpf" class="form-control" required="" value="" placeholder="EX: 12345678901" />
               </div></div>

                <label class="col-sm-3 form-control-label" for="sexo">Sexo:</label>
               <div class="form-group row">
                  <div class="col-sm-9">
                    <select value="sexo">
                      <option value="feminino">Feminino</option>
                      <option value="masculino">Masculino</option>
                    </select><br><br>
               </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-17%;"class="col-sm-3 form-control-label" for="email">Email:</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-15%;" type="email" name="email" autocomplete="off"id="email" class="form-control" required="" value="" placeholder="exemplo@gmail.com"/>
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
                 </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-25%;"class="col-sm-3 form-control-label" for="periodo">Periodo:</label>
                  <div class="col-sm-9">
                    <input style="float:left;margin-left:140%; margin-top:-25%;"type="" name="periodo" id="periodo" class="form-control" required="" value=""/>
               </div></div>

               <div class="form-group row">
                <label style="float: left; margin-left: 97%; margin-top:-5%;"class="col-sm-3 form-control-label" for="registro">Registro de Professor(a):</label>
                  <div class="col-sm-9">
                    <input style="float: left; margin-left: 140%; margin-top:-1%;"type="number" name="registro" id="registro" class="form-control" required="" value="" placeholder="123456" />
               </div></div>

               <div class="form-group row"> 
                <label style="margin-top:-20%;"
               class="col-sm-3 form-control-label" for="senha">Senha:</label>
               <div class="col-sm-9"> 
                <input type="password"  style="margin-top:-17%;"name="senhaProfessor" id="senhaProfessor" class="form-control"required="" value="" 
                placeholder="Letras e numeros" />
               </div></div>
               <button type="submit" class="btn btn-warning pull-right" <?php echo $disabled; ?> ><?php echo $acao; ?></button>
             </form>
    </div>
  </div>
 </section> 
<?php 
    require_once 'template/footer.php';
?>    