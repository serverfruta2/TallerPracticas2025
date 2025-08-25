document.addEventListener("DOMContentLoaded", function () {
  // Validación campos numéricos
  document.querySelectorAll(".validar-numeros").forEach((input) => {
    const mensaje = input.nextElementSibling;

    input.addEventListener("input", function () {
      let original = this.value;
      let valor = original.replace(/\D/g, "");

      if (original !== valor) {
        mensaje.textContent = "Solo se permiten números";
        mensaje.style.display = "block";
      } else {
        mensaje.style.display = "none";
      }

      if (valor.length > 0 && valor.startsWith("0")) {
        mensaje.textContent = "El número no puede comenzar con 0";
        mensaje.style.display = "block";
        valor = "";
      }

      if (this.name === "entity_code") {
        valor = valor.slice(0, 11);
      } else if (this.name === "number") {
        valor = valor.slice(0, 8);
      }

      this.value = valor;
    });
  });

  // Validación para calle (solo letras, con acentos y espacios)
  const calleInput = document.getElementById("street");
  const calleError = document.createElement("div");
  calleError.classList.add("mensaje-error");
  calleInput.insertAdjacentElement("afterend", calleError);

  calleInput.addEventListener("input", function () {
    let original = this.value;
    let limpio = original.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, "");

    if (original !== limpio) {
      calleError.textContent = "Solo se permiten letras y espacios";
      calleError.style.display = "block";
    } else {
      calleError.style.display = "none";
    }

    this.value = limpio;
  });
});
