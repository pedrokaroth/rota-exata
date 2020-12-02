<?php $v->layout("_theme"); ?>

<div class="main_login">
    <article class="main_login_box">
        <header>
            <img src="<?= url("themes/rotaexata/assets/images/avatar.jpg") ?> ">
            <h1>Login</h1>
        </header>

        <form name="login" action="<?= url("/login") ?>" method="post">
            <label>
                <span class="field icon-envelope">E-mail:</span>
                <input name="user" type="text" placeholder="Informe seu e-mail" required/>
            </label>

            <label>
                <span class="field icon-unlock-alt">Senha:</span>
                <input name="pass" type="password" placeholder="Informe sua senha:" required/>
            </label>

            <button>Entrar</button>
        </form>
    </article>
</div>

