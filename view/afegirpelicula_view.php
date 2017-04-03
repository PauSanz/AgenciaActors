<<<<<<< HEAD
<?php
include('mostrar_selects.php');
?>

<div class="container fonspeli ">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Pel·lícula</h1>

            </div>
        </div> 
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="?ctl=pelicula&act=afegir" enctype='multipart/form-data'>

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

                <div class="form-group">
                    <label for="tipus" class="cols-sm-2 control-label">Tipus</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-film fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="tipus" id="tipus"  placeholder="Tipus" value="<?php echo (isset($x) ? $x->tipus : '') ?>"/>
                        </div>
                        <span id="errorTipus"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="datainici" class="cols-sm-2 control-label">Data Inici</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="datainici" id="datainici"  placeholder="DD/MM/YYYY" value="<?php echo (isset($x) ? $x->dataInici : '') ?>"/>
                        </div>
                        <span id="errorDataInici"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="datafi" class="cols-sm-2 control-label">Data Fi</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="datafi" id="datafi"  placeholder="DD/MM/YYYY" value="<?php echo (isset($x) ? $x->dataFi : '') ?>"/>
                        </div>
                        <span id="errorDataFi"></span>
                    </div>
                </div>

                <span id="errorIntervalDates"></span>

                <div class="form-group">
                    <label for="foto" class="cols-sm-2 control-label">Foto</label>
                    <div class="inputWrapper">
                        <span class="input-group-addon"><i class="fa fa-image fa" aria-hidden="true"></i>
                            <input class="fileInput" id="imatge" type="file" name="fotoPujada" src="<?php echo (isset($x) ? $x->foto : '') ?>"/>
                        </span>
                    </div>
                </div>
                <span id="errorImg"></span>
                <div class="form-group">
                    <label for="descripcio" class="cols-sm-2 control-label">Descripció</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i></span>
                            <textarea name="descripcio" rows="5" cols="30" class="form-control colornegre" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"><?php echo (isset($x) ? $x->descripcio : '') ?></textarea>
                        </div>
                        <span id="errorDescripcio"></span>
                    </div>
                </div>
                <!--                Select-->

                <div class="form-group ">
                    <label for="director" class="cols-sm-2 control-label">Director</label>
                    <div class="cols-sm-10">
                        <div class="input-group select">
                            <span class="input-group-addon"><i class="fa fa-bullhorn fa-lg" aria-hidden="true"></i></span>
                            <?php mostrarDirectors(); ?>
                        </div>
                    </div>
                </div>

                <!--                Select-->







                <div class="form-group">
                    <label>Valoració</label>
                    <p class="clasificacion">                        
                        <input id="radio1" name="estrellas" value="5" type="radio">
                        <label class="star" for="radio1">★</label>
                        <input id="radio2" name="estrellas" value="4" type="radio">
                        <label class="star" for="radio2">★</label>
                        <input id="radio3" name="estrellas" value="3" type="radio">
                        <label class="star" for="radio3">★</label>
                        <input id="radio4" name="estrellas" value="2" type="radio">
                        <label class="star" for="radio4">★</label>
                        <input id="radio5" name="estrellas" value="1" type="radio">
                        <label class="star" for="radio5">★</label>
                    </p>
                </div>
                <div class="form-group ">
                    <input id="botoGuardar" type="submit" name="submit" value="Guardar" class="btn btn-danger btn-lg btn-block login-button"></input>
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
                <h1 class="title">Pel·lícula</h1>

            </div>
        </div> 
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="?ctl=pelicula&act=afegir" enctype='multipart/form-data'>

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

                <div class="form-group">
                    <label for="tipus" class="cols-sm-2 control-label">Tipus</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-film fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="tipus" id="tipus"  placeholder="Tipus" value="<?php echo (isset($x) ? $x->tipus : '') ?>"/>
                        </div>
                        <span id="errorTipus"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="datainici" class="cols-sm-2 control-label">Data Inici</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="datainici" id="datainici"  placeholder="DD/MM/YYYY" value="<?php echo (isset($x) ? $x->dataInici : '') ?>"/>
                        </div>
                        <span id="errorDataInici"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="datafi" class="cols-sm-2 control-label">Data Fi</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="datafi" id="datafi"  placeholder="DD/MM/YYYY" value="<?php echo (isset($x) ? $x->dataFi : '') ?>"/>
                        </div>
                        <span id="errorDataFi"></span>
                    </div>
                </div>

                <span id="errorIntervalDates"></span>

                <div class="form-group">
                    <label for="foto" class="cols-sm-2 control-label">Foto</label>
                    <div class="inputWrapper">
                        <span class="input-group-addon"><i class="fa fa-image fa" aria-hidden="true"></i>
                            <input class="fileInput" id="imatge" type="file" name="fotoPujada" src="<?php echo (isset($x) ? $x->foto : '') ?>"/>
                        </span>
                    </div>
                </div>
                <span id="errorImg"></span>
                <div class="form-group">
                    <label for="descripcio" class="cols-sm-2 control-label">Descripció</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i></span>
                            <textarea name="descripcio" rows="5" cols="30" class="form-control colornegre" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"><?php echo (isset($x) ? $x->descripcio : '') ?></textarea>
                        </div>
                        <span id="errorDescripcio"></span>
                    </div>
                </div>
                <!--                Select-->

                <div class="form-group ">
                    <label for="director" class="cols-sm-2 control-label">Director</label>
                    <div class="cols-sm-10">
                        <div class="input-group select">
                            <span class="input-group-addon"><i class="fa fa-bullhorn fa-lg" aria-hidden="true"></i></span>
                            <?php mostrarDirectors(); ?>
                        </div>
                    </div>
                </div>

                <!--                Select-->







                <div class="form-group">
                    <label>Valoració</label>
                    <p class="clasificacion">                        
                        <input id="radio1" name="estrellas" value="5" type="radio">
                        <label class="star" for="radio1">★</label>
                        <input id="radio2" name="estrellas" value="4" type="radio">
                        <label class="star" for="radio2">★</label>
                        <input id="radio3" name="estrellas" value="3" type="radio">
                        <label class="star" for="radio3">★</label>
                        <input id="radio4" name="estrellas" value="2" type="radio">
                        <label class="star" for="radio4">★</label>
                        <input id="radio5" name="estrellas" value="1" type="radio">
                        <label class="star" for="radio5">★</label>
                    </p>
                </div>
                <div class="form-group ">
                    <input id="botoGuardar" type="submit" name="submit" value="Guardar" class="btn btn-danger btn-lg btn-block login-button"></input>
                </div>
                <span id="errorFormulari"></span>

            </form>
        </div>
        <div class="espaibot"></div>
    </div>
</div>

>>>>>>> master
