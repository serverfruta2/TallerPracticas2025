<?php
require __DIR__ . '/../assets/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST['to'] ?? null;

    if (!$to) {
        die(json_encode(['status' => 'error', 'message' => 'No se especificó destinatario.']));
    }

    $mail = new PHPMailer(true);

    try {
        // Configuración SMTP usando variables de entorno del Docker
        $mail->isSMTP();
        $mail->Host       = getenv('MAIL_HOST');
        $mail->SMTPAuth   = true;
        $mail->Username   = getenv('MAIL_USER');
        $mail->Password   = getenv('MAIL_PASS');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = getenv('MAIL_PORT');

        // Remitente
        $mail->setFrom(getenv('MAIL_FROM'), getenv('MAIL_FROM_NAME'));
        $mail->addAddress($to);

        // Contenido del mail
        $mail->isHTML(true);
        $mail->Subject = "Notificación Cooperar";
        $mail->Body = '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Notificación Cooperar</title>
        </head>
        <body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color:#f5f5f5;">
            <table align="center" width="100%" cellpadding="0" cellspacing="0" style="max-width:600px; margin:0 auto; background-color:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 0 15px rgba(0,0,0,0.1);">
                <tr>
                    <td style="background-color:#2d89ef; padding:20px; text-align:center;">
                        <img src="https://cooperar.duckdns.org/assets/vendor/images/logo.png" alt="Cooperar" style="width:80px; display:block; margin:0 auto;">
                        <h1 style="color:#fff; margin:10px 0 0 0; font-size:24px;">Cooperar</h1>
                    </td>
                </tr>
                <tr>
                    <td style="padding:30px;">
                        <h2 style="color:#2d89ef; font-size:20px; margin-top:0;">Bienvenido a Cooperar</h2>
                        <p>Estimado usuario,</p>
                        <p>Hemos detectado actividad en su cuenta. Para continuar, por favor haga clic en el siguiente botón para iniciar sesión:</p>
                        <p style="text-align:center; margin:30px 0;">
                            <a href="https://cocoperar.duckdns.org/index.php" style="background-color:#2d89ef; color:#fff; padding:12px 25px; text-decoration:none; border-radius:6px; font-weight:bold;">Iniciar sesión</a>
                        </p>
                        <p>Si usted no realizó esta acción, ignore este correo.</p>
                    </td>
                </tr>
                <tr>
                    <td style="background-color:#f5f5f5; text-align:center; padding:15px; font-size:12px; color:#888;">
                        Cooperar - Todos los derechos reservados
                    </td>
                </tr>
            </table>
        </body>
        </html>
        ';


        $mail->send();
        echo json_encode(['status' => 'success', 'message' => "Correo enviado correctamente a $to"]);

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "No se pudo enviar el correo. Error: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
}
