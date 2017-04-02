<div class="container fonsdirector">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Director</h1>               
            </div>
        </div> 
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="?ctl=director&act=modificar" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="nif" class="cols-sm-2 control-label">Nif</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card fa" aria-hidden="true"></i></span>
                            <input disabled type="text" class="form-control" name="nif" id="nif"  placeholder="Nif" value="<?php echo (isset($x) ? $x->getNif() : '') ?>"/>
                        </div>
                    </div>
                </div>

                <span id="errorDNI"></span>

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Nom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nom" id="nom"  placeholder="Nom" value="<?php echo (isset($x) ? $x->getNom() : '') ?>"/>
                        </div>
                    </div>
                </div>

                <span id="errorNom"></span>

                <div class="form-group">
                    <label for="cognom" class="cols-sm-2 control-label">Cognom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="cognom" id="cognom"  placeholder="Cognom" value="<?php echo (isset($x) ? $x->getCognom() : '') ?>"/>
                        </div>
                    </div>
                </div>           

                <span id="errorCogom"></span>

                <div class="form-group ">
                    <input type="submit" name="submit" value="Guardar" class="btn btn-danger btn-lg btn-block login-button"></input>
                </div>

                <span id="errorFormulari"></span>

            </form>
        </div>
        <div class="espaibot"></div>
    </div>
</div>

