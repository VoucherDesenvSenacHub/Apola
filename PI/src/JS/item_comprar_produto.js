
let ContentSolo = document.querySelectorAll('.descricao_produto_solo_cont');
const BtnFecharSolo = document.querySelectorAll('.icone_produto_solo_item');





ContentSolo.forEach(cotsolo =>{
    
    let BtnFechar = cotsolo.querySelector('.icone_produto_solo_item');
    cotsolo.addEventListener('click', () =>{
        const body = cotsolo.querySelector('.descricao_produto_solo_cont_body');
        body.classList.add('active_solo');

        
    })

})




BtnFecharSolo.forEach(soloFechar => {
    soloFechar.addEventListener('click', (event) => {
        event.stopPropagation(); // Evita que o click no botão feche a descrição
        const body = soloFechar.closest('.descricao_produto_solo_cont').querySelector('.descricao_produto_solo_cont_body');
        body.classList.remove('active_solo');
    });
});