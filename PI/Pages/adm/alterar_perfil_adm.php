<?php


include 'nav_bar_adm.php';

// print_r($_SESSION['id_usuario']);


// $id_adm = ($sessao);
// print_r($id_administrador);

$entityAdm = new Adm();
$adm = $entityAdm->getAdmById($id_administrador);
$id_usuario = $adm->id_usuario;
$entityUsuario = new User();

$usuario = $entityUsuario->getUsuarioById($id_usuario);
// print_r($usuario);

if(isset($_POST['enviarDados'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senhaCript = password_hash($senha, PASSWORD_DEFAULT);

    $entityUsuario->id_user = $id_usuario;
    $entityUsuario->nome = $nome;
    $entityUsuario->email = $email;
    $entityUsuario->senha = $senhaCript;
    $entityUsuario->id_perfil = "adm";

    $entityAdm->id_usuario = $id_usuario;
    $resultadoUpdadeUser = $entityUsuario->updateUser();
    $resultadoUpdadeAdm = $entityAdm->updateAdm($id_administrador);

    if($resultadoUpdadeAdm && $resultadoUpdadeUser){
        echo '<script>alert("Atualizado")</script>';
        echo '<meta http-equiv="refresh" content="0.8;">';
    }
}



?>

    <main class="main2">
        <section class="container_perfil">
            <div class="left-container_favoritos">
                <div class="container_favoritos_left">
                    <div class="title_left_favoritos">Meu Perfil</div>
                    <ul>
                        <li class="item_favorito_left">
                            <i class="fa-solid icon_favorito_content  fa-house"></i><a class="link_favorito_left" href="./perfil_adm.php">Conta</a>
                        </li>
                        <li class="item_favorito_left">
                            <i class="fa-solid fa-pencil icon_favorito_content"></i><a class="link_favorito_left" href="./alterar_perfil_adm.php">Alterar Perfil</a>
                        </li>
                    </ul>


                </div>
            </div>
            <div class="right_container_perfil">
                <div class="container_right_perfil">
                    <div class="container_banner_perfil">
                        <img src="" alt="">
                        <div class="shape_perfil">
                            <img src="../../src/imagens/image.png" alt="">
                        </div>
                    </div>
                    <form method="POST" class="inputs_perfil">
                        <div class="input_perfil_container">
                            <div class="input_item_perfil">
                                <label for="">Nome Completo</label>
                                <div class="container_edit_perfil">
                                    <input type="text" name="nome" id="" value="<?= $usuario->nome; ?>">
                                   
                                </div>
                            </div>
                            <div class="input_item_perfil">
                                <label for="">Email</label>
                                <div class="container_edit_perfil">
                                    <input type="email" name="email" id="" value="<?= $usuario->email; ?>">
                                   
                                </div>
                            </div>
                            <div class="input_item_perfil">
                                <label for="">Alterar Senha</label>
                                <div class="container_edit_perfil">
                                    <input type="password"  name="senha" id="" placeholder="insira a nova senha">
                                </div>
                            </div>
                            <!-- <div class="input_item_perfil">
                                <label for="">CPF</label>
                                <div class="container_edit_perfil">
                                    <input type="text" name="cpf" id="">
                              
                                </div>
                            </div> -->
                            <div class="container_btn_perfil">
                                <button onclick="reload()" class="btn_cancelar">Cancelar</button>
                                <button type = "submit" name="enviarDados" class="btn_salvar">Salvar</button>
                            </div>

                        </div>

                    </form>

                </div>
                
            </div>
        </section>


    </main>
    
<?php



?>