document.addEventListener('DOMContentLoaded', function () {
    let dados_tabela = document.getElementById('dados_produtos');
    let html = "";

    async function load_table() {
        html = "";

        try {
            let dados_php = await fetch('../../App/Session/carrega_tabela_produtos.php');
            let response = await dados_php.json();
            console.log(response);

            for (let i = 0; i < response.length; i++) {
                html += '<tr>';
                html += `<td><img src='${response[i].imagem}' alt="Imagem" style="max-width:100px; max-height:50px;"></td>`;
                html += `<td>${response[i].id_produto}</td>`;
                html += `<td>${response[i].nome}</td>`;
                html += `<td>${response[i].preco}</td>`;
                html += `<td>${response[i].tipo}</td>`;
                html += `<td>${response[i].cor}</td>`;
                html += `<td>${response[i].tamanho}</td>`;
                html += `<td>${response[i].quantidade}</td>`;

                if (response[i].status_produto === "a") {
                    html += `<td>Ativado</td>`;
                } else {
                    html += `<td>Inativado</td>`;
                }

                html += `<td>
                    <div class="container_item_list_ações">
                        <a href="produtos_adm.php?id=${response[i].id_produto}"><i class="fa-solid fa-eye"></i></a>
                    </div>
                </td>`;

                html += '</tr>';
            }

            dados_tabela.innerHTML = html;

        } catch (error) {
            console.error("Erro ao carregar a tabela:", error);
            dados_tabela.innerHTML = "<tr><td colspan='9'>Erro ao carregar dados</td></tr>";
        }
    }

    load_table();
});
