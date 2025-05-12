window.onload = () => {
    const usuarioAntigo = localStorage.getItem("usuarioAntigo");
    if (!usuarioAntigo) {
    alert("Acesso inválido. Redirecionando...");
    window.location.href = "login_funcionario.html";
    }
};

function mostrarPreview(input) {
    const file = input.files[0];
    const preview = document.getElementById("preview");
    if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = "block";
    };
    reader.readAsDataURL(file);
    }
}

function salvarCadastro() {
    const novoNome = document.getElementById("novoNome").value.trim();
    const novaSenha = document.getElementById("novaSenha").value;
    const foto = document.getElementById("foto").files[0];

    if (!novoNome || !novaSenha || !foto) {
    alert("Preencha todos os campos e envie uma foto.");
    return;
    }

    const usuarios = JSON.parse(localStorage.getItem("usuarios"));

    if (usuarios[novoNome]) {
    alert("Esse nome de login já está em uso. Escolha outro.");
    return;
    }

    const reader = new FileReader();
    reader.onload = function (e) {
    const usuarioAntigo = localStorage.getItem("usuarioAntigo");

    // Remove o usuário antigo e cria o novo com os dados informados
    delete usuarios[usuarioAntigo];

    usuarios[novoNome] = {
        senha: novaSenha,
        foto: e.target.result,
        cadastroCompleto: true
    };

    localStorage.setItem("usuarios", JSON.stringify(usuarios));
    localStorage.removeItem("usuarioAntigo");

    alert("Cadastro finalizado! Faça login com o novo nome.");
    window.location.href = "login_funcionario.html";
    };

    reader.readAsDataURL(foto);
}
