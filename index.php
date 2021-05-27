<?php
    echo "
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"style.css\">
        <link rel=\"stylesheet\" href=\"style.css\">
        <title>Ejercicio del miércoles</title>
    </head>
    <body>
        <h1 id=\"titulo\" class=\"titulo-class\">EJERCICIO DEL MIÉRCOLES</h1>
        <p id=\"instrucciones\" style=\"border: 2px solid blue;\">
            Ingresa la URL de una imagen de gatitos
        </p>

        <p>https://estaticos.muyinteresante.es/uploads/images/gallery/59c4f5655bafe82c692a7052/gato-marron-redes.jpg</p>

        <form id=\"MyForm\">
            <input id=\"url\" type=\"url\" placeholder=\"URL de la imagen\">
            <button type=\"button\" onclick=\"sendToAzure()\">Enviar</button>
        </form>

        <!-- Aquí va a caer el resultado de la API -->
        <p id=\"result_space\"></p>

    </body>
    </html>

    <!-- Agregar las librerías necesarias para enviar los daros --> 
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
    <script src=\"script.js\"></script>
    ";

// Necesitas cambiar a la rama master