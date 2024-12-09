

<?php



require '../App/Entity/Cliente.php';




$AlertErr= '';

if (isset($_POST['nome'],$_POST['email'], $_POST['cep'], $_POST['cpf'],$_POST['senha'])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cep = $_POST['cep'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $cpf = $_POST['cpf'];

    $cliente = new Cliente($nome,$cep,$cpf,$email,$senha);
    $result= $cliente->cadastrarCliente();

    header('location: login.php?status=success');
    exit;


}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../src/Css/syte.css">
</head>
<body class="body-cad">
    <main class="main-cad">
        <header class="menu">
            <nav class="container-menu">
                    <div class="img-menu">
                        <a href="../Pages/Home.html">
                            <img src="../Src/imagens/Apola__1_-removebg-preview.png" alt=""class="img-logo" >
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
                        <form method='POST'>
                            <div class="form__group field">
                                <input type="text" name='nome' class="form__field" placeholder="Nome completo" id="nome-cad" required>
                                <label for="nome" class="form__label">Nome Completo*</label>
                            </div>
                            <div class="form__group field">
                                <input type="email" name='email' id="email-cad" class="form__field" placeholder="E-mail" required>
                                <label for="email" class="form__label">E-mail*</label>
                            </div>
                            <div class="form__group field">
                                <input type="number" name='cpf' id="cpf-cad" class="form__field" placeholder="CPF" required>
                                <label for="cpf" class="form__label">CPF*</label>
                            </div>
                            <div class="form__group field">
                                <input type="number" name='cep' id="cep-cad" class="form__field" placeholder="CEP" required>
                                <label for="cep" class="form__label">CEP*</label>
                            </div>
                            <div class="form__group field">
                                <input type="password" name='senha' id="senha-cad" class="form__field" placeholder="Senha" required>
                                <label for="senha" class="form__label">Senha*</label>
                            </div>
                            <div class="btn-cadastro">
                                <a href=""><button type="submit" name='cadastrar' >Cadastra-se</button></a>
                            </div>
                            <span class="span-cadastro">Já possui conta? <a href="../Pages/login.php">Faça login</a></span>
                        </form>
                    </div>
                </div>
                <div class="img-container-cadastro">
                    <img src="../Src/imagens/cadastro/mulher-plana-cuidando-de-plantas.png" alt="">
                </div>
            </div>
        </section>
    </main>
</body>
</html>