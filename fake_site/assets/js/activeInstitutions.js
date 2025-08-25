$(".btn-activate, .btn-deactivate").click(function () {
  const id = $(this).data("id");
  const accion = $(this).hasClass("btn-activate") ? "activar" : "desactivar";

  $.ajax({
    url: "../../../controllers/institutionsActionsController.php",
    type: "POST",
    data: { action: accion, id: id },
    dataType: "json",
    success: function (response) {
      console.log("Respuesta:", response);
      if (response.success) {
        location.reload();
      } else {
        alert("Error: " + (response.message ?? "sin mensaje"));
      }
    },
    error: function (xhr, status, error) {
      console.error("Error en AJAX:", xhr.responseText);
      try {
        const res = JSON.parse(xhr.responseText);
        alert("Error: " + (res.message || "Ocurrió un error"));
      } catch (e) {
        alert("Error inesperado: " + error);
      }
    },

    // error: function (xhr, status, error) {
    //   console.error("XHR response:", xhr.responseText);
    //   const nuevaVentana = window.open("", "_blank");
    //   nuevaVentana.document.write("<pre>" + xhr.responseText + "</pre>");
    // },
  });
});
