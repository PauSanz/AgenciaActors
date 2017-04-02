<div class="container fonsactor">
    <div class="panel-heading">
        <div class="panel-title text-center">
            <h1 class="title">Actor</h1>           
        </div>
    </div> 
    <div class="row main">
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="?ctl=actor&act=modificar" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nif" class="cols-sm-2 control-label">Nif</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nif" id="nif"  placeholder="Nif" value="<?php echo (isset($x) ? $x->getNif() : '') ?>"/>
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

                <!--                Select-->
                <div class="form-group ">
                    <label for="descripcio" class="cols-sm-2 control-label">Genere</label>
                    <div class="cols-sm-10">
                        <div class="input-group select">
                            <span class="input-group-addon"><i class="fa fa-venus-mars fa-lg" aria-hidden="true"></i></span>
                            <select name="genere">
                                <option value="home">Home</option>
                                <option value="dona">Dona</option>
                                <option value="altres">Altres</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" name="submit" value="Guardar" class="btn btn-danger btn-lg btn-block login-button"></input>
                </div>

                <span id="errorFormulari"></span>

            </form>
        </div>
        <div class="espaibot"></div>
    </div>
</div>

