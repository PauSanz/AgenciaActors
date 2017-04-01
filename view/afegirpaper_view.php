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
            <form class="form-horizontal" method="post" action="?ctl=paper&act=afegir" enctype='multipart/form-data'>

                <div class="form-group">
                    <label for="nom" class="cols-sm-2 control-label">Nom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nom" id="name"  placeholder="Nom" value="<?php echo (isset($x) ? $x->nom : '') ?>"/>
                        </div>
                        <span id="errorNom"></span>
                    </div>
                </div>

                
                <!--                Select-->

                <div class="form-group ">
                    <label for="actor" class="cols-sm-2 control-label">Actor</label>
                    <div class="cols-sm-10">
                        <div class="input-group select">
                            <span class="input-group-addon"><i class="fa fa-bullhorn fa-lg" aria-hidden="true"></i></span>
                            <?php mostrarActors(); ?>
                        </div>
                    </div>
                </div>
                
                <div class="form-group ">
                    <label for="pelicula" class="cols-sm-2 control-label">Pel·licula</label>
                    <div class="cols-sm-10">
                        <div class="input-group select">
                            <span class="input-group-addon"><i class="fa fa-bullhorn fa-lg" aria-hidden="true"></i></span>
                            <?php mostrarPelis(); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" name="submit" value="Guardar" class="btn btn-danger btn-lg btn-block login-button"></input>
                </div> 

            </form>
        </div>
        <div class="espaibot"></div>
    </div>
</div>

