<?php

include "head_adm.php";
include "nav_bar_adm.php";

require '../../App/config.inc.php';
require '../../App/Session/Login.php';

$errTitulo = "";
$errStatus = "";
$errCategoria = "";
$errDescricao = "";
$errImagem = "";
$errPreco = "";
$errCor = "";
$errTamanho = "";
$errEstoque = "";
if(isset($_GET['id'])){
    $id_produto = $_GET['id'];
}
$entity = new Produto();
$produto = $entity->buscarProdutoPorId($id_produto);
// print_r($produto);

if(isset($_POST['carregarDadosProduto'])){
    $titulo = $_POST['tituloProduto'];
    if(empty($titulo)){
        $errTitulo = "Adicione um titulo";
    }
    $status = $_POST['selectStatus'];
    if(empty($status)){
        $errStatus = "Escolha o status";
    }
    $categoria = $_POST['selectCategoria'];
    if(empty($categoria)){
        $errCategoria = "Escolha uma categoria";
    }
    $descricao = $_POST['descricaoProduto'];
    if(empty($descricao)){
        $errDescricao = "Adicione uma descrição";
    }
    $cor = $_POST['corProduto'];
    if(empty($cor)){
        $errCor = "Adicione uma cor";
    }
    $tamanho = $_POST['tamanhoProduto'];
    if(empty($tamanho)){
        $errTamanho = "Adicione um tamanho";
    }
    $estoque = $_POST['estoqueProduto'];
    if(empty($estoque)){
        $errEstoque = "Adicione um estoque";
    }
    $preco = $_POST['precoProduto'];
    if(empty($preco)){
        $errPreco = "Adicione um preço";
    }

    if(empty($titulo) || empty($status) || empty($categoria) || empty($descricao) || empty($cor) || empty($tamanho) || empty($estoque)){
       
    }
    else{

        if (isset($_FILES['imagemProduto']) && $_FILES['imagemProduto']['error'] === UPLOAD_ERR_OK) {
            $extensoesPermitidas = ['png', 'jpg', 'jpeg', 'jfif'];
            $pastaDestino = '../../src/imagens/produtos/';

            $imagem = $_FILES['imagemProduto'];
            $nomeOriginal = $imagem['name'];
            $extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));

            if (!in_array($extensao, $extensoesPermitidas)) {
                echo'<script>alert("A extensão do arquivo não é permitida.")</script>';
            } else {
                $novoNome = uniqid('ImagemCategoria_', true) . '.' . $extensao;
                $caminhoFinal = $pastaDestino . $novoNome;

                if (!move_uploaded_file($imagem['tmp_name'], $caminhoFinal)) {
                    $errImg = "Falha ao mover a imagem para o destino.";
                }
            }

            $entity = new Produto();
            $entity->nome = $titulo;
            $entity->preco = $preco;
            $entity->avaliacao = "";
            $entity->quantidade = $estoque;
            $entity->cor = $cor;
            $entity->tamanho = $tamanho;
            $entity->imagem = $produto->imagem;
            $entity->descricao = $descricao;
            $entity->tipo = "Da loja";
            $entity->status_produto = $status;
            $entity->categoria_id_categoria = $categoria;

            $resultado = $entity->atualizarProduto($id_produto);
            if($resultado){
                echo '<script>alert("Atualizado")</script>';
                echo '<meta http-equiv="refresh" content="0.8;">';
            }
        }

        else if(!isset($imagem)){
            $entity = new Produto();
            $entity->nome = $titulo;
            $entity->preco = $preco;
            $entity->avaliacao = "";
            $entity->quantidade = $estoque;
            $entity->cor = $cor;
            $entity->tamanho = $tamanho;
            $entity->imagem = $produto->imagem;
            $entity->descricao = $descricao;
            $entity->tipo = "Da loja";
            $entity->status_produto = $status;
            $entity->categoria_id_categoria = $categoria;

            $resultado = $entity->atualizarProduto($id_produto);
        }
        if($resultado){
            echo '<script>alert("Atualizado")</script>';
            echo '<meta http-equiv="refresh" content="0.8;">';
            // echo '<script src="../../src/JS/atualizar_pagina.js"></script>';
        }else {
            $errImg = "Insira uma imagem.";
        }

        // $produto = new Produto();
        // $produto->nome = $titulo;
        // $produto->preco = $preco;
        // $produto->avaliacao = "";
        // $produto->quantidade = $estoque;
        // $produto->cor = $cor;
        // $produto->tamanho = $tamanho;
        // $produto->imagem = $caminhoFinal;
        // $produto->descricao = $descricao;
        // $produto->tipo = "Da loja";
        // $produto->categoria_id_categoria = $categoria;

        // $resultado = $produto->cadastrarProduto();
        // if($resultado){
        //     echo '<script>alert("Cadastrado com Sucesso!")</script>';
        // }

    }


}
?>
<body>   
    <main class="main_adm">
        <form method="POST" enctype="multipart/form-data" class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                    <a href="./listar_produtos_adm.php" style="text-decoration: none; color: #ccc"><i class="fa-solid fa-chevron-left"></i></a>
                    <span class="title_adm">Produto N°<?= $id_produto; ?></span>
                </div>
            </div>
            <div class="conatiner_cadastro_adm_items">
                <div class="conatiner_cadastro_adm_items_header">
                    <div class="conatiner_cadastro_adm_items_header_left">
                        <div class="item_flex_adm">
                            <label for="">Titulo</label>
                            <input type="text" name="tituloProduto" value="<?= $produto->nome; ?>">
                            <p class="text_tamanho_img" style="color:red;"> <?= $errTitulo; ?> </p>
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Status</label>
                            <select name="selectStatus" id="selectStatus">
                                <?php if($produto->status_produto === "a"): ?>
                                    <option value="ativo" selected>Ativo</option>
                                    <option value="inativo">Inativo</option>
                                <?php else: ?>
                                    <option value="ativo">Ativo</option>
                                    <option value="inativo" selected>Inativo</option>
                                <?php endif; ?>
                            </select>
                            <p class="text_tamanho_img" style="color:red;"> <?= $errStatus; ?> </p>
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Categoria</label>
                            <select name="selectCategoria" id="dadosTodasCategoria">
                                <!-- <option value="">Amigurumi</option>
                                <option value="">Cachepô</option> -->
                            </select>
                            <p class="text_tamanho_img" style="color:red;"> <?= $errCategoria; ?> </p>
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Descrição</label>
                            <input style="width: 400px; height: 400px" name="descricaoProduto" id="" value="<?= $produto->descricao ?>"></input>
                            <p class="text_tamanho_img" style="color:red;"> <?= $errDescricao; ?> </p>
                        </div>
                        
                    </div>
                    <div class="conatiner_cadastro_adm_items_header_right">
                        <div class="conatiner_img_add_adm add_img_categoria">
                                <img  class="imagemCategoria-active" src="<?= $produto->imagem; ?>" alt="" id="preview_img">
                                <input type="file" name="imagemProduto" id="imgInput"  class="imagemCategoria" >
                            </div>
                            <p>Clique na Imagem para Trocar <i class="fa-solid fa-pencil"></i></p>
                            <p><?= $errImagem;?></p>
                        <p class="text_tamanho_img" style="color:red;"> <?= $errImagem; ?> </p>
                    </div>
                </div>
                <div class="conatiner_cadastro_adm_items_body">
                    <div class="conatiner_cadastro_adm_items_body_add">
                        <div class="item_flex_adm">
                            <label for="">Preço</label>
                            <input type="text" name="precoProduto" class="input_adcionar_produto" value="<?= $produto->preco; ?>">
                            <p class="text_tamanho_img" style="color:red;"> <?= $errPreco; ?> </p>
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Adicionar Cor</label>
                            <input name="corProduto" class="input_adcionar_produto" type="text" value="<?= $produto->cor; ?>">
                            <p class="text_tamanho_img" style="color:red;"> <?= $errCor; ?> </p>
                        </div>
                        <!-- <button class="btn_produto_add">Adicionar</button> -->
                        <div class="item_flex_adm">
                            <label for="">Adicionar Tamanho</label>
                            <input name="tamanhoProduto" class="input_adcionar_produto" type="text" value="<?=$produto->tamanho; ?>">
                            <p class="text_tamanho_img" style="color:red;"> <?= $errTamanho; ?> </p>
                        </div>
                        <!-- <button class="btn_produto_add">Adicionar</button> -->
                        <div class="item_flex_adm">
                            <label for="">Adicionar Estoque</label>
                            <input name="estoqueProduto" class="input_adcionar_produto" type="text" value="<?=$produto->quantidade; ?>">
                            <p class="text_tamanho_img" style="color:red;"> <?= $errEstoque; ?> </p>
                        </div>
                        <!-- <button class="btn_produto_add">Adicionar</button> -->

                    </div>
                </div>
            </div>
            <div id="conatiner_btn_adm_pc"  class="conatiner_btn_adm">
                <!-- <button class="btn_excluir_adm">Excluir</button> -->
                <button type="submit" name="carregarDadosProduto" class="btn_salvar_adm">Salvar</button>
            </div>     
    </form>   
    </main>
    <!-- <script src="adm_nav.js"></script>
    <script src="btn_listar_adm.js"></script> -->
</body>
</html>