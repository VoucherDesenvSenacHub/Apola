

// document.addEventListener('DOMContentLoaded', function () {
//     let btn_todos = document.getElementById('btn_todos');
//     let btn_ativos = document.getElementById('btn_ativos');
//     let btn_inativos = document.getElementById('btn_inativos');


//     let dados_tabela = document.getElementById('dados_produtos');
    
//     let html = "";

//     async function load_table() {
//         html = "";

//         try {
//             let dados_php = await fetch('../../App/Session/carrega_tabela_produtos.php');
//             let response = await dados_php.json();
//             console.log(response);
//             const total_produtos = response.length
//             const produtos_inativos = response.filter(p =>p.status_produto === "i").length
//             const produtos_ativos = response.filter(p => p.status_produto === "a").length
//             console.log(produtos_ativos)
//             let dados_media = document.querySelectorAll('.n_item_dados_produto');
//             dados_media[0].innerText= `Nº ${total_produtos}`;
//             dados_media[1].innerText= `Nº ${produtos_inativos}`;
//             dados_media[2].innerText= `Nº ${produtos_ativos}`;
//             for (let i = 0; i < response.length; i++) {
//                 html += '<tr>';
//                 html += `<td><img src='${response[i].imagem}' alt="Imagem" style="max-width:100px; max-height:50px;"></td>`;
//                 // html += `<td>${response[i].id_produto}</td>`;
//                 html += `<td>${response[i].nome}</td>`;
//                 html += `<td>${response[i].preco}</td>`;
//                 html += `<td>${response[i].tipo}</td>`;
//                 // html += `<td>${response[i].cor}</td>`;
//                 // html += `<td>${response[i].tamanho}</td>`;
//                 // html += `<td>${response[i].quantidade}</td>`;

//                 if (response[i].status_produto === "a") {
//                     html += `<td>Ativado</td>`;
//                 } else {
//                     html += `<td>Inativado</td>`;
//                 }

//                 html += `<td>
//                     <div class="container_item_list_ações">
//                         <a href="produtos_adm.php?id=${response[i].id_produto}"><i class="fa-solid fa-eye"></i></a>
//                     </div>
//                 </td>`;

//                 html += '</tr>';
//             }

//             dados_tabela.innerHTML = html;

//         } catch (error) {
//             console.error("Erro ao carregar a tabela:", error);
//             dados_tabela.innerHTML = "<tr><td colspan='9'>Erro ao carregar dados</td></tr>";
//         }
//     }

//     load_table();
// });



// btn_todos.addEventListener('click',  function () {
//     let dados_tabela = document.getElementById('dados_produtos');
//     let html = "";

//     async function load_table() {
//         html = "";

//         try {
//             let dados_php = await fetch('../../App/Session/carrega_tabela_produtos.php');
//             let response = await dados_php.json();
//             console.log(response);

//             for (let i = 0; i < response.length; i++) {
//                 html += '<tr>';
//                 html += `<td><img src='${response[i].imagem}' alt="Imagem" style="max-width:100px; max-height:50px;"></td>`;
//                 // html += `<td>${response[i].id_produto}</td>`;
//                 html += `<td>${response[i].nome}</td>`;
//                 html += `<td>${response[i].preco}</td>`;
//                 html += `<td>${response[i].tipo}</td>`;
//                 // html += `<td>${response[i].cor}</td>`;
//                 // html += `<td>${response[i].tamanho}</td>`;
//                 // html += `<td>${response[i].quantidade}</td>`;

//                 if (response[i].status_produto === "a") {
//                     html += `<td>Ativado</td>`;
//                 } else {
//                     html += `<td>Inativado</td>`;
//                 }

//                 html += `<td>
//                     <div class="container_item_list_ações">
//                         <a href="produtos_adm.php?id=${response[i].id_produto}"><i class="fa-solid fa-eye"></i></a>
//                     </div>
//                 </td>`;

//                 html += '</tr>';
//             }

//             dados_tabela.innerHTML = html;

//         } catch (error) {
//             console.error("Erro ao carregar a tabela:", error);
//             dados_tabela.innerHTML = "<tr><td colspan='9'>Erro ao carregar dados</td></tr>";
//         }
//     }

//     load_table();
// })

// btn_ativos.addEventListener('click',  function () {
//     let dados_tabela = document.getElementById('dados_produtos');
//     let html = "";

//     async function load_table_ativos() {
//         html = "";

//         try {
//             let dados_php = await fetch('../../App/Session/carrega_tabela_produtos.php?status=ativo');
//             let response = await dados_php.json();
//             console.log(response);

