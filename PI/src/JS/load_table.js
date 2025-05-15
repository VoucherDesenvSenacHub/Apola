let dados_tabela = document.getElementById('dados')
let html = "";

async function load_table(){
    
    let dados_php = await fetch('../../App/Session/carrega_tabela.php');
    let response = await dados_php.json();

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
        html += '<div class="container_item_list_ações">';
        html += '<a href="pedido_personalizado_adm.php"><i class="fa-solid fa-eye"></i></a>';
        
    }
    dados_tabela.innerHTML = html;
}
