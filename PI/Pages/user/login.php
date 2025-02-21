
<?php
require '../../App/Entity/Cliente.php';

require '../../App/Session/Login.php';
Login::requireLogout();


$alertaLogin ='';


$alertaCadastro ='';

if (isset($_POST['logar'])){
    if(isset($_POST['email'], $_POST['senha'])){
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
    <link rel="stylesheet" href="../../src/Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../JS/validar_form_login.js" defer></script>

    <title>Login</title>
</head> 
<body class="body-log">
    <main>
        <header style="  position:unset; z-index: unset;  border-bottom: unset;" class="menu">
            <nav class="container-menu">
                    <div class="img-menu">
                        <a href="./Home.php">
                            <img src="../../src/imagens/Apola__1_-removebg-preview.png" alt=""class="img-logo" >
                        </a>
                    </div>
            </nav>
        </header>
        <section class="login">
            <div class="content-login">
                <div class="shape-login"></div>
                <div class="shape-login2"></div>
                <div class="img-container-login">
                    <img src="../../src/imagens/login/Knitting-amico.png" alt="">
                </div>
                <div class="container-login">
                    <div class="form-container">
                        <div class="text-login">Login</div>
                        <form  method="POST">
                            <div class="form__group field">
                                <input type="email" name='email' id="email-login" class="form__field" placeholder="E-mail" required>
                                <label for="email" class="form__label">E-mail*</label>
                            </div>
                            <div class="form__group field">
                                <input type="password" name='senha' id="senha-login"  class="form__field" placeholder="Senha" required>
                                <label for="senha" class="form__label">Senha*</label>
                            </div>
                            <div class="remenber">
                                <label for="">
                                    <input type="checkbox"> Lembre-me
                                </label>
                                <p class="open-modal" data-modal="modal-1"><a href="#">Esqueceu a senha?</a></p>
                                <!-- MODAL QUE APÓS CLICAR EM RECUPERAR A SENHA É REDIRECIONADO PARA CONFIRMAR EMAIL PARA RECUPERAÇÃO DA SENHA -->
                                <dialog id="modal-1">
                                <div class="modal_header">
                                    <button class="close-modal" data-modal="modal-1"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <div class="modal_body">
                                    <h5 class="title_modal_zap">Redefinição de Senha!</h5>
                                    <div class="text_modal_zap">Informe um e-mail para recuperar a senha.</div>
                                    <div class="form_modal" action="">
                                        <label class="label_modal" for="">Email</label>
                                        <input class="input_modal" type="email" name="" id="">
                                        <div class="container_btn_modal_email">
                                            <button class="btn_enviar_modal_email">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                                </dialog>
                                <script src="../../src/JS/modal.js"></script>
                            </div>
                            <div class="btn-login">
                                <a href=""><button name='logar' type="submit">Entrar</button></a>
                            </div>
                            <p id="msnErro-login" class="msnErro-login"> <?=$alertaLogin?> </p>
                            <span class="span-login">Novo na Apola?<a href="./cadastro.php">Cadastra-se</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
            
    </main>
    
</body>
</html>