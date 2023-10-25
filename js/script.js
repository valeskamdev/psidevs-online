const openModalButton = document.querySelector("#open");
const closeModalButton = document.querySelector("#close");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");
// const modal = document.querySelector('[name="modal"]');

const toggleModal = () => {
  modal.classList.toggle("hide");
  fade.classList.toggle("hide");
};

[openModalButton, closeModalButton, fade].forEach((el) => {
  el.addEventListener("click", () => toggleModal());
});