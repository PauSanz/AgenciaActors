<div class="container marginb">
    <div class="panel-heading">
        <div class="panel-title text-center">
            <h1 class="title">Actor</h1>
            <hr/>
        </div>
    </div> 
    <div class="row main">
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="?ctl=actor&act=afegir">
                <div class="form-group">
                    <label for="nif" class="cols-sm-2 control-label">Nif</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nif" id="nif"  placeholder="Nif"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Nom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nom" id="nom"  placeholder="Nom"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="cognom" class="cols-sm-2 control-label">Cognom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="cognom" id="cognom"  placeholder="Cognom"/>
                        </div>
                    </div>
                </div>
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

                <div class="form-group">
                    <label for="foto" class="cols-sm-2 control-label">Foto</label>
                    <div class="inputWrapper">
                        <span class="input-group-addon"><i class="fa fa-image fa" aria-hidden="true"></i>
                        <input class="fileInput" type="file" name="file1"/>
                        </span>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" name="submit" value="Guardar" class="btn btn-danger btn-lg btn-block login-button"></input>
                </div>                     
            </form>
        </div>
    </div>
</div>

