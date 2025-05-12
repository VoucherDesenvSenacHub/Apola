<?php


require '../../App/config.inc.php';

require '../../App/Session/Login.php';

Login::RequireLogout();


$erro = '';
$succes ='';

if(isset($_POST['cadastrar'])){


    if(!empty($_POST['email']) || !empty($_POST['senha']) || !empty($_POST['cpf']) || !empty($_POST['cep']) || !empty($_POST['nome']) || !empty($_POST['sobrenome'])){

        $nome  = $_POST['nome'];
        $sobrenome  = $_POST['sobrenome'];
        $email  = $_POST['email'];
        $senha  = $_POST['senha'];
        $cpf  = $_POST['cpf'];
        $cep  = $_POST['cep'];


        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erro='Email não é válido';
        }else{
            if(!filter_var($cpf, FILTER_VALIDATE_INT)){
                $erro='CPF não é valido';
            }
            if(!filter_var($cep, FILTER_VALIDATE_INT)){
                $erro='CEP não é valido';
            }else{


                $cliente =  new Cliente();

                $cliente->nome = $nome;
                $cliente->sobrenome = $sobrenome;
                $cliente->cep = $cep;
                $cliente->cpf =$cpf;
                $cliente->email =$email;
                $cliente->senha = password_hash($senha, PASSWORD_DEFAULT);
                $cliente->id_perfil = "cli";



                $cliente->cadastrarCliente();

                if($cliente){
                    $succes='Cadastro realizado com successo';
                }else{
                    $erro='Erro ao cadastrar';
                }




            }

        }

    }else{
        $erro='Preencha todos os campos';
    }

}




?> 


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="../../src/Css/style.css">
</head>
<body class="body-cad" >
    <main class ="main3">
        <header style="  position:unset; z-index: unset;  border-bottom: unset;" class="menu">
            <nav class="container-menu">
                    <div class="img-menu">
                        <a href="./Home.php">
                            <img src="../../src/imagens/Apola__1_-removebg-preview.png" alt=""class="img-logo" >
                        </a>
                    </div>
            </nav>
        </header>
        <section class="cadastro">
            <div class="content-cadastro">
                <div class="shape"></div>
                <div class="shape-2"></div>
                <div class="container-cadastro">
                    <div class="form-cadastro">
                        <div class="text-cadastro">Cadastro</div>
                        <form  method='post'>
                            <div class="form__group field">
                                <input autocomplete="off" type="text" name='nome' class="form__field" placeholder="Nome" id="nome-cad" required>
                                <label for="nome" class="form__label">Nome</label>
                            </div>
                            <div class="form__group field">
                                <input  autocomplete="off" type="text" name='sobrenome' class="form__field" placeholder="Sobrenome" id="nome-cad" required>
                                <label for="sobrenome" class="form__label">Sobrenome</label>
                            </div>
                            <div class="form__group field">
                                <input  autocomplete="off" type="text" name='email' id="email-cad" class="form__field" placeholder="E-mail" required>
                                <label for="email" class="form__label">E-mail*</label>
                            </div>
                            <div class="form__group field">
                                <input  autocomplete="off" type="number" name='cpf' id="cpf-cad" class="form__field" placeholder="CPF" required>
                                <label for="cpf" class="form__label">CPF*</label>
                            </div>
                            <div class="form__group field">
                                <input  autocomplete="off" type="number" name='cep' id="cep-cad" class="form__field" placeholder="CEP" required>
                                <label for="cep" class="form__label">CEP*</label>
                            </div>
                            <div class="form__group field">
                                <input autocomplete="off" type="password" name='senha' id="senha-cad" class="form__field" placeholder="Senha" required>
                                <label for="senha" class="form__label">Senha*</label>
                            </div>
                            <span class='msg_erro'><?php echo $erro; ?></span>
                            <span class='msg_sucesso'><?php echo $succes; ?></span>
                            <div class="btn-cadastro">
                                <button  name='cadastrar' >Cadastra-se</button>
                            </div>
                            <span class="span-cadastro">Já possui conta? <a href="./login.php">Faça login</a></span>
                        </form>
                    </div>
                </div>
                <div class="img-container-cadastro">
                    <img src="../../src/imagens/cadastro/mulher-plana-cuidando-de-plantas.png" alt="">
                </div>
            </div>
        </section>
    </main>
</body>
</html>