document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    const campos = [
        { id: "nome-cad", nome: "Nome" },
        { id: "sobrenome-cad", nome: "Sobrenome" },
        { id: "email-cad", nome: "E-mail", tipo: "email" },
        { id: "cpf-cad", nome: "CPF", tipo: "cpf" },
        { id: "cep-cad", nome: "CEP", tipo: "cep" },
        { id: "senha-cad", nome: "Senha", tipo: "senha" }
    ];

    form.addEventListener("submit", function (e) {
        let valido = true;

        campos.forEach(campo => {
            const input = document.getElementById(campo.id);
            const erroDiv = document.getElementById("erro-" + campo.id.replace("-cad", ""));
            const valor = input.value.trim();
            let erro = "";

            input.classList.remove("input-erro");
            erroDiv.textContent = "";

            if (!valor) {
                erro = campo.nome + " é obrigatório.";
            } else {
                if (campo.tipo === "email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(valor)) {
                    erro = "E-mail inválido.";
                }
                if (campo.tipo === "cpf" && !/^\d{11}$/.test(valor)) {
                    erro = "CPF inválido.";
                }
                if (campo.tipo === "cep" && !/^\d{8}$/.test(valor)) {
                    erro = "CEP inválido.";
                }
                if (campo.tipo === "senha" && valor.length < 6) {
                    erro = "Senha deve ter pelo menos 6 caracteres.";
                }
            }

            if (erro) {
                input.classList.add("input-erro");
                erroDiv.textContent = erro;
                valido = false;
            }
        });

        if (!valido) {
            e.preventDefault(); // Impede o envio se houver erro
        }
    });
});