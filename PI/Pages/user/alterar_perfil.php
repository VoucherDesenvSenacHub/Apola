<?php


require '../../App/config.inc.php';

require '../../App/Session/Login.php';

include "head.php";

$result = Login::IsLogedCliente();
if($result){
    $id_cliente = $_SESSION['cliente']['id_cliente'];

    $objCliente = new Cliente();
    
    $cli = $objCliente->getClienteById($id_cliente);
   
}


if($result){
    include "navbar_logado.php";

    
}else{
    header('location: login.php');
}


if (isset($_POST['carregarNovosDados'])) {

    
    $id_cliente = $id_cliente;
    $id_usuario = $cli['id_usuario'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $num_casa = (int) $_POST['num_casa'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];

    $arquivo = $_FILES['foto_perfil'];
    if ($arquivo['error']) die("falha ao enviar a foto");
    $pasta = '../../src/imagens/cadastro/perfil/';
    $nome_foto = $arquivo['name'];
    $novo_nome = uniqid();
   
    $extensao = strtolower(pathinfo($nome_foto, PATHINFO_EXTENSION));

    if ($extensao != 'png' && $extensao != 'jpg') die("Falha ao enviar a foto");

    $caminho = $pasta . $novo_nome . '.' .$extensao;

    $foto = move_uploaded_file($arquivo['tmp_name'], $caminho);
    
    $cliente = new Cliente();
    
    $cliente->id_cliente = $id_cliente;
    $cliente->nome = $nome;
    $cliente->sobrenome = $sobrenome;
    $cliente->cpf = $cpf;
    $cliente->cep = $cep;
    $cliente->telefone = $telefone;
    $cliente->numero_casa = $num_casa;
    $cliente->foto_perfil = $caminho;
    $cliente->rua = $rua;
    $cliente->bairro = $bairro;
    $cliente->estado = $estado;
    $cliente->cidade = $cidade;
    $cliente->email = $email;
    $cliente->id_usuario = $id_usuario;


    $resultado = $cliente->atualizarCliente();
    if ($resultado) {
        echo '<script>
                alert("Atualizado com sucesso!!");
                window.location.href = "./perfil.php";
              </script>';
    } else {
        echo '<script>
                alert("Erro ao atualizar!");
              </script>';
    }

}



?>
<link rel="stylesheet" href="../../src/Css/perfil.css">
    <main  class="main2">
        <section class="container_perfil">
            <div class="left-container_favoritos">
                <div class="container_favoritos_left">
                    <div class="title_left_favoritos">Meu Perfil</div>
                    <ul>
                        <li class="item_favorito_left">
                            <i class="fa-solid icon_favorito_content  fa-house"></i><a class="link_favorito_left" href="./perfil.php">Conta</a>
                        </li>
                        <li class="item_favorito_left">
                            <i class="fa-solid icon_favorito_content fa-heart"></i><a class="link_favorito_left" href="./Favoritos.php">Favoritos</a>
                        </li>
                        <li class="item_favorito_left">
                            <i class="fa-solid  icon_favorito_content fa-boxes-stacked"></i><a class="link_favorito_left" href="./historico_pedido.php">Histórico de Pedidos</a>
                        </li>
                        <li class="item_favorito_left">
                            <i class="fa-solid fa-pencil icon_favorito_content"></i><a class="link_favorito_left" href="./alterar_perfil.php">Alterar Perfil</a>
                        </li>
                        <li class="item_favorito_left">
                            <i class="fa-solid fa-right-from-bracket"></i><a class="link_favorito_left" href="logout.php">Sair</a>
                        </li>
                    </ul>


                </div>
            </div>
            <div class="right_container_perfil">
                <div class="container_right_perfil">
                    
                <form method="POST" class="inputs_perfil"  enctype="multipart/form-data">

                    <div class="container_banner_perfil">
                        <img src="" alt="">
                        <div> <input id="foto_perfil" name="foto_perfil" type="file"> </div>
                        <div class="shape_perfil">
                           <img src="../../src/imagens/image.png" alt="">
                        </div>
                    </div>
                    
                        <div class="input_perfil_container">
                            <div class="input_item_perfil">
                                <label for="">Nome</label>
                                <div class="container_edit_perfil">
                                    <input type="text" name="nome" id="" value="<?=$cli['nome'];?>">
                                </div>
                            </div>
                            <div class="input_item_perfil">
                                <label for="">Sobrenome</label>
                                <div class="container_edit_perfil">
                                    <input type="text" name="sobrenome" id="" value="<?=$cli['sobrenome'];?>">
                                   
                                </div>
                            </div>
                            <div class="input_item_perfil">
                                <label for="">Email</label>
                                <div class="container_edit_perfil">
                                    <input type="email" name="email" id="" value="<?=$cli['email'];?>">
                                   
                                </div>
                            </div>
                            <div class="input_item_perfil">
                            <label for="">CPF</label>
                                <div class="container_edit_perfil">
                                    <input type="text" name="cpf" id=""  value="<?=$cli['cpf'];?>">
                              
                                </div>
                            </div>
                            <div class="input_item_perfil">
                                <label for="">CEP</label>
                                <div class="container_edit_perfil">
                                    <input  type="text" name="cep" id=""  value="<?=$cli['cep'];?>">
                              
                                </div>
                            </div>
                            <div class="input_item_perfil">
                                <label for="">N°</label>
                                <div class="container_edit_perfil">
                                    <input class="input_esp_num" type="text" name="num_casa" id=""  value="<?=$cli['numero_casa'];?>">
                              
                                </div>
                            </div>
                            <div class="input_item_perfil">
                                <label for="">Telefone</label>
                                <div class="container_edit_perfil">
                                    <input type="tel" name="telefone" id=""  value="<?=$cli['telefone'];?>">
                              
                                </div>
                            </div>
                            <div class="input_item_perfil">
                                <label for="">Rua</label>
                                <div class="container_edit_perfil">
                                    <input type="text" name="rua" id=""  value="<?=$cli['rua'];?>">
                              
                                </div>
                            </div>
                            
                            <div class="input_item_perfil">
                                <label for="">Bairro</label>
                                <div class="container_edit_perfil">
                                    <input type="text" name="bairro" id=""  value="<?=$cli['bairro'];?>">
                              
                                </div>
                            </div>
                            <div class="input_item_perfil">
                                <label for="">Cidade</label>
                                <div class="container_edit_perfil">
                                    <input type="text" name="cidade" id=""  value="<?=$cli['cidade'];?>">
                              
                                </div>
                            </div>
                            <div class="input_item_perfil">
                                <label for="">Estado:</label>
                                <div class="container_edit_perfil">
                                    <input class="input_esp_num" name="estado" type="text" value="<?=$cli['estado'];?>">
                                </div>
                            </div>
                            <div class="container_btn_perfil">
                                <button class="btn_cancelar">Cancelar</button>
                                <button type="submit" name="carregarNovosDados" class="btn_salvar">Salvar</button>
                            </div>

                        </div>

                    </form>

                </div>
                
            </div>
        </section>


    </main>
<?php

include "footer.php";
?>