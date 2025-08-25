// assets/js/activeUser.js
$(document).ready(function () {
  // Delegación de eventos para que funcione con DataTables y cambios dinámicos
  $(document).on("click", ".btn-activate, .btn-deactivate", function () {
    const id = $(this).data("id");
    const accion = $(this).hasClass("btn-activate") ? "activar" : "desactivar";

    if (!confirm(`¿Estás seguro de que querés ${accion} este usuario?`)) return;

    $.ajax({
      url: "../../controllers/usersActionsController.php",  // <-- Corrige la ruta y el nombre del archivo
      type: "POST",
      data: { action: accion, id: id },
      dataType: "json",
      success: function (response) {
        // console.log("Respuesta:", response); // DEBUG
        if (response.success) {
          location.reload();
        } else {
          alert("Error: " + (response.message ?? "sin mensaje"));
        }
      },
      error: function (xhr, status, error) {
        // console.error("Error en AJAX:", xhr.responseText); // DEBUG
        try {
          const res = JSON.parse(xhr.responseText);
          alert("Error: " + (res.message || "Ocurrió un error"));
        } catch (e) {
          alert("Error inesperado: " + error);
        }
      }
    });
  });
});

$(document).on("click", ".btn-reset-password", function() {
  const userId = $(this).data("id");
  const userEmail = $(this).data("email");

  if (confirm("¿Seguro que desea restablecer la contraseña para este usuario?")) {
    $.ajax({
      url: "../../../controllers/user_reset_password.php", // Ajusta esta ruta si es necesario
      type: "POST",
      dataType: "json",
      data: { id: userId, email: userEmail },
      success: function(response) {
        if (response.status === "success") {
          alert("Contraseña restablecida y correo enviado.");
          location.reload();
        } else {
          alert("Error: " + response.message);
        }
      },
      error: function() {
        alert("Error al restablecer la contraseña.");
      }
    }); // Cierre del $.ajax()
  } // Cierre del if (confirm...)
}); // Cierre del .on("click"...)
