<?php require_once "template/header.php";
    require_once "template/menu.php";

    $responsavel = new Responsavel();
    $responsavelDAO = new ResponsavelDAO();

    if(isset($_GET['idResponsavel'])){

      $responsavel->setIdResponsavel($_GET['idResponsavel']);
      
      $responsavel = $responsavelDAO->procura($responsavel->getIdResponsavel());
      
      $acao = 'Editar';
    
    } else if (isset($_GET['acao']) && $_GET['acao'] == 'Vizualizar') {
      
      $acao  = 'Vizualizar';
    
    }
    else
    {
      $acao = 'Cadastrar';

    }
    if (isset($_POST['pesquisar'])){

  $query = $responsavelDAO->listar($_POST['pesquisa']);

}
else
{
  $query = $responsavelDAO->listarResposavel();
}
 ?>
<div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">.:Edita Responsavel:.</h2>
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
                        <a href="javascript:history.back(-1)" class="btn btn-warning col-sm-2"
                            style="margin-left: auto;">Voltar</a>
                    </div>
                </div>
            </div>



            <div class="card-header d-flex align-items-center">
                <h3 class="h4">.:Lista de Responsavel:.</h3>
            </div>
            <div class=" card card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Cpf</th>
                            <th>Celular</th>
                            <th>Resp.Fin</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($query AS $responsavel){  
                                $lista = $responsavelDAO->listarResposavel($responsavel);
                            ?>
                        <tr>
                            <td><?php echo $responsavel->getNomeResponsavel(); ?></td>
                            <td><?php echo $responsavel->getCpfResponsavel(); ?></td>
                            <td><?php echo $responsavel->getCelullarResponsavel();?></td>
                            <td><?php echo $responsavel->getFinanceiroResponsavel();?></td>
                            <td>

                                <a href="editaResponsavel.php?acao=Editar&idResponsavel=<?php echo $responsavel->getIdResponsavel(); ?>"
                                    class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="btn btn-danger"
                                    onclick="return excluir('salvaResponsavel.php?acao=Deletar&idResponsavel=<?php echo $responsavel->getIdResponsavel(); ?>')"
                                    data-toggle="tooltip" data-placement="top" title="Deletar">
                                    <div class="fa fa-trash-o" aria-hidden="true"></div>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <?php require_once "template/footer.php"; ?>
</div>
