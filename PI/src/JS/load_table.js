let dados_tabela = document.getElementById('dados')
let html = "";

async function load_table(){
    
    let dados_php = await fetch('../../App/Session/carrega_tabela.php');
    let response = await dados_php.json();
    console.log(response)

    for(var i = 0; i < response.length; i++){
        html += '<tr>';
        html += '<td>';
        html += response[i].ID;
        html += '<td>';
        html += response[i].Valor;
        html += '<td>';
        html += response[i].Tipo;
        html += '<td>';
        html += response[i].UF;
        html += '<td>';
        if (response[i].Tipo === "disponivel"){
            html += '<div class="container_item_list_ações">';
            html += `<a href="pedido_disponivel_adm.php?id=${response[i].ID}"><i class="fa-solid fa-eye"></i></a>`;
        }
        if (response[i].Tipo === "personalizado"){
            html += '<div class="container_item_list_ações">';
            html += '<a href="pedido_personalizado_adm.php"><i class="fa-solid fa-eye"></i></a>';
        }
        
    }
    dados_tabela.innerHTML = html;
}
