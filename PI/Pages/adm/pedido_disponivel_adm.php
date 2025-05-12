<?php

include "head_adm.php";
// include "nav_bar_adm.php";

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
                    <i class="fa-solid fa-chevron-left"></i>
                    <span class="title_adm">Pedido #4343</span>
                </div>
                <div class="container_title_adm_right">
                    <div class="conatiner_btn_adm mobile_btn_salvar">
                        <button class="btn_salvar_adm">Salvar</button>
                    </div>
                </div>
                
            </div>
            <div class="conatiner_cadastro_adm_items">
                <div class="conatiner_cadastro_adm_pedido_header">
                    <div class="item_flex_pedido">
                        <label for="">Cliente</label>
                        <input readonly type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Contato</label>
                        <input readonly id="input_2_pedido" type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">CEP</label>
                        <input readonly id="input_2_pedido"  type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Rua</label>
                        <input readonly type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">N°</label>
                        <input readonly id="input_3_pedido"  type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Bairro</label>
                        <input readonly type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Cidade</label>
                        <input readonly type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Estado</label>
                        <input readonly id="input_3_pedido" type="text">
                    </div>

                </div>
                <div class="shape_pedido"></div>
                <div class="conatiner_cadastro_adm_pedido_body">
                    <div class="conatiner_cadastro_adm_pedido_body_left">
                        <div class="item_flex_pedido">
                            <label for="">Produto</label>
                            <input readonly type="text">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Quant.</label>
                            <input id="input_3_pedido" readonly type="text">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Cor</label>
                            <input id="input_2_pedido" readonly type="text">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Preço Total</label>
                            <input id="input_2_pedido" readonly type="text">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Status Pedido</label>
                            <select name="" id="">
                                <option value="">A pagar</option>
                                <option value="">Produção</option>
                                <option value="">Envio</option>
                                <option value="">Entregue</option>
                            </select>
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Código de Rastreio</label>
                            <input type="text">
                        </div>

                    </div>
                    <div class="conatiner_cadastro_adm_pedido_body_right">
                        <div class="item_flex_pedido">
                            <label for="">Imagem</label>
                            <div class="conatiner_img_pedido_adm">
                                
                            </div>
                        </div>
                        
                    </div>

                </div>
               
          
            </div>
            <div  id="conatiner_btn_adm_pc" class="conatiner_btn_adm">
                <button class="btn_salvar_adm">Salvar</button>
            </div>
            
        
        </div>
    

    </main>


    <script src="adm_nav.js"></script>
    <script src="btn_listar_adm.js"></script>
</body>
</html>