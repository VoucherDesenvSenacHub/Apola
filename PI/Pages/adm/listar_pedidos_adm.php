<?php

include "head_adm.php";
include_once('../../App/DB/Database.php');

$db = new Database();
$conn = $db->getConnection();

$sql = "SELECT 
            p.id_pedido,
            p.data_pedido,
            p.tipo,
            p.status_pedido,
            p.codigo_rastreio,
            s.valor_total,
            c.estado,
            u.nome AS cliente_nome
        FROM pedido p
        JOIN sacola s ON p.sacola_id_sacola = s.id_sacola
        JOIN cliente c ON s.cliente_id_cliente = c.id_cliente
        JOIN usuario u ON c.id_usuario = u.id_usuario
        ORDER BY p.data_pedido DESC";

$stmt = $conn->prepare($sql);

if ($stmt->execute()) {
    $pedidos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $pedidos = []; // fallback para evitar erro no foreach
}
?>

<header class="header_adm" >
            <nav class="navbar_adm" id="sidebar_adm">
                <div id="sidebar_adm_content">
                    <div class="logo_sidebar">
                        <img  id="logo_adm" src="../../src/imagens/image.png" alt="">
                    </div>
                    <ul id="side_bar_itens">
                        <li class="side_bar-itens ">
                            <a style="text-decoration:none; " href="dashbord_adm.php">
                                <i class="fa-solid fa-chart-simple"></i>
                                <span class="text_side_item">Dashbord</span>
                            </a>
                        </li>
                        <li class="side_bar-itens active">
                            <a style="text-decoration:none; " href="listar_pedidos_adm.php">
                                <i class="fa-solid fa-truck"></i>
                                <span class="text_side_item">Pedidos</span>
                            </a>
                        </li>
                        <li class="side_bar-itens">
                            <a style="text-decoration:none; " href="listar_produtos_adm.php">
                                <i class="fa-solid fa-box"></i>
                                <span class="text_side_item">Produtos</span>
                            </a>
                        </li>
                        <li class="side_bar-itens">
                            <a href="listar_categoria_adm.php">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <span class="text_side_item">Categorias</span>
                            </a>
                        </li>
                        <li class="side_bar-itens">
                            <a href="cadastrar_banner_adm.php">
                                <i class="fa-solid fa-bookmark"></i>
                                <span class="text_side_item">Banners</span>
                            </a>
                        </li>
                    </ul>
            
                    <button id="open_btn_adm">
                        <i id="open_btn_icon_adm" class="fa-solid fa-chevron-right"></i>
                    </button>
        
                </div>
        
                <div id="logout_adm">
                    <button class="side_bar-itens btn_logout_adm">
                        <a href="../user">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            <span class="text_side_item">Sair</span>
                        </a>
                    </button>
                </div>
                
        
            </nav>
            <nav class="nav_mobile_adm">
                <div class="nav_bar_content_mobile_adm">
                    <ul>
                        <li>
                            <a href="dashbord_adm.php"><i class="fa-solid fa-chart-simple"></i></a>
                        </li>
                        <li>
                            <a class="active_mob"  href="listar_pedidos_adm.php"><i class="fa-solid fa-truck"></i></a>
                        </li>
                        <li>
                            <a href="listar_produtos_adm.php"><i class="fa-solid fa-box"></i></a>
                        </li>
                        <li>
                            <a href="listar_categoria_adm.php"><i class="fa-solid fa-boxes-stacked"></i></a>
                        </li>
                        <li>
                            <a href="cadastrar_banner_adm.php"><i class="fa-solid fa-bookmark"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-right-to-bracket"></i></a>
                        </li>
                    </ul>    
                </div>
            </nav>

