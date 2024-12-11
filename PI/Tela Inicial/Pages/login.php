
<?php
require '../App/Entity/Cliente.php';

require '../App/Session/Login.php';
Login::requireLogout();


$alertaLogin ='';


$alertaCadastro ='';

if (isset($_POST['logar'])){
    if(isset($_POST['email'], $_POST['senha'], $_POST['conf-senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['conf-senha'];
        // Verificar se exite usuario com esse email no banco
        $cliente = Cliente::getUsuarioPorEmail($_POST['email']);
        
        // Verifica se exite usuario com essa senha no banco
        if(!$cliente instanceof Cliente || !password_verify($_POST['senha'], $cliente->senha)){
            $alertaLogin = 'Email ou senha Inválidos';
        }else{
               // Loga usuario
               Login::login($cliente);
        }
    

    }
}



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/Css/syte.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../JS/validar_form_login.js" defer></script>
    <title>Login</title>
</head> 
<body class="body-log">
    <main class="main-login">
        <header class="menu">
            <nav class="container-menu">
                    <div class="img-menu">
                        <a href="../Pages/Home.html">
                            <img src="../Src/imagens/Apola__1_-removebg-preview.png" alt=""class="img-logo" >
                        </a>
                    </div>
            </nav>
        </header>
        <section class="login">
            <div class="content-login">
                <div class="shape-login"></div>
                <div class="shape-login2"></div>
                <div class="img-container-login">
                    <img src="../Src/imagens/login/Knitting-amico.png" alt="">
                </div>
                <div class="container-login">
                    <div class="form-container">
                        <div class="text-login">Login</div>
                        <form method="POST">
                            <div class="form__group field">
                                <input type="email" name='email' id="email-login" class="form__field" placeholder="E-mail" required>
                                <label for="email" class="form__label">E-mail*</label>
                            </div>
                            <div class="form__group field">
                                <input type="password" name='senha' id="senha-login"  class="form__field" placeholder="Senha" required>
                                <label for="senha" class="form__label">Senha*</label>
                            </div>
                            <div class="form__group field">
                                <input type="password" name='conf-senha' id="conf-senha-login" class="form__field" placeholder="Senha" required>
                                <label for="confsenha" class="form__label">Confirmação de senha*</label>
                            </div>
                            <div class="remenber">
                                <label for="">
                                    <input type="checkbox"> Lembre-me
                                </label>
                                <p><a href="#">Esqueceu a senha?</a></p>
                            </div>
                            <div class="btn-login">
                                <a href=""><button name='logar' type="submit">Entrar</button></a>
                            </div>
                            <p id="msnErro-login" class="msnErro-login"> <?=$alertaLogin?> </p>
                            <span class="span-login">Novo na Apola?<a href="../Pages/cadastro.php">Cadastra-se</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
            
    </main>
</body>
</html>