//             for (let i = 0; i < response.length; i++) {
//                 html += '<tr>';
//                 html += `<td><img src='${response[i].imagem}' alt="Imagem" style="max-width:100px; max-height:50px;"></td>`;
//                 // html += `<td>${response[i].id_produto}</td>`;
//                 html += `<td>${response[i].nome}</td>`;
//                 html += `<td>${response[i].preco}</td>`;
//                 html += `<td>${response[i].tipo}</td>`;
//                 // html += `<td>${response[i].cor}</td>`;
//                 // html += `<td>${response[i].tamanho}</td>`;
//                 // html += `<td>${response[i].quantidade}</td>`;

//                 if (response[i].status_produto === "a") {
//                     html += `<td>Ativado</td>`;
//                 } else {
//                     html += `<td>Inativado</td>`;
//                 }

//                 html += `<td>
//                     <div class="container_item_list_ações">
//                         <a href="produtos_adm.php?id=${response[i].id_produto}"><i class="fa-solid fa-eye"></i></a>
//                     </div>
//                 </td>`;

//                 html += '</tr>';
//             }

//             dados_tabela.innerHTML = html;

//         } catch (error) {
//             console.error("Erro ao carregar a tabela:", error);
//             dados_tabela.innerHTML = "<tr><td colspan='9'>Erro ao carregar dados</td></tr>";
//         }
//     }

//     load_table_ativos();

// })


// btn_inativos.addEventListener('click',  function () {
//     let dados_tabela = document.getElementById('dados_produtos');
//     let html = "";

//     async function load_table_inativos() {
//         html = "";

//         try {
//             let dados_php = await fetch('../../App/Session/carrega_tabela_produtos.php?status=inativo');
//             let response = await dados_php.json();
//             console.log(response);

//             for (let i = 0; i < response.length; i++) {
//                 html += '<tr>';
//                 html += `<td><img src='${response[i].imagem}' alt="Imagem" style="max-width:100px; max-height:50px;"></td>`;
//                 // html += `<td>${response[i].id_produto}</td>`;
//                 html += `<td>${response[i].nome}</td>`;
//                 html += `<td>${response[i].preco}</td>`;
//                 html += `<td>${response[i].tipo}</td>`;
//                 // html += `<td>${response[i].cor}</td>`;
//                 // html += `<td>${response[i].tamanho}</td>`;
//                 // html += `<td>${response[i].quantidade}</td>`;

//                 if (response[i].status_produto === "a") {
//                     html += `<td>Ativado</td>`;
//                 } else {
//                     html += `<td>Inativado</td>`;
//                 }

//                 html += `<td>
//                     <div class="container_item_list_ações">
//                         <a href="produtos_adm.php?id=${response[i].id_produto}"><i class="fa-solid fa-eye"></i></a>
//                     </div>
//                 </td>`;

//                 html += '</tr>';
//             }

//             dados_tabela.innerHTML = html;

//         } catch (error) {
//             console.error("Erro ao carregar a tabela:", error);
//             dados_tabela.innerHTML = "<tr><td colspan='9'>Erro ao carregar dados</td></tr>";
//         }
//     }

//     load_table_inativos();

// })





document.addEventListener('DOMContentLoaded', function () {
    
    let botoesStatus = document.querySelectorAll('.btn_item_listar_produtos')
    botoesStatus.forEach(elemento =>{
        elemento.addEventListener('click', handleTablesProdutos)
    })
    handleTablesProdutos();
    
});

async function handleTablesProdutos(event=null){

    let table = document.getElementById('dados_produtos')
    table.innerHTML = ""
    let args = event && event.target.getAttribute("data-status") != '' ?  'status=' + event.target.getAttribute("data-status") : null;

    console.log(args)
    try{
        let dados_php = await fetch(`../../App/Session/carrega_tabela_produtos.php?${args ? args : ""}`);
        let response = await dados_php.json();

        
        console.log(response)

        response.forEach(e =>{
            table.innerHTML +=`<td><img src='${e.imagem}' alt="Imagem" style="max-width:100px; max-height:50px;"></td>
            <td>${e.nome}</td>
            <td>${e.preco}</td>
            <td>${e.tipo}</td>
            <td>${e.status_produto == "a" ? "ativado" : "inativado"}</td>
            <td>
                   <div class="container_item_list_ações">
                        <a href="produtos_adm.php?id=${e.id_produto}"><i class="fa-solid fa-eye"></i></a>
                    </div>
            </td>
            `;

        })
        i
        
    }
    catch(erro){

    }
    
}






