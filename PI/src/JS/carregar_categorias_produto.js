document.addEventListener('DOMContentLoaded', function () {
    const dadosCat = document.getElementById('dadosTodasCategoria');
    let html = '';

    async function load_categorias() {
        try {
            let dados_php = await fetch('../../App/Session/carrega_tabela_categorias.php');
            let dados_produto_php = await fetch('../../App/Session/carrega_tabela_produtos.php');
            let response = await dados_php.json();
            let responseProduto = await dados_produto_php.json();

            const produto = responseProduto[0]; 
            const categoriaSelecionada = produto.categoria_id_categoria;
            console.log(categoriaSelecionada);
            for (let i = 0; i < response.length; i++) {
                let categoria = response[i];
                let selected = categoria.id_categoria == categoriaSelecionada ? 'selected' : '';
                html += `<option value="${categoria.id_categoria}" ${selected}>${categoria.nome}</option>`;
            }

            dadosCat.innerHTML = html;

        } catch (error) {
            console.error("Erro ao carregar a tabela:", error);
            dadosCat.innerHTML = "<option>Erro ao carregar categorias</option>";
        }
    }

    load_categorias(); // Chama a função após garantir que o DOM está pronto

})