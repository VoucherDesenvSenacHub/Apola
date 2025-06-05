


document.addEventListener('DOMContentLoaded', function () {
    let dados_tabela = document.getElementById('dados_categoria');
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
                html += `<td>${response[i].id_categoria}</td>`
                html += `<td> ${response[i].nome}</td>`;
                if (response[i].status_categoria == "a"){
                    html += `<td>${"Ativado"}</td>`;
                    
                }
                else{
                    html += `<td>${"Inativado"}</td>`;
                }
                
                html += `<td>
                    <div class="container_item_list_ações">
                        <a href="categoria_adm.php?id=${response[i].id_categoria}"><i class="fa-solid fa-eye"></i></a>
                    </div>
                </td>`;



            //     html += '<div class="container_item_list_ações">';
            //     html += `<a href="categoria_adm.php?id=${response[i].categoria_id_categoria}`
            }

            dados_tabela.innerHTML = html;

        } catch (error) {
            console.error("Erro ao carregar a tabela:", error);
            dados_tabela.innerHTML = "<tr><td colspan='3'>Erro ao carregar dados</td></tr>";
        }
    }
    load_table();
})


btn_todos.addEventListener('click', function () {
    let dados_tabela = document.getElementById('dados_categoria');
    let html = "";

    async function load_table() {
        html = ""; // Limpa conteúdo antigo

        try {
            let dados_php = await fetch('../../App/Session/carrega_tabela_categorias.php');
            let response = await dados_php.json();
            // console.log(response);
            let btn_todos = document.getElementById('btn_todos');
            let btn_ativos = document.getElementById('btn_ativos');
            let btn_inativos = document.getElementById('btn_inativos');


            const total_categorias = response.length
            const categorias_inativas = response.filter(p =>p.status_categoria === "i").length
            const categorias_ativas = response.filter(p => p.status_categoria === "a").length
            console.log(produtos_ativos)
            let dados_media = document.querySelectorAll('.n_item_dados_produto');
            dados_media[0].innerText= `Nº ${total_categorias}`;
            dados_media[1].innerText= `Nº ${categorias_inativas}`;
            dados_media[2].innerText= `Nº ${categorias_ativas}`;

            for (let i = 0; i < response.length; i++) {
                html += '<tr>';
                html += `<td>  <img src= '${response[i].imagem}' alt="Imagem"  style="max-width:100px; max-height:50px;"></td>`
                html += `<td>${response[i].id_categoria}</td>`
                html += `<td> ${response[i].nome}</td>`;
                if (response[i].status_categoria == "a"){
                    html += `<td>${"Ativado"}</td>`;
                    
                }
                else{
                    html += `<td>${"Inativado"}</td>`;
                }
                
                html += `<td>
                    <div class="container_item_list_ações">
                        <a href="categoria_adm.php?id=${response[i].id_categoria}"><i class="fa-solid fa-eye"></i></a>
                    </div>
                </td>`;



            //     html += '<div class="container_item_list_ações">';
            //     html += `<a href="categoria_adm.php?id=${response[i].categoria_id_categoria}`
            }

            dados_tabela.innerHTML = html;

        } catch (error) {
            console.error("Erro ao carregar a tabela:", error);
            dados_tabela.innerHTML = "<tr><td colspan='3'>Erro ao carregar dados</td></tr>";
        }
    }
    load_table();
})