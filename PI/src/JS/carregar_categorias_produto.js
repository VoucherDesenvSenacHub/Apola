document.addEventListener('DOMContentLoaded', function () {
    const dadosCat = document.getElementById('dadosTodasCategoria');
    let html = '';

    async function load_categorias() {
        try {
            let dados_php = await fetch('../../App/Session/carrega_tabela_categorias.php');
            let response = await dados_php.json();
            console.log(response)
            for (let i = 0; i < response.length; i++) {
               html += `<option value="${response[i].id_categoria}">${response[i].nome}</option>`
            }

            dadosCat.innerHTML = html;

        } catch (error) {
            console.error("Erro ao carregar a tabela:", error);
            dadosCat.innerHTML = "<option>Erro ao carregar categorias</option>";
        }
    }

    load_categorias(); // Chama a função após garantir que o DOM está pronto

})