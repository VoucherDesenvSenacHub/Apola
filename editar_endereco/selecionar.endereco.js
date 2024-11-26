document.getElementById("addressForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Impede o envio do formulário
    
    // Obter o endereço selecionado
    var selectedAddress = document.querySelector('input[name="address"]:checked').value;
    
    // Exibir mensagem de confirmação
    alert("Endereço salvo com sucesso: " + selectedAddress);
});

document.getElementById("cancelBtn").addEventListener("click", function() {
    alert("Operação cancelada.");
});
