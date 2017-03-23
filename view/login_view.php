<div id="containerLogin" class="login-page">
    <div class="form">
        <form class="register-form" >
            <input type="text" placeholder="nom " name="user"/>
            <input id="password1" type="password" placeholder="contrasenya" name="password1"/>
            <input id="password2" type="password" placeholder="confirma contrasenya" name="password2"/>
             <div id="message"></div>
            <input type="submit" class="button" value="Crear usuari"></input> <!--  input submit-->
            <p class="message">Ja estàs registrat? <a href="#">Cancelar</a></p>
        </form>
        <form class="login-form" action="?ctl=session&act=create" method="post">
<<<<<<< HEAD
            <input type="text" placeholder="username" name="user"/>
            <input type="password" placeholder="password" name="password"/>
<<<<<<< HEAD
<<<<<<< HEAD
=======
            <input type="text" placeholder="nom" name="user"/>
            <input type="password" placeholder="contrasenya" name="password"/>
>>>>>>> master
            <div class="login_msg"><?php echo (isset($_REQUEST['msg'])) ? $_REQUEST['msg'] : ''?></div>
=======
>>>>>>> master
=======
            <div class="login_msg"><?php echo (isset($_REQUEST['msg'])) ? $_REQUEST['msg'] : ''?></div>
>>>>>>> master
            <input type="submit" class="button" value="Iniciar Sessió"></input> <!--  input submit-->
            <p class="message">No estàs registrat? <a href="#">crear un compte</a></p>
            <!-- controller de crear cuenta -->
        </form>
    </div>
</div>
