<?php
require_once('../../App/Entity/Produto.class.php');
require_once('../../App/Entity/Categoria.class.php');

if (isset($_GET['termo'])) {
    $termo = $_GET['termo'];

    $produtos = Produto::buscarProduto("nome LIKE '%$termo%'");

    
    if ($produtos) {
        foreach ($produtos as $produto) {
      
            $categoria = Categoria::buscarCategoria("id_categoria = " . $produto->categoria_id_categoria)[0];

            echo '
                <div class="produto-busca-item">
                    <a href="categorias.php?id_categoria=' . $produto->categoria_id_categoria . '">
                        <h3>' . $produto->nome . '</h3>
                    </a>
                    
                    <p>' . $produto->descricao . '</p>
                </div>
            ';
        }
    } else {
        echo '<p>Nenhum produto encontrado.</p>';
    }
}
?>
