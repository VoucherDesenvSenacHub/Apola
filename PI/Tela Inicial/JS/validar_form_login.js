function validaFormlogin(){
    const emailLogin = document.getElementById('email-login').value.trim();
    const senhaLogin = document.getElementById('senha-login').value.trim();
    const conf_Senhal_login = document.getElementById('conf-senha-login').value.trim();
    const msnErro = document.getElementById("msnErro-login");

    const emailPattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

    msnErro.innerText = "";


    if (!emailPattern.test(emailLogin)){
        msnErro.innerText ="Por favor, insira um email valido";
        return false;
    } 

    if (senhaLogin.lenght < 6 || senhaLogin.lenght > 20){
        msnErro.innerText ="A senha deve ter no mínimo 6 caracteres e no máximo 20 caracteres.";
        return false;
    }

    if (senhaLogin != conf_Senhal_login){
        msnErro.innerText ="As senhas não conferem!";
        return false;
    }

    return true;

}