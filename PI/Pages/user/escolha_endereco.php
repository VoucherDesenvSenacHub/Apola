<?php

include "head.php";
include "navbar_logado.php";

?>

<div class="container">
    <!-- <div class="step-indicator">
        <span class="" id="step-ativo">
            <i class="fa-solid fa-magnifying-glass-location"></i>
            <div class="span-information">
                <p id="step-passo">Passo 1</p>
                <p>Endereço</p>
            </div>
        </span>
        
        <img src="../../../../public/assets/img/linha-pontilhada.png" alt="">
        <span class="">
            <i class="fa-solid fa-cart-flatbed"></i>
            <div class="span-information">
                <p id="step-passo">Passo 2</p>
                <p>Entrega</p>
            </div>
        </span>
        <img src="../../../../public/assets/img/linha-pontilhada.png" alt="">
        <span class="">
            <i class="fa-solid fa-credit-card"></i>
            <div class="span-information">
                <p id="step-passo">Passo 3</p>
                <p>Pagamento</p>
            </div>
        </span>
      
    </div> -->

    <div class="enderecos">
        <h1 class="metodoh1">Selecione Endereço</h1>
        <div class="endereco-card">
            <label>
                <input type="radio" id="endereco" name="endereco" value="casa" checked>
                <label class="endereco-label" for="endereco">Casa</label>
                <div class="endereco-details">
                    <p>240 Rua Capiatá, Novos Estados, Campo Grande MS 79034331</p>
                    <!-- <p>(209) 555-0104</p> -->
                </div>
            </label>
            <div class="endereco-actions">
                <button class="edit"><i class="fa fa-pencil"></i></button>
                <button class="delete"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>

        <div class="endereco-card">
            <label>
                <input type="radio" id="endereco" name="endereco" value="trabalho">
                <label class="endereco-label" for="endereco">Trabalho <span class="default-tag">PADRÃO</span></label>
                <div class="endereco-details">
                    <p>2715 RUA Dr Jose, Caranda Bosque, Campo Grande MS 79034331</p>
                    <!-- <p>(67) 555-0127</p> -->
                </div>
            </label>
            <div class="endereco-actions">
                <button class="edit"><i class="fa fa-pencil"></i></button>
                <button class="delete"><i class="fa-solid fa-xmark"></i></button>
                
            </div>
        </div>
    </div>

  
    
    <div id="new-endereco-form" style="display: none;">
        <h2>Adicionar Novo Endereço</h2>
        <form id="form-novo-endereco">
            <label for="nome-endereco">Nome (ex: Casa, Trabalho):</label>
            <input type="text" id="nome-endereco" required>
    
            <label for="endereco-detalhes">Endereço Completo:</label>
            <input type="text" id="endereco-detalhes" required>
    
            <label for="telefone-endereco">Telefone:</label>
            <input type="text" id="telefone-endereco" required>
    
            <button type="submit" class="btoes-endereco">Salvar Endereço</button>


        </form>
    </div>
    
    <div class="enderecos" id="enderecos-list">
        <!-- Endereços existentes estarão aqui -->
    </div>

    <div class="add-new-endereco" id="add-new-endereco-btn">
        <i class="fa-solid fa-circle-plus"></i>
        <p>Adicionar novo endereço</p>
    </div>




    <dialog id="modal-1">
                    <div class="modal_header">
                    <button class="close-modal" data-modal="modal-1"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div class="modal_body">
                    <h5 class="title_modal_zap">Pedido enviado</h5>
                    <div class="text_modal_zap">Recebemos seu pedido e ele está em processo de análise. Em breve, você será notificado sobre a aprovação. Fique atento às atualizações no seu e-mail ou painel de pedidos. Dúvidas entre em contato.</div>
                    <div class="conatiner_item_modal_link_zap">
                        <div class="item_modal_link_zap">
                        <i class="fa-brands fa-whatsapp"></i>
                        <a href="https://wa.me/5567991924837" target="_blank">67 99192-4837</a>
                        </div>
                    </div>  
                    </div>
                </dialog>
              <script src="../src/JS/modal.js"></script>
            </div>

        </form>
        

    <div class="endereco-botoes">
        <a href="../../../../home.php"><button class="botao-sair">Sair</button></a>
        <div data-modal="modal-1" class="btn-finalizar open-modal"><a href=""></a>Avançar</div>
    </div>

  


</div>

</body>

</html>
<?php

include "footer.php";

?>














