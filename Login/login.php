<?php require_once './includes/conexao/connection.php'; ?>

<!-- Formulario de login -->
<div>
    <input class="login_input nome" type="email" placeholder="usuario" name="txt_usuario" id="txt_usuario">
        <br>
    <input class="login_input senha" type="password" placeholder="senha" name="txt_senha" id="txt_senha">
        <br>
    <button class="login_submit">Entrar</button>
    <span>
        <img src="./img/log-in.svg"/>
        <a href="#">Não tenho uma conta</a>
    </span>
</div>