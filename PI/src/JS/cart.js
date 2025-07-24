

document.addEventListener('DOMContentLoaded', function(){

    const BtnAddCart = document.querySelectorAll(".btn-cart-add"); 



    BtnAddCart.forEach(itemProdutoBtn => {

        itemProdutoBtn.addEventListener('click', () =>{



            let $idProduto = itemProdutoBtn.Atr('d');



            ProdutObject = {
                'id_produto' => $idProduto
            }

            console.log(`Add cart ${$idProduto}`)

        })
        
    });


});