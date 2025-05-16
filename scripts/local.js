document.addEventListener("DOMContentLoaded", () => {
    const temaSalvo = localStorage.getItem("tema");
    const idiomaSalvo = localStorage.getItem("idioma");

    // Aplica tema
    if (temaSalvo) {
        document.body.classList.add("tema-" + temaSalvo);
        const radio = document.querySelector(`input[name="tema"][value="${temaSalvo}"]`);
        if (radio) radio.checked = true;
    }

    // Aplica idioma
    if (idiomaSalvo) {
        const select = document.getElementById("idioma");
        if (select) select.value = idiomaSalvo;
    }

    // Quando o formulário for enviado
    const form = document.querySelector("form");
    if (form) {
        form.addEventListener("submit", () => {
            const tema = document.querySelector('input[name="tema"]:checked')?.value;
            const idioma = document.getElementById("idioma")?.value;

            if (tema) localStorage.setItem("tema", tema);
            if (idioma) localStorage.setItem("idioma", idioma);
        });
    }
});

