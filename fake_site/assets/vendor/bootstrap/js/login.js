document.addEventListener("DOMContentLoaded", function () {
  let form = document.querySelector("#loginForm");
  let submitButton = document.querySelector("#submitButton");

  submitButton.addEventListener("click", function (event) {
    event.preventDefault();

    let email = document.querySelector("#email").value.trim();
    let pass = document.querySelector("#pass").value.trim();

    if (!email || !pass) {
      document.querySelector("#messaje").innerText =
        "Por favor, complete ambos campos del login.";
      return;
    }

    let formData = new URLSearchParams(new FormData(form)).toString();

    fetch("../controllers/loginController.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "success") {
          window.location.href = data.redirect_url;
        } else {
          document.querySelector("#messaje").innerText = data.message;
        }
      })
      .catch((error) => {
        document.querySelector("#messaje").innerText = "Error: " + error;
      });
  });
});
