<div id="containerLogin" class="login-page">
    <div class="form">
        <form class="register-form">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <button>Crear compte</button> <!--  input submit-->
            <p class="message">Ja estàs registrat? <a href="#">Iniciar Sessió</a></p>
        </form>
        <form class="login-form" action="?ctl=session&act=create">
            <input type="text" placeholder="username"/>
            <input type="password" placeholder="password"/>
            <button>Iniciar Sessió</button> <!--  input submit-->
            <p class="message">No estàs registrat? <a href="#">crear un compte</a></p>
            <!-- controller de crear cuenta -->
        </form>
    </div>
</div>