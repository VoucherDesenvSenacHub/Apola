
const OpenBtnradio = document.getElementById('radio_cep');
const ConteudoBtnradio = document.getElementById('conatiner_cep_drop');
const OpenBtnradio2 = document.getElementById('radio_cep2');


OpenBtnradio.addEventListener("click", () =>{
    ConteudoBtnradio.classList.add("active_drop_cep");
    OpenBtnradio2.style.background = "transparent";
    OpenBtnradio.style.background = "#FA301E";
});



OpenBtnradio2.addEventListener("click", ()=>{
    ConteudoBtnradio.classList.remove("active_drop_cep")
    OpenBtnradio.style.background = "transparent";
    OpenBtnradio2.style.background = "#FA301E";
})




