<?php


include "navbar_adm.php";

?>


    <main  class="main2">
        <div class="listar_produtos">
            <div class="container_header_listar_produtos">
                <div class="title_continer_cadastrar_produto_adm">
                    <a href=""><i class="fa-solid fa-chevron-left"></i></a>
                    <h6 class="title_adm_default">Pedidos</h6>
                </div>
            </div>
            <div class="container_body_listar_produtos">
                <div class="container_body_listar_produtos_header">
                    <div class="container_btn_item_listar_produto">
                        <button class=" btn_item_listar_produto">A pagar</button>
                        <button class="btn_item_listar_produto">Produção</button>
                        <button class="btn_item_listar_produto">Envio</button>
                        <button class="btn_item_listar_produto">Entregue</button>
                    </div>
                    <div class="conatiner_search_listar_produto">
                        <input placeholder="Pesquisar Nº do pedido" type="search" name="" id="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <button class="btn_search_listar_produto">Buscar</button>
                    </div>
                </div>
                <div class="container_body_listar_produtos_body">
                    <table>
                        <tr>
                            <th>
                                Numero
                            </th>
                            <th>
                                total
                            </th>
                            <th>
                                tipo
                            </th>
                            <th>
                                estado
                            </th>
                            <th>
                                status
                            </th>
                            <th>
                                ações
                            </th>
                        </tr>
                        <tr>
                            <td class="container_listar_check">
                                #5632
                            </td>
                            <td>
                                R$ 166
                            </td>
                            <td>
                                Disponivel
                            </td>
                            <td>
                                MS
                            </td>
                            <td>
                                <div class="container_flex_shape_status">
                                    <div class="shape_status_produtos"></div>
                                    Ativo
                                </div>
                            </td>
                            <td class="item_list_tree">
                                <ul>
                                    <li>
                                        <a href="../adm/pedido_solo.php"><i class="fa-solid fa-pencil"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa-solid fa-trash"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="container_listar_check">
                                #5632
                            </td>
                            <td>
                                R$ 166
                            </td>
                            <td>
                                Personalizado
                            </td>
                            <td>
                                MS
                            </td>
                            <td>
                                <div class="container_flex_shape_status">
                                    <div class="shape_status_produtos"></div>
                                    Ativo
                                </div>
                            </td>
                            <td class="item_list_tree">
                                <ul>
                                    <li>
                                        <a href="../adm/pedido_personalizado.php"><i class="fa-solid fa-pencil"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa-solid fa-trash"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>

                </div>
                
            </div>
        </div>
    </main>
    
</body>
</html>