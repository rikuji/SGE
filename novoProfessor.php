<?php
require_once "template/header.php";
require_once "template/menu.php";

$id = $_GET["idProfessor"];
$professor = new Professor();
$professorDAO = new ProfessorDAO();

$query = $professorDAO->listarPorIdProfessor($id);

foreach ($query as $result){
    $professor->setIdProfessor($result["idProfessor"]);
    $professor->setNomeProfessor($result["nomeProfessor"]); 
    $professor->setCpfProfessor($result["cpfProfessor"]); 
    $professor->setSexoProfessor($result["sexoProfessor"]);
    $professor->setEmailProfessor($result["emailProfessor"]); 
    $professor->setMatutino($result["matutino"]);
    $professor->setVespertino($result["vespertino"]);
    $professor->setNoturno($result["noturno"]);
    $professor->setRegistroProfessor($result["registroProfessor"]);
    $professor->setSenhaProfessor($result["senhaProfessor"]); 
    $professor->setIdTipoUsuario($result["idTipoUsuario"]);  
}

$acao = "Editar";

?>
<div class="content-inner">
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">.:Formulario de Edição:.</h2>
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
                    <a href="javascript:history.back(-1)" class="btn btn-info col-sm-2" style="background-color: #0b56a6;">Voltar</a>
                </div> 
            </div>
        </div>
        <!--form elements-->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="h4">.:Editar Professor:.</h3>
                </div>
                <div class="card-body">

                    <form action="salvaProfessor.php?acao=<?php echo $acao; ?>" method="POST"
                        class="form-horizontal col-sm-12">
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
                                           <input type="text" maxlength="11"  name="cpfProfessor" id="cpfProfessor" class="form-control cpf" required="s"value="<?php echo $professor->getCpfProfessor();?>"/>
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
                                     <label class="col-sm-1 form-control-label" for="emailProfessor">Email:</label>
                                        <div class="col-sm-12">
                                          <input type="text" name="emailProfessor" id="emailProfessor"class="form-control" required="" value="<?php echo $professor->getEmailProfessor();?>"/>
                                        </div>
                                  </div>
                            </div>
                                <div class="form-group row">
                                  <label class=" form-control-label" for="matutino">
                                  Matutino:</label>
                                    <div class="col-sm-2">
                                      <select name="matutino"id="matutino" >
                                        <option value="S">Sim</option>
                                        <option value="N">Não</option>
                                       </select value="<?php echo $professor->getMatutino();?>">
                                    </div>
                                        <div class="form-group row">
                                          <label class=" form-control-label" for="vespertino">
                                          Vespertino:</label>
                                            <div class="col-sm-7">
                                              <select name="vespertino"id="vespertino" >
                                                <option value="S">Sim</option>
                                                <option value="N">Não</option>
                                              </select value="<?php echo $professor->getVespertino();?>">
                                            </div> 
                                        </div>
                                </div>
                                     <div class="form-group row">
                                       <label class="form-control-label"for="noturno">Noturno:</label>
                                          <div class="col-sm-2">
                                            <select name="noturno" id="noturno" >
                                             <option value="S">Sim</option>
                                              <option value="N">Não</option>
                                            </select value="<?php echo $professor->getNoturno(); ?>">
                                          </div>
                                          <div class="form-group row">
                                            <label class="form-control-label" for="registroProfessor">
                                            Registro de Professor(a):</label>
                                              <div class="col-sm-4">
                                                <input type="text" maxlength="7" name="registroProfessor" id="registroProfessor" class="form-control"required=""value="<?php echo $professor->getRegistroProfessor(); ?>"/>
                                              </div>
                                          </div>
                                      </div>
                                          <div class="form-group row"> 
                                              <label class="form-control-label" for="senhaProfessor">Senha:</label>
                                                <div class="col-sm-3"> 
                                                    <input type="password" maxlength="20"name="senhaProfessor"id="senhaProfessor" class="form-control"required=""value="<?php echo $professor->getSenhaProfessor(); ?>"/>
                                                  </div>
                                              </div>
                                            <div class="form-group row"> 
                                              <label class="form-control-label" for="idTipoUsuario">Tipo Usuario:</label>
                                                <div class="col-sm-4"> 
                                                    <select name="idTipoUsuario" id="idTipoUsuario" value="idTipoUsuario">
                                                  <option value="1">Secretaria</option>
                                                  <option value="2">Professor</option>
                                                  <option value="3">Aluno</option>
                                                  <option value="4">Responsavel</option>
                                                  </select value="<?php echo $professor->getIdTipoUsuario();?>">
                                                </div>
                                            </div>
                        <button type="submit" class="btn btn-info pull-right">
                            <?php echo $acao; ?>
                        </button>
                    </form>
                </div>
            </div>
    </section>
    <?php include 'template/footer.php'; ?>
</div>