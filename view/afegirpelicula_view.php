<div class="container marginb">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Pel·lícula</h1>
                <hr/>
            </div>
        </div> 
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="#">

                <div class="form-group">
                    <label for="nom" class="cols-sm-2 control-label">Nom</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nom" id="name"  placeholder="Nom"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tipus" class="cols-sm-2 control-label">Tipus</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-film fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="tipus" id="email"  placeholder="Tipus"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="datainici" class="cols-sm-2 control-label">Data Inici</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="datainici" id="username"  placeholder="DD/MM/YYYY"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="datafi" class="cols-sm-2 control-label">Data Fi</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="datafi" id="username"  placeholder="DD/MM/YYYY"/>
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


                <div class="form-group">
                    <label for="descripcio" class="cols-sm-2 control-label">Descripció</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i></span>
                            <textarea rows="5" cols="30" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                </div>

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
                    <button type="button" class="btn btn-danger btn-lg btn-block login-button">Guardar</button>
                </div>               
            </form>
        </div>
    </div>
</div>

