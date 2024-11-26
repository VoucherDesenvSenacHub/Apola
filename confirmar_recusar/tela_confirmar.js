document.getElementById("cancelBtn").addEventListener("click", function() {
    document.getElementById("modal").classList.remove("hidden");
});

document.getElementById("cancelModalBtn").addEventListener("click", function() {
    document.getElementById("modal").classList.add("hidden");
});

document.getElementById("confirmBtn").addEventListener("click", function() {
    var confirmationText = document.getElementById("confirmText").value;
    if (confirmationText.toUpperCase() === "CONFIRMAR") {
        alert("Pedido recusado com sucesso.");
        document.getElementById("modal").classList.add("hidden");
    } else {
        alert("Por favor, digite 'CONFIRMAR' para recusar.");
    }
});
