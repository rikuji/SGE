<?php
    include 'template/header.php';
    include 'template/menu.php';
    
   $professor = new Professor();
   $professorDAO = new ProfessorDAO();
   
   $tipoUsuario = TipoUsuarioDAO::listarTipoUsuario();

if(isset($_GET['idProfessor']))
{
  $professor->setIdProfessor($_GET['idProfessor']);

  $acao = "Editar";
}else
  {
      $acao = "Cadastrar";
  }
?>

<div class="content-inner">
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
            <form action="salvaProfessor.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal col-sm-12">
              <div class="form-group row">
                        <label class="form-control-label" for="nomeProfessor">Nome:
                        </label>
                         <div class="col-sm-5">
                             <input type="text" name="nomeProfessor" id="nomeProfessor"class="form-control" required="" value="<?php echo $professor->getNomeProfessor();?>"/>
                              <input type="hidden" id="idProfessor" value="<?php echo $professor->getIdProfessor();?>"/>
                        </div>
                          <div class="form-group row">
                             <label class="col-sm-1 form-control-label" for="cpfProfessor">CPF:</label>
                                <div class="col-sm-6">
                                  <input type="text" size="20" maxlength="14"  name="cpfProfessor" id="cpfProfessor" class="form-control cpf" required="s"value="<?php echo $professor->getCpfProfessor();?>"/>
                              </div>
                        </div>
                  </div>
                    <div class="form-group row">
                        <label class="form-control-label" for="sexoProfessor">Sexo:
                        </label>
                          <div class="col-sm-2">
                              <select name="sexoProfessor" id="sexoProfessor" value="sexoProfessor">
                                  <option value="F">Feminino</option>
                                  <option value="M">Masculino</option>
                              </select value="<?php echo $professor->getSexoProfessor();?>">
                           </div>
                         <div class="form-group row">
                            <label class="form-control-label" for="emailProfessor">Email:</label>
                                <div class="col-sm-9">
                                  <input type="emailProfessor" name="emailProfessor" id="emailProfessor" class="form-control" value="<?php echo $professor->getEmailProfessor();?>" />
                              </div>
                        </div>
                     </div>

                     <div class="form-group row">
                          <label class=" form-control-label" for="matutino">Matutino:
                          </label>
                            <div class="col-sm-3">
                                <select name="matutino"id="matutino" >
                                  <option value="S">Sim</option>
                                  <option value="N">Não</option>
                                </select value="<?php echo $professor->getMatutino();?>">
                            </div>
                                <div class="form-group row">
                                <label class="form-control-label" for="vespertino">Vespertino:</label>
                                    <div class="col-sm-1">
                                         <select name="vespertino"id="vespertino" >
                                          <option value="S">Sim</option>
                                          <option value="N">Não</option>
                                        </select value="<?php echo $professor->getVespertino(); ?>">
                                    </div>  
                              </div>
                                   <div class="form-group row">
                                  <label class="form-control-label" for="noturno">Noturno:</label>
                                    <div class="col-sm-1">
                                        <select name="noturno" id="noturno" >
                                          <option value="S">Sim</option>
                                          <option value="N">Não</option>
                                          </select value="<?php echo $professor->getNoturno(); ?>">
                                      </div>
                                </div>
                        </div>
                          <div class="form-group row">
                            <label class="form-control-label" for="registroProfessor">Registro de Professor(a):</label>
                                <div class="col-sm-2">
                                  <input type="text" maxlength="6" name="registroProfessor" id="registroProfessor" class="form-control"required=""value="<?php echo $professor->getRegistroProfessor(); ?>"/>
                              </div>
                                <div class="form-group row"> 
                                  <label class="col-sm-2 form-control-label" for="senhaProfessor">Senha:</label>
                                  <div class="col-sm-6"> 
                                    <input type="password" maxlength="35"name="senhaProfessor"id="senhaProfessor" class="form-control"required=""value="<?php echo $professor->getSenhaProfessor(); ?>"/>
                                  </div>
                              </div>
                                    <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label" for="idTipoUsuario">Tipo Usuario:</label>
                                      <div class="col-sm-3"> 
                                         <input type="number" name="idTipoUsuario"id="idTipoUsuario" class="form-control"required=""value="<?php echo $professor->getIdTipoUsuario(); ?>"/>
                                      </div>
                                </div>
                      </div>
                      <button type="submit" class="btn btn-warning pull-right">     <?php echo $acao; ?>
                          </button>
            </form>
          </div>
      </div>
    </div>
  </section>
</div>
<?php 
require_once 'template/footer.php';
?>







