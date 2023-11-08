const cardContainers = document.querySelectorAll(".card-container");

        for (const cardContainer of cardContainers) {
            const links = cardContainer.querySelector(".horariosConsultas");
            const icon = cardContainer.querySelector(".horariosConsultas i");
            const agenda = cardContainer.querySelector(".agenda");
            const cardPsi = cardContainer.querySelector(".exibir-psicologo");

            links.addEventListener("click", function(event) {
                event.preventDefault();
                agenda.classList.toggle("aberto");

                if (agenda.classList.contains("aberto")) {
                    cardPsi.classList.remove("tamanho");
                    agenda.classList.remove("self-start");
                    agenda.classList.add("self-center");
                    icon.classList.remove("bi-calendar2-plus");
                    icon.classList.add("bi-calendar2-x");
                } else {
                    cardPsi.classList.add("tamanho");
                    icon.classList.remove("bi-calendar2-x");
                    icon.classList.add("bi-calendar2-plus");
                    agenda.classList.add("self-start");
                    agenda.classList.remove("self-center");
                }
            });
        }