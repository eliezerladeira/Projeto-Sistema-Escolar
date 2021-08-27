<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transational//EN http://www.w3.org/TR/xhtml1-transational.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="shortcut icon" href="img/ico_escola.ico" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Sistema Escolar</title>
        <? require "conexao.php" ?>
    </head>
    <body>
        <div id="logo">
            <img src="img/logo.png" />
        </div>
        <div id="caixa_login">
            <form name="form" method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr><td><h1>Nº Cartão ou Código de Acesso:</h1></td></tr>
                    <tr><td><input type="text" name="code" /></td></tr>
                    <tr><td><h1>Senha:</h1></td></tr>
                    <tr><td><input type="password" name="password" /></td></tr>
                    <tr><td><input class="input" type="submit" name="button" value="Entrar" /></td></tr>
                </table>
            </form>
        </div>
    </body>
</html>