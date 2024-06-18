import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

// Trovo tutti i bottoni di cancellazione
const deleteBtns = document.querySelectorAll(".delete-form button");

if (deleteBtns.length > 0) {
    // per ogni bottone mettiti in ascolto del click
    deleteBtns.forEach((btn) => {
        btn.addEventListener("click", function (event) {
            // prevenire il ricaricameto della pagina
            event.preventDefault();
            console.log("Apri modale");
            // creo il modale in js
            const modal = new bootstrap.Modal(
                document.getElementById("delete-modal")
            );
            // Prelevo il titolo della pasta dal data attribute nel bottone
            const pastaTitle = btn.dataset.pastaTitle;
            // Inserisco i dati della pasta nel modale
            document.getElementById(
                "modal-title"
            ).innerHTML = `Stai per cancellare ${pastaTitle}`;

            // mettersi in ascolto del click sul bottone modal-deletebtn
            document
                .getElementById("modal-delete-btn")
                .addEventListener("click", function () {
                    btn.parentElement.submit();
                });

            // mostro il modale
            modal.show();
        });
    });
}
