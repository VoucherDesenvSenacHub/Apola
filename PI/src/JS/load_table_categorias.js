let dados_tabela = document.getElementById('dados');
let html = "";

async function load_table() {
    html = ""; // Limpa conteúdo antigo

    try {
        let dados_php = await fetch('../../App/Session/carrega_tabela_categorias.php');
        let response = await dados_php.json();
        console.log(response);

        for (let i = 0; i < response.length; i++) {
            html += '<tr>';
            html += `<td>  <img src= '${response[i].imagem}' alt="Imagem"  style="max-width:100px; max-height:50px;"></td>`
            html += `<td> ${response[i].nome}</td>`;
            if (response[i].status_categoria == "a"){
                html += `<td>${"Ativado"}</td>`;
                
            }
            else{
                html += `<td>${"Inativado"}</td>`;
            }
            
            html += '<td>';

            html += '<div class="container_item_list_ações">';
            html += `<a href="categoria_adm.php?id=${response[i].id_categoria}"><i class="fa-solid fa-eye"></i></a>`;
            // if (response[i].Tipo === "disponivel") {
            //     html += `<a href="pedido_disponivel_adm.php?id=${response[i].ID}"><i class="fa-solid fa-eye"></i></a>`;
            // } else if (response[i].Tipo === "personalizado") {
            //     html += `<a href="pedido_personalizado_adm.php?id=${response[i].ID}"><i class="fa-solid fa-eye"></i></a>`;
            // }
            html += '</div>';

            html += '</td>';
            html += '</tr>';
        }

        dados_tabela.innerHTML = html;

    } catch (error) {
        console.error("Erro ao carregar a tabela:", error);
        dados_tabela.innerHTML = "<tr><td colspan='3'>Erro ao carregar dados</td></tr>";
    }
}