</header>
    <main class="main_adm">
        <div class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                    <span class="title_adm">Pedidos</span>
                </div>
                <div class="container_title_adm_right">
                    <!-- <input type="text" placeholder="Pesquisar...">
                    <i class="fa-solid fa-magnifying-glass"></i> -->

                </div>
                
            </div>
            <div class="conatiner_cont_dados_adm">
                <div class="card_item_dados">
                    <i class="fa-solid fa-dolly"></i>
                    <div class="item_dados_adm">
                        <p class="n_item_dados">N° 45</p>
                        <p class="text_item_dados">Total de Pedidos</p>
                    </div>
                </div>
                <div class="shape_dados"></div>
                <div class="card_item_dados">
                    <i class="fa-solid fa-money-bill"></i>
                    <div class="item_dados_adm">
                        <p class="n_item_dados">N° 23</p>
                        <p class="text_item_dados">Total a pagar</p>
                    </div>
                </div>
                <div class="shape_dados"></div>
                <div class="shape_dados_mobile"></div>
                <div class="card_item_dados">
                    <i class="fa-solid fa-box"></i>
                    <div class="item_dados_adm">
                        <p class="n_item_dados">N° 34</p>
                        <p class="text_item_dados">Total Disponivel</p>
                    </div>
                </div>
                <div class="shape_dados"></div>
                <div class="card_item_dados">
                    <i class="fa-solid fa-gift"></i>
                    <div class="item_dados_adm">
                        <p class="n_item_dados">N° 11</p>
                        <p class="text_item_dados">Total Personalizado</p>
                    </div>
                </div>

            </div>
            <div class="conatiner_listar_adm">
                <div class="container_listar_header_adm">
                    <div class="container_listar_header_adm_left">
                        <button id="btn_item_listar_adm">A pagar</button>
                        <button id="btn_item_listar_adm">Produção</button>
                        <button id="btn_item_listar_adm">Envio</button>
                        <button id="btn_item_listar_adm">Entregue</button>


                    </div>
                    <div class="container_listar_header_adm_right">
                        <input id="input_search" placeholder="Pesquisar Nº do pedido" type="search" name="" id="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <button id="btn_search_listar">Buscar</button>
                    </div>
                    

                </div>
                <div class="container_listar_body_adm">
                <table class="table_adm_list">
                    <thead>
                        <tr>
                            <th>numero</th>
                            <th>total</th>
                            <th>tipo</th>
                            <th id="Mob_table_none_th" >estado</th>
                            <th>ações</th>
                        </tr>
<<<<<<< Updated upstream
                        <tr>
                            <td>
                                #4453
                            </td>
                            <td>
                                $ 123,54
                            </td>
                            <td>
                                Disponivel
                            </td>
                            <td id="Mob_table_none_td">
                                MS
                            </td>
                            <td>
                                <div class="container_item_list_ações">
                                    <a href="pedido_disponivel_adm.php"><i class="fa-solid fa-eye"></i></a>
                                    <a href="sss"><i class="fa-solid fa-trash"></i></a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #4453
                            </td>
                            <td>
                                $ 123,54
                            </td>
                            <td>
                                Personalizado
                            </td>
                            <td id="Mob_table_none_td" >
                                MS
                            </td>
                            <td>
                                <div class="container_item_list_ações">
                                    <a href="pedido_personalizado_adm.php"><i class="fa-solid fa-eye"></i></a>
                                    <a href=""><i class="fa-solid fa-trash"></i></a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #4453
                            </td>
                            <td>
                                $ 123,54
                            </td>
                            <td>
                                Personalizado
                            </td>
                            <td id="Mob_table_none_td" >
                                MS
                            </td>
                            <td>
                                <div class="container_item_list_ações">
                                    <a href="pedido_personalizado_adm.php"><i class="fa-solid fa-eye"></i></a>
                                    <a href=""><i class="fa-solid fa-trash"></i></a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #4453
                            </td>
                            <td>
                                $ 123,54
                            </td>
                            <td>
                                Personalizado
                            </td>
                            <td id="Mob_table_none_td" >
                                MS
                            </td>
                            <td>
                                <div class="container_item_list_ações">
                                    <a href="pedido_personalizado_adm.php"><i class="fa-solid fa-eye"></i></a>
                                    <a href=""><i class="fa-solid fa-trash"></i></a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #4453
                            </td>
                            <td>
                                $ 123,54
                            </td>
                            <td>
                                Personalizado
                            </td>
                            <td id="Mob_table_none_td" >
                                MS
                            </td>
                            <td>
                                <div class="container_item_list_ações">
                                    <a href="pedido_personalizado_adm.php"><i class="fa-solid fa-eye"></i></a>
                                    <a href=""><i class="fa-solid fa-trash"></i></a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #4453
                            </td>
                            <td>
                                $ 123,54
                            </td>
                            <td>
                                Personalizado
                            </td>
                            <td id="Mob_table_none_td" >
                                MS
                            </td>
                            <td>
                                <div class="container_item_list_ações">
                                    <a href="pedido_personalizado_adm.php"><i class="fa-solid fa-eye"></i></a>
                                    <a href=""><i class="fa-solid fa-trash"></i></a>

                                </div>
                            </td>
                        </tr>

                    </table>
=======
                    </thead>
                    <tbody>
                    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td>#<?= $pedido['id_pedido'] ?></td>
        <td><?= date('d/m/Y H:i', strtotime($pedido['data_pedido'])) ?></td>
        <td><?= $pedido['tipo'] ?></td>
        <td><?= $pedido['status_pedido'] ?></td>
        <td><?= $pedido['codigo_rastreio'] ?></td>
        <td>R$ <?= number_format($pedido['valor_total'], 2, ',', '.') ?></td>
        <td><?= $pedido['estado'] ?></td>
        <td><?= $pedido['cliente_nome'] ?></td>
    </tr>
<?php endforeach; ?>
                    </tbody>
                </table>
>>>>>>> Stashed changes
                </div>


            </div>
            
        
        </div>
    

    </main>


    <script src="adm_nav.js"></script>
    <script src="btn_listar_adm.js"></script>
</body>
</html>