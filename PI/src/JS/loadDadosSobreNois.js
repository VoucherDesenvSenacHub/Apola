let form = document.querySelector("form")
const idCliente = sessionStorage.getItem('idcliente')


form.addEventListener("submit" , e =>{
    e.preventDefault()

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
            })
            .catch((error)  => {
                    console.log('Error', error)
            })

    })