




const openModalButton2 = document.querySelector("#open-cadastro");
const closeModalButton2 = document.querySelector("#close-cadastro");
const modal2 = document.querySelector("#default-modal-cadastro");
const fade2 = document.querySelector("#fade-cadastro");

const toggleModal2 = () => {
  modal2.classList.toggle("hide");
  fade2.classList.toggle("hide");
};

[openModalButton2, closeModalButton2, fade2].forEach((el) => {
  el.addEventListener("click", () => toggleModal2());
});