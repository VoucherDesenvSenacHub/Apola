

document.addEventListener('DOMContentLoaded', function(){

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let QuanCart  = document.querySelectorAll('.quantCartId')

    QuanCart.forEach(element => {
        element.innerHTML = cart.length
    });



    let idsProdutos = cart.map(item => parseInt(item.id_produto));

    fetch('../../App/Actions/buscar_produtos.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ ids: idsProdutos })
    })
    .then(response => response.json())
    .then(produtos => {
        let DivCart = document.getElementById('DivIdCart');
        DivCart.innerHTML = '';

        produtos.forEach(prod => {
        
            let prodCart = cart.find(c => parseInt(c.id_produto) === prod.id_produto);

            DivCart.innerHTML += `
            <ul class="produto_list_cart">
                <li class="produto_item_cart-1">
                    <div class="produto_item_cart_left">
                        <div class="container_img_produto_cart">
                            <img src="${prod.imagem}" alt="">
                        </div>
                    </div>
                    <div class="produto_item_cart_right">
                        <h6 class="name_produto_cart">${prod.nome}</h6>
                        <h6 class="detalhes_produto_cart">
                            <div class="cor_produto_cart">Cor - ${prod.cor ? prod.cor : ''}</div>
                            <div class="tamanho_produto_cart">Tamanho - ${prod.largura  }cm x ${prod.altura}cm</div>
                        </h6>
                    </div>
                </li>
                <li class="produto_item_cart-2">
                    <h6 class="preco_produto_cart">${prod.preco} R$</h6>
                </li>
                <li class="produto_item_cart-3">
                    <button data-id='${prod.id_produto}' class="subtrair_cart" > <i class="fa-solid fa-minus"></i> </button>
                    <h6 class="quant_produto_cart">${prodCart.quantidade}</h6>
                    <button data-id='${prod.id_produto}' class="adicionar_cart" > <i class="fa-solid fa-plus"></i> </button>
                </li>
                <li class="produto_item_cart-4">
                    <h6 class="preco_produto_cart"><div id="valor_produt${prod.id_produto}">${prod.preco * prodCart.quantidade}</div>  R$</h6>
                    <button data-id='${prod.id_produto}' class="container_remover_produto_cart remove_cart">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </li>
            </ul>
            <div class="shape_sacola"></div>
            `;
        });

        function updateCartUI(idProdutoItem, quantidade, novoTotal) {
            const elQuantidade = document.querySelector(`[data-id="${idProdutoItem}"]`)
                .closest('ul')
                .querySelector('.quant_produto_cart');
        
            if (elQuantidade) elQuantidade.textContent = quantidade;
        
            const elTotal = document.querySelector(`#valor_produt${idProdutoItem}`);
            if (elTotal) elTotal.innerHTML = `${novoTotal.toFixed(2)}`;
        }
        

        
        function addQuantCart(idProdutoItem) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
        
            let index = cart.findIndex(item => parseInt(item.id_produto) === parseInt(idProdutoItem));
        
            if (index !== -1) {
                cart[index].quantidade += 1;
                localStorage.setItem('cart', JSON.stringify(cart));
        
                const precoUnit = parseFloat(document.querySelector(`[data-id="${idProdutoItem}"]`)
                    .closest('ul')
                    .querySelector('.preco_produto_cart').textContent);
        
                let novoTotal = precoUnit * cart[index].quantidade;
        
                updateCartUI(idProdutoItem, cart[index].quantidade, novoTotal);
            }
        }
        

        function subQuantCart(idProdutoItem) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
        
            let index = cart.findIndex(item => parseInt(item.id_produto) === parseInt(idProdutoItem));
        
            if (index !== -1) {
                if (cart[index].quantidade > 1) {
                    cart[index].quantidade -= 1;
        
                    const precoUnit = parseFloat(document.querySelector(`[data-id="${idProdutoItem}"]`)
                        .closest('ul')
                        .querySelector('.preco_produto_cart').textContent);
        
                    let novoTotal = precoUnit * cart[index].quantidade;
        
                    updateCartUI(idProdutoItem, cart[index].quantidade, novoTotal);
                } else {
                    cart.splice(index, 1);
                    // Remove do DOM
                    const itemEl = document.querySelector(`[data-id="${idProdutoItem}"]`);
                    const parent = itemEl.closest('ul');
                    parent.nextElementSibling.remove(); // Remove shape_sacola
                    parent.remove();
                }
        
                localStorage.setItem('cart', JSON.stringify(cart));
            }
        }


        function  RemoveCart(idProdutoItem){

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            
            let index = cart.findIndex(item => parseInt(item.id_produto) === parseInt(idProdutoItem));
            
            cart.splice(index, 1);
        
            const itemEl = document.querySelector(`[data-id="${idProdutoItem}"]`);
            const parent = itemEl.closest('ul');
            parent.nextElementSibling.remove(); // Remove shape_sacola
            parent.remove();

            
 
            localStorage.setItem('cart', JSON.stringify(cart));
        }
        
        
        document.querySelectorAll('.adicionar_cart').forEach(btn => {
            btn.addEventListener('click', () => {
                const id = btn.getAttribute('data-id');
                addQuantCart(id);


            });
        });
        
        document.querySelectorAll('.subtrair_cart').forEach(btn => {
            btn.addEventListener('click', () => {

                const id = btn.getAttribute('data-id');
                subQuantCart(id);

                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                
                QuanCart.forEach(element => {
                    element.innerHTML = cart.length
                });
            });
        });
        
        document.querySelectorAll('.remove_cart').forEach(btn => {
            btn.addEventListener('click', () => {

            
                const id = btn.getAttribute('data-id');
                RemoveCart(id);

                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                
                QuanCart.forEach(element => {
                    element.innerHTML = cart.length
                });
                
            });
        });
        











    })
    .catch(err => {
        console.error('Erro ao buscar produtos:', err);
    });



    function verifyProdutoInCart(idProduto) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        let found = false;
    
        for (let objectProd of cart) {
            if (objectProd.id_produto === idProduto) {
                objectProd.quantidade += 1;
    
                localStorage.setItem('cart', JSON.stringify(cart));
                found = true;
                break; 
            }
        }
    
        return found;
    }
    
    function AddCart(idProduto) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
        let productExists = verifyProdutoInCart(idProduto);
    
        if (!productExists) {
            let ProdutObject = {
                id_produto: idProduto,
                quantidade: 1,
            };
    
            cart.push(ProdutObject);
            localStorage.setItem('cart', JSON.stringify(cart));

       
        }


        return true
    }
    

    const BtnAddCart = document.querySelectorAll(".btn-cart-add"); 


    BtnAddCart.forEach(itemProdutoBtn => {

        itemProdutoBtn.addEventListener('click', () =>{

            let idProduto = itemProdutoBtn.getAttribute('data-id');

            let StatusCart = AddCart(idProduto)

            if(StatusCart){

                console.log('Depois de add')

                let cart = JSON.parse(localStorage.getItem('cart')) || [];

                QuanCart.forEach(element => {
                    element.innerHTML = cart.length
                });
            

    

            }
        
          
        })
        
    });










});