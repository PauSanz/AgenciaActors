<<<<<<< HEAD
<?php
include('mostrar_selects.php');
?>

<div class="container fonspeli ">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Paper</h1>

            </div>
        </div> 
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="?ctl=paper&act=modificar" enctype='multipart/form-data'>

                <div class="form-group">
                    <label for="idPeli" class="cols-sm-2 control-label">ID</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card fa" aria-hidden="true"></i></span>
                            <input readonly="<?php echo $x->getIdPaper() ?>" type="text" class="form-control" name="idPaper" id="idPaper"   value="<?php echo (isset($x) ? $x->getIdPaper() : '') ?>"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nom" class="cols-sm-2 control-label">Nom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nom" id="nomPaper"  placeholder="Nom" value="<?php echo (isset($x) ? $x->getNom() : '') ?>"/>
                        </div>
                    </div>
                </div>

                <span id="errorNom"></span>

                <!--                Select-->

                <div class="form-group ">
                    <label for="actor" class="cols-sm-2 control-label">Actor</label>
                    <div class="cols-sm-10">
                        <div class="input-group select">
                            <span class="input-group-addon"><i class="fa fa-bullhorn fa-lg" aria-hidden="true"></i></span>
                            <?php mostrarActors($x->getIdActor()); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="pelicula" class="cols-sm-2 control-label">Pel·licula</label>
                    <div class="cols-sm-10">
                        <div class="input-group select">
                            <span class="input-group-addon"><i class="fa fa-bullhorn fa-lg" aria-hidden="true"></i></span>
                            <?php mostrarPelis($x->getIdPelicula()); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" id="botoGuardarPaper" name="submit" value="Guardar" class="btn btn-danger btn-lg btn-block login-button"></input>
                </div> 

                <span id="errorFormulari"></span>

            </form>
        </div>
        <div class="espaibot"></div>
    </div>
</div>

=======
<?php
include('mostrar_selects.php');
?>

<div class="container fonspeli ">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Paper</h1>

            </div>
        </div> 
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="?ctl=paper&act=modificar" enctype='multipart/form-data'>

                <div class="form-group">
                    <label for="idPeli" class="cols-sm-2 control-label">ID</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card fa" aria-hidden="true"></i></span>
                            <input readonly="<?php echo $x->getIdPaper() ?>" type="text" class="form-control" name="idPaper" id="idPaper"   value="<?php echo (isset($x) ? $x->getIdPaper() : '') ?>"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nom" class="cols-sm-2 control-label">Nom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nom" id="nomPaper"  placeholder="Nom" value="<?php echo (isset($x) ? $x->getNom() : '') ?>"/>
                        </div>
                    </div>
                </div>

                <span id="errorNom"></span>

                <!--                Select-->

                <div class="form-group ">
                    <label for="actor" class="cols-sm-2 control-label">Actor</label>
                    <div class="cols-sm-10">
                        <div class="input-group select">
                            <span class="input-group-addon"><i class="fa fa-bullhorn fa-lg" aria-hidden="true"></i></span>
                            <?php mostrarActors($x->getIdActor()); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="pelicula" class="cols-sm-2 control-label">Pel·licula</label>
                    <div class="cols-sm-10">
                        <div class="input-group select">
                            <span class="input-group-addon"><i class="fa fa-bullhorn fa-lg" aria-hidden="true"></i></span>
                            <?php mostrarPelis($x->getIdPelicula()); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" id="botoGuardarPaper" name="submit" value="Guardar" class="btn btn-danger btn-lg btn-block login-button"></input>
                </div> 

                <span id="errorFormulari"></span>

            </form>
        </div>
        <div class="espaibot"></div>
    </div>
</div>

>>>>>>> master
