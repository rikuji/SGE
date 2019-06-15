<?php 
include 'template/header.php';
include 'template/menu.php';  

    $responsavel = new Responsavel();
    $responsavelDAO = new ResponsavelDAO();
    $estadoCivil = new EstadoCivil();

     if(isset($_GET['idResponsavel'])){

        $responsavel->setIdResponsavel($_GET['idResponsavel']);

        $acao = "Editar";

        }else{
          $acao = "Cadastrar";
        
        }

?>

<div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">.:Cadastro de Responsavel:.</h2>
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
                        <form action="salvaResponsavel.php?acao=<?php echo $acao; ?>" method="POST"
                            class="form-horizontal col-lg-12">

                            <div class="form-group row">
                                <label class="form-control-label" for="nomeResponsavel">Nome:</label>
                                <div class="col-sm-5">
                                    <input type="text" name="nomeResponsavel" id="nomeResponsavel" class="form-control"
                                        value="<?php echo $responsavel->getNomeResponsavel();?>" />
                                    <input type="hidden" name="idResponsavel" id="idResponsavel"
                                        value="<?php echo $responsavel->getIdResponsavel(); ?>"></input>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-1 form-control-label" for="cpfResponsavel">CPF:</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="cpfResponsavel" id="cpfResponsavel"
                                            class="form-control" required=""
                                            value="<?php echo $responsavel->getCpfResponsavel();?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class=" form-control-label" for="emailResponsavel">Email:</label>
                                <div class="col-sm-5">
                                    <input type="email" name="emailResponsavel" id="emailResponsavel"
                                        class="form-control" required=""
                                        value="<?php echo $responsavel->getEmailResponsavel();?>" />
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label"
                                        for="celullarResponsavel">Celular:</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="celullarResponsavel" id="celullarResponsavel"
                                            class="form-control" required=""
                                            value="<?php echo $responsavel->getCelullarResponsavel();?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label " class=" form-control-label" for="telFixoResponsavel">Telefone:</label>
                                <div class="col-sm-3">
                                    <input type="text" name="telFixoResponsavel" id="telFixoResponsavel"
                                        class="form-control" required=""
                                        value="<?php echo $responsavel->getTelFixoResponsavel();?>" />
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label" for="dtNascResponsavel">Data
                                        Nascimento:</label>
                                    <div class="col-sm-">
                                        <input type="date" name="dtNascResponsavel" id="dtNascResponsavel"
                                            placeholder="dd/mm/aaaa" class="form-control" required=""
                                            value="<?php echo $responsavel->getDtNascResponsavel();?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm- form-control-label" for="sexoResponsavel">Sexo:</label>
                                <div class="col-sm-2">
                                    <select "value=" <?php echo $responsavel->getSexoResponsavel();?>"
                                        name="sexoResponsavel" id="sexoResponsavel">
                                        <option value="F">Feminino</option>
                                        <option value="M">Masculino</option>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm- form-control-label"
                                        for="logradouroEndeResponsavel">Logradouro:</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="logradouroEndeResponsavel"
                                            id="logradouroEndeResponsavel" class="form-control" required=""
                                            value="<?php echo $responsavel->getLogradouroEndeResponsavel(); ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm- form-control-label"
                                    for="complementoEndeResponsavel">Complemento:</label>
                                <div class="col-sm-4">
                                    <input type="text" name="complementoEndeResponsavel" id="complementoEndeResponsavel"
                                        class="form-control" required=""
                                        value="<?php echo $responsavel->getComplementoEndeResponsavel(); ?>" />
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label"
                                        for="bairroEndeResponsavel">Bairro:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="bairroEndeResponsavel" id="bairroEndeResponsavel"
                                            class="form-control" required=""
                                            value="<?php echo $responsavel->getBairroEndeResponsavel(); ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class=" form-control-label" for="cidade">Cidade:</label>
                                <div class="col-sm-3">
                                    <input type="text" name="cidadeEndeResponsavel" id="cidadeEndeResponsavel"
                                        class="form-control" required=""
                                        value="<?php echo $responsavel->getCidadeEndeResponsavel(); ?>" />
                                </div>

                                <div class="form-group row">
                                    <label " class=" col-sm-1 form-control-label" for="cepEndeResponsavel">CEP:</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="cepEndeResponsavel" id="cepEndeResponsavel"
                                            class="form-control" required=""
                                            value="<?php echo $responsavel->getCepEndeResponsavel(); ?>"
                                            placeholder="EX:00.123.456" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="form-control-label" for="numeroEndeResponsavel">Numero:</label>
                                <div class="col-sm-2">
                                    <input type="text" name="numeroEndeResponsavel" id="numeroEndeResponsavel"
                                        class="form-control" required=""
                                        value="<?php echo $responsavel->getNumeroEndeResponsavel(); ?>" />
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-1 form-control-label" for="ufEndeResponsavel">UF:</label>
                                    <div class="col-sm-8">
                                        <select "value=" <?php echo $responsavel->getUfEndeResponsavel();?>"
                                            id="ufEndeResponsavel" name="ufEndeResponsavel">
                                            <option value="ac">Ac</option>
                                            <option value="al">Al</option>
                                            <option value="ap">Ap</option>
                                            <option value="am">Am</option>
                                            <option value="ba">Ba</option>
                                            <option value="ce">Ce</option>
                                            <option value="df">DF</option>
                                            <option value="es">Es</option>
                                            <option value="go">Go</option>
                                            <option value="ma">Ma</option>
                                            <option value="mt">Mt</option>
                                            <option value="ms">Ms</option>
                                            <option value="mg">Mg</option>
                                            <option value="pa">Pa</option>
                                            <option value="pb">Pb</option>
                                            <option value="pr">Pr</option>
                                            <option value="pe">Pe</option>
                                            <option value="pi">Pi</option>
                                            <option value="rj">Rj</option>
                                            <option value="rn">Rn</option>
                                            <option value="rs">Rs</option>
                                            <option value="ro">Ro</option>
                                            <option value="rr">Rr</option>
                                            <option value="sc">SC</option>
                                            <option value="sp">SP</option>
                                            <option value="se">SE</option>
                                            <option value="to">TO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-control-label" for="idTipoUsuario">Tipo Usuario:</label>
                                <div class="col-sm-2">
                                    <select "value=" <?php echo $responsavel->getIdTipoUsuario();?>" id="idTipoUsuario"
                                        name="idTipoUsuario">
                                        <option value="1">Secretaria</option>
                                        <option value="2">Professor</option>
                                        <option value="3">Aluno</option>
                                        <option value="4">Responsavel</option>
                                    </select>
                                </div>


                                <div class="form-group row">
                                    <label class="form-control-label" for="idEstadoCivil">Estado Civil:</label>
                                    <div class="col-sm-9">
                                        <select "value=" <?php echo $estadoCivil->getIdEstadoCivil();?>"
                                            id="idEstadoCivil" name="idEstadoCivil">
                                            <option value="1">Solteiro</option>
                                            <option value="2">Casado</option>
                                            <option value="3">Viúvo</option>
                                            <option value="4">Divorciado</option>
                                            <option value="5">União Estavel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="form-control-label" for="legalResponsavel">Legal:</label>
                                <div class="col-sm-2">
                                    <select "value=" <?php echo $responsavel->getLegalResponsavel(); ?>"
                                        id="legalResponsavel" name="legalResponsavel">
                                        <option value="S">Sim</option>
                                        <option value="N">Não</option>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label"
                                        for="financeiroResponsavel">Financeiro:</label>
                                    <div class="col-sm-6">
                                        <select "value=" <?php echo $responsavel->getFinanceiroResponsavel();?>"
                                            id="financeiroResponsavel" name="financeiroResponsavel">
                                            <option value="S">Sim</option>
                                            <option value="N">Não</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="form-control-label" for="senhaResponsavel">Senha:</label>
                                <div class="col-sm-4">
                                    <input type="password" name="senhaResponsavel" id="senhaResponsavel"
                                        class="form-control" required=""
                                        value="<?php echo $responsavel->getSenhaResponsavel(); ?>" />
                                </div>
                            </div>

                            <button type="submit" class="btn btn-warning pull-right"><?php echo $acao; ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</section>
<?php include 'template/footer.php' ?>
</div>
