const btnOpenDrop = document.getElementById("btnOpenDrop");
const ConteudoDrop = document.getElementById("ConteudoDrop");



btnOpenDrop.addEventListener('click', () => {
    ConteudoDrop.classList.toggle('active_pedido');
});

