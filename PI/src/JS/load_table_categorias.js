

document.addEventListener('DOMContentLoaded', function () {
    
    let botoesStatus = document.querySelectorAll('.btn_item_listar_categorias')
    botoesStatus.forEach(elemento =>{
        elemento.addEventListener('click', handleTablesCategorias)
    })
    handleTablesCategorias();
});

async function handleTablesCategorias(event=null){

    let table = document.getElementById('dados_categoria')
    if(table){

        table.innerHTML = ""
    }
    let args = event && event.target.getAttribute("data-status") != '' ?  'status=' + event.target.getAttribute("data-status") : null;

    try{
        let dados_php = await fetch(`../../App/Session/carrega_tabela_categorias.php?${args ? args : ""}`);
        let response = await dados_php.json();

        response.forEach(e =>{
            table.innerHTML +=`<td><img src='${e.imagem}' alt="Imagem" style="max-width:100px; max-height:50px;"></td>
            <td>${e.id_categoria}</td>
            <td>${e.nome}</td>
            <td>${e.status_categoria == "a" ? "ativado" : "inativado"}</td>
            <td>
                   <div class="container_item_list_ações">
                        <a href="categoria_adm.php?id=${e.id_categoria}"><i class="fa-solid fa-eye"></i></a>
                    </div>
            </td>
            `;

        })
        i
        
    }
    catch(erro){

    }
    
}
