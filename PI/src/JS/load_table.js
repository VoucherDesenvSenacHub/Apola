let dados_tabela = document.getElementById('dados')
let html = "";

async function load_table(){
    
    let dados_php = await fetch('../../App/Session/carrega_tabela.php');
    let response = await dados_php.json();

    for(var i = 0; i < response.length; i++){
        html += '<tr>';
        html += '<td>';
        html += response[i].ID;
        html += '<tr>';
        html += '<td>';
        
    }
    dados_tabela.innerHTML = html;
}


