<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Red Social</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1877f2;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .container {
            width: 600px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }

        .post {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .post:last-child {
            border-bottom: none;
        }
 .post p {
            margin: 0;
        }

        .post .autor {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>Facebook</h1>
    </header>

    <div class="container">
        <div class="post">
            <p class="autor">Elena</p>
            <p>¡Hola! Bienvenida a Facebook🥳</p>
        </div>

        <div class="post">
            <p class="autor">Carlos</p>
            <p>Facebook funciona perfecto 😎</p>
        </div>
    </div>
</body>
</html>