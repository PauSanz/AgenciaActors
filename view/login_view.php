<div id="containerLogin" class="login-page fonslogin">
    <div class="form ">
        <form class="register-form">            
            <input type="text" placeholder="Nom" name="user"/>
            <input type="password" placeholder="Contrassenya" name="password"/>
            <input class="button" type="submit" value = "Iniciar compte"></input> <!--  input submit-->
            <p class="message">Ja estàs registrat? <a href="#">Iniciar Sessió</a></p>
        </form>
        <form class="login-form" action="?ctl=session&act=create" method="post">
            <input type="text" placeholder="Usuari" name="user"/>
            <input type="password" placeholder="Contrasenya" name="password"/>
            <div class="login_msg"><?php echo (isset($_REQUEST['msg'])) ? $_REQUEST['msg'] : ''?></div>
            <input type="submit" class="button" value="Iniciar Sessió"></input> <!--  input submit-->
            <p class="message">No estàs registrat? <a href="#">Crear un compte</a></p>
            <!-- controller de crear cuenta -->
        </form>
    </div>
</div>