<?php


include "navbar_adm.php";

?>


    <main  class="main2">
        <div class="listar_produtos">
            <div class="container_header_listar_produtos">
                <div class="title_continer_cadastrar_produto_adm">
                    <a href=""><i class="fa-solid fa-chevron-left"></i></a>
                    <h6 class="title_adm_default">Categorias</h6>
                </div>
                <a href="../adm/cadastrar_categoria.php" class="btn_criar_prod_adm_listar">+ Categoria</a>
            </div>
            <div class="container_body_listar_produtos">
                <div class="container_body_listar_produtos_header">
                    <div class="container_btn_item_listar_produto">
                        <button class=" btn_item_listar_produto">Todos</button>
                        <button class="btn_item_listar_produto">Ativo</button>
                        <button class="btn_item_listar_produto">Inativo</button>
                    </div>
                    <div class="conatiner_search_listar_produto">
                        <input placeholder="Pesquisar produto" type="search" name="" id="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <button class="btn_search_listar_produto">Buscar</button>
                    </div>
                    
                </div>
                <div class="container_body_listar_produtos_body">
                    <table>
                        <tr>
                            <th class="adm_center" >

                            </th>
                            <th>
                                Titulo
                            </th>
                            <th>
                                quant. produtos
                            </th>
                            <th>
                                status
                            </th>
                            <th>
                                ações
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div  class="adtm_center_item">
                                    <input type="checkbox" name="" id="">
                                </div>
                            </td>
                            <td class="container_listar_check">
                                Cachepô
                            </td>
                            <td>
                                16
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
                                        <a href=""><i class="fa-solid fa-pencil"></i></a>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked="true" class="switch" name="" id="">
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