const agora = new Date();
const hora = agora.getHours();

const saudacao = document.getElementById("saudacao");

if (hora >= 12 && hora <= 17) {
    saudacao.innerHTML = "Boa tarde";
} else if (hora >= 18 && hora <= 23) {
    saudacao.innerHTML = "Boa noite";
} else {
    saudacao.innerHTML = "Bom dia";
}