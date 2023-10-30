const openModalButton1 = document.querySelector("#open");
const closeModalButton1 = document.querySelector("#close");
const modal1 = document.querySelector("#modal");
const fade1 = document.querySelector("#fade");

const toggleModal1 = () => {
  modal1.classList.toggle("hide");
  fade1.classList.toggle("hide");
};

[openModalButton1, closeModalButton1, fade1].forEach((el) => {
  el.addEventListener("click", () => toggleModal1());
});




const openModalButton2 = document.querySelector("#open-cadastro");
const closeModalButton2 = document.querySelector("#close-cadastro");
const modal2 = document.querySelector("#modal-cadastro");
const fade2 = document.querySelector("#fade-cadastro");

const toggleModal2 = () => {
  modal2.classList.toggle("hide");
  fade2.classList.toggle("hide");
};

[openModalButton2, closeModalButton2, fade2].forEach((el) => {
  el.addEventListener("click", () => toggleModal2());
});