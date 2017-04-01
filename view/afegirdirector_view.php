<div class="container fonsdirector">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Director</h1>               
            </div>
        </div> 
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="?ctl=director&act=afegir" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="nif" class="cols-sm-2 control-label">Nif</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nif" id="nif"  placeholder="Nif"/>
                        </div>
                    </div>
                </div>

                <span id="errorDNI"></span>

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Nom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nom" id="nom"  placeholder="Nom"/>
                        </div>
                    </div>
                </div>

                <span id="errorNom"></span>

                <div class="form-group">
                    <label for="cognom" class="cols-sm-2 control-label">Cognom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="cognom" id="cognom"  placeholder="Cognom"/>
                        </div>
                    </div>
                </div>            

                <span id="errorCogom"></span>

                <div class="form-group">
                    <label for="foto" class="cols-sm-2 control-label">Foto</label>
                    <div class="inputWrapper">
                        <span class="input-group-addon"><i class="fa fa-image fa" aria-hidden="true"></i>
                            <input class="fileInput" id="imatge" type="file" name="fotoPujada"/>
                        </span>
                    </div>
                </div>

                <span id="errorImg"></span>

                <div class="form-group ">
                    <input type="submit" id="botoGuardar" name="submit" value="Guardar" class="btn btn-danger btn-lg btn-block login-button"></input>
                </div>

                <span id="errorFormulari"></span>
            </form>
        </div>
        <div class="espaibot"></div>
    </div>
</div>

