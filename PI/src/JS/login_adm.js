
if (!localStorage.getItem("usuarios")) {
    const usuariosIniciais = {
    joao: { senha: "1234", cadastroCompleto: false },
    maria: { senha: "abcd", cadastroCompleto: false },
    carlos: { senha: "senha", cadastroCompleto: false }
    };
    localStorage.setItem("usuarios", JSON.stringify(usuariosIniciais));
}

function verificarLogin() {
    const user = document.getElementById("usuario").value.trim();
    const senha = document.getElementById("senha").value;

    const usuarios = JSON.parse(localStorage.getItem("usuarios"));

    if (usuarios[user] && usuarios[user].senha === senha) {
    if (!usuarios[user].cadastroCompleto) {
        localStorage.setItem("usuarioAntigo", user);
        window.location.href = "cadastro_funcionario.html";
    } else {
        alert("Login realizado com sucesso!");
        window.location.href = "dashbord_adm.php";
    }
    } else {
    alert("Usuário ou senha inválidos.");
    }
}
