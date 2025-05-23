// Seleciona todos os elementos com a classe "card_Produto"
document.addEventListener('DOMContentLoaded', function(){

    let listaProdutosAtuais = document.querySelectorAll('.card_produto');
    
    listaProdutosAtuais.forEach(function (produto) {
        let btn = produto.querySelector("button.favoritar");
        console.log(btn);
        
    });
    
   

})










