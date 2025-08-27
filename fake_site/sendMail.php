<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Enviar Correo - Cooperar</title>
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/css/style.css">
    <style>
        body {
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .mail-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .mail-container h2 {
            color: #2d89ef;
            text-align: center;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            font-weight: bold;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            background-color: #2d89ef;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #1a5cb8;
        }
        #mensaje {
            margin-top: 15px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="mail-container">
        <h2>Enviar correo</h2>
        <form id="sendMailForm">
            <div class="input-group">
                <label for="to">Destinatario</label>
                <input type="email" name="to" id="to" placeholder="Ingrese correo del destinatario" required>
            </div>
            <button type="submit">Enviar correo</button>
        </form>
        <div id="mensaje"></div>
    </div>

    <script>
        document.getElementById('sendMailForm').addEventListener('submit', function(e){
            e.preventDefault();
            const formData = new FormData(this);
            fetch('controllers/sendMailController.php', { method: 'POST', body: formData })
            .then(res => res.json())
            .then(data => {
                const mensajeDiv = document.getElementById('mensaje');
                mensajeDiv.innerText = data.message;
                mensajeDiv.style.color = data.status === 'success' ? 'green' : 'red';
            })
            .catch(err => {
                const mensajeDiv = document.getElementById('mensaje');
                mensajeDiv.innerText = "Error inesperado. Intente más tarde.";
                mensajeDiv.style.color = 'red';
            });
        });
    </script>
</body>
</html>
