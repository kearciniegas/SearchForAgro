const body = document.body;
    const labelToggle = document.querySelector(".theme-switch");

    labelToggle.addEventListener("click", (event) => {
      if (event.target.tagName.toLowerCase() !== 'input') {
        if (body.classList.contains("modo-oscuro")) {
          body.classList.remove("modo-oscuro");
          localStorage.setItem("modo", "claro");
        } else {
          body.classList.add("modo-oscuro");
          localStorage.setItem("modo", "oscuro");
        }
      }
    });
    const modoAlmacenado = localStorage.getItem("modo");
    if (modoAlmacenado) {
      body.classList.add(
        modoAlmacenado === "oscuro" ? "modo-oscuro" : "modo-claro"
      );
    }