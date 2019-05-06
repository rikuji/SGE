<?php require_once "template/header.php";
	  require_once "template/menu.php";		
 
	  $estadoCivilDAO = new EstadoCivilDAO();
	  $estadoCivil = new EstadoCivil(); 
 
if (isset($_GET['IdEstadoCivil']))
{ 

    $estadoCivil->setIdEstadoCivil($_GET['IdEstadoCivil']);

    $estadoCivil = $estadoCivilDAO->procurar($estadoCivil->getIdEstadoCivil());

    $acao = 'Editar';
  } else if (isset($_GET['acao']) && $_GET_['acao'] == 'Vizualizar') {
    
    $acao = "Vizualizar";
  } 
else
  {
    $acao = 'Cadastrar';

  }


if (isset($_POST['pesquisa'])){
    $query = $estadoCivilDAO->listar($_POST['pesquisa']);
  } 
else
  {
        $query = $estadoCivilDAO->listar();
    }
?>
 <div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">.:Formulário de Estado Civil:.</h2>
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
                    <a href="javascript:history.back(-1)" class="btn btn-warning col-sm-2" style="margin-left: auto;">Voltar</a>
                  </div>
              </div>
            </div>


            <!-- Form Elements -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">.:Cadastro de Estado Civil:.</h3>
                    </div>
                    <div class="card-body">

                        <form action="salvaEstadoCivil.php?acao=<?php echo $acao; ?>" method="POST" class="form-horizontal">

                         <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Descrição:</label>
                                <div class="col-sm-9">
                                    <input type="text"  name="descricaoEstadoCivil" id="descricaoEstadoCivil"class="form-control" required autofocus value="<?php echo $estadoCivil->getDescricaoEstadoCivil() ?>">
                                    <input type="hidden" name="idEstadoCivil" id="idEstadoCivil" class="form-control" value="<?php echo $estadoCivil->getIdEstadoCivil(); ?>">        
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <div class="col-sm-4 offset-sm-3">
                                    <button type="submit" class="btn btn-primary"><?php echo $acao; ?></button>
                                </div>
                            </div>

                        </form> <!-- fim formulario -->
                    </div>
                </div>
            </div>
<div class="card-header d-flex align-items-center">
                        <h3 class="h4">.:Lista de Estado Civil:.</h3>
                    </div>
    <div class=" card card-body">
                <table class="table table-striped table-hover">
            <thead>
                          <tr>
                              <th>Descrição</th>
                              <th>Ação</th>
                            </tr>
                        </thead>
                                 <tbody>
                          <?php foreach($query AS $estadoCivil){ ?>
                            <tr>
                              <td><?php echo $estadoCivil->getDescricaoEstadoCivil(); ?></td>
                              <td>
 
                                <a href="novoEstadoCivil.php?acao=Editar&idEstadoCivil=<?php echo $estadoCivil->getIdEstadoCivil(); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar">
                                  <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                    <a class="btn btn-danger" onclick="return excluir('salvaEstadoCivil.php?acao=Deletar&idEstadoCivil=<?php echo $estadoCivil->getIdEstadoCivil(); ?>')" data-toggle="tooltip" data-placement="top" title="Deletar">
                                     <div class="fa fa-trash-o" aria-hidden="true" ></div>
                                </a>
                              </td>
                            </tr>
                            <?php } ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

  </div>
</section>

<?php
include ('template/footer.php');
?>