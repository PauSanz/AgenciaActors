<div class="login-page">
    <div class="form">
        <form class="register-form">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <button>create</button> <!--  input submit-->
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" action="?ctl=session&act=create">
            <input type="text" placeholder="username"/>
            <input type="password" placeholder="password"/>
            <button>login</button> <!--  input submit-->
            <p class="message">Not registered? <a href="#">Create an account</a></p>
            <!-- controller de crear cuenta -->
        </form>
    </div>
</div>