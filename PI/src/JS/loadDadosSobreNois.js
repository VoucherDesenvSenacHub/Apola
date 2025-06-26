// const { EVENT_REFRESH } = require("@splidejs/splide");

let form = document.querySelector("form")

let modal1 = document.querySelector('.modal-sobre-nois-avaliado')
const idCliente = sessionStorage.getItem('idcliente')
let modal2 = document.querySelector('.modal-sobre-nois-not-avaliado')
// console.log(modal2)
function aparecerModal1() {
    modal1.classList.remove('modal-sobre-nois-avaliado');
    modal1.classList.add('modal-sobre-nois-avaliado-ative');
    setTimeout(() => {
        modal1.classList.remove('modal-sobre-nois-avaliado-ative');
        modal1.classList.add('modal-sobre-nois-avaliado');
    }, 5000);
}
function aparecerModal2(){
    modal2.classList.remove('modal-sobre-nois-not-avaliado');
    modal2.classList.add('modal-sobre-nois-not-avaliado-ative');

    setTimeout(() => {
        modal2.classList.remove('modal-sobre-nois-not-avaliado-ative');
        modal2.classList.add('modal-sobre-nois-not-avaliado');
    }, 6000);
}
form.addEventListener("submit" , e =>{
    e.preventDefault()
    if(idCliente){
        const formulario = new FormData(form)

        const [nota, comentario] = formulario.values();

        const bodyRequest ={
            notas: nota ,
            comentario: comentario,
            id_cliente: idCliente
        } 
        const caminho = '../../App/Session/inserir_avaliacoes.php';
        

        fetch(caminho, {
            method: 'POST',
            headers: {
                'Content-Type' : 'application/json'
                },
                body: JSON.stringify(bodyRequest)
                })
                .then(response => response.json())
                .then(data => {
                    console.log("Sucesso!!!!!!!", data)
                    aparecerModal1()
                })
                .catch((error)  => {
                        console.log('Error', error)
                        aparecerModal2()
                })
    }else{
        aparecerModal2()
    }
})

