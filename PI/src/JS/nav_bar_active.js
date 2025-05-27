const ListItens = document.querySelectorAll(".side_bar-itens");
let caminhos = window.location.pathname.split("/").filter(Boolean);
let caminhoEspecifico = caminhos.pop();

ListItens.forEach((item) => {
    itemEspecifico = item.querySelector("a").href.split("/").filter(Boolean).pop();
        if (caminhoEspecifico != "" && caminhoEspecifico === itemEspecifico){
            item.classList.add("active")
        }
});