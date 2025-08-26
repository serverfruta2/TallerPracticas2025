# TallerPracticas2025

##### === Fake Site Demo (PHP + MySQL + Docker) === #####

Este proyecto es una prueba educativa que simula un sitio PHP con base de datos MySQL y envío de correo con PHPMailer.
El entorno está dockerizado, pero algunas dependencias deben instalarse manualmente con Composer.

##### ============== Requisitos previos ============== ####
        Docker y Docker Compose
        Composer instalado en tu máquina
        Git
=======================================================================
##### ============== Instalación y puesta en marcha ============== ####
=======================================================================

##### ============== Clonar el repositorio ============== ####

            git clone git@github.com:serverfruta2/TallerPracticas2025.git

##### ============== Crear archivo .env dentro del proyecto ============== ####

                # ---------------------------
                # Base de datos MySQL
                # ---------------------------
                DB_HOST=fake_mysql
                DB_NAME=taller
                DB_USER=talleruser
                DB_PASS=clave123
                DB_ROOT_PASS=superseguro

                # Puerto interno siempre 3306, externo lo cambiamos
                DB_PORT=3306
                DB_EXTERNAL_PORT=3308

                # ---------------------------
                # PHP / Apache
                # ---------------------------
                PHP_PORT=8086

                # ---------------------------
                # Red Docker (la de Nginx Proxy Manager)
                # ---------------------------
                RED_NOW=nginx_default

                # ---------------------------
                # Correo SMTP (para PHPMailer)
                # ---------------------------
                MAIL_HOST=smtp.gmail.com
                MAIL_PORT=587
                MAIL_USER=cocoperar@gmail.com
                MAIL_PASS=lrsv uika dfom ymeh   # App Password de Gmail
                MAIL_FROM=cocoperar@gmail.com
                MAIL_FROM_NAME=Cooperar Demo


##### ============== Instalar dependencias PHP (PHPMailer, Dotenv, etc.) ============== ####

            cd fake_site/assets
            composer install
            composer require phpmailer/phpmailer vlucas/phpdotenv
            cd ../..

##### ============== Levantar los contenedores ============== ####

            docker-compose up -d --build
