<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Red Social</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: white;
            color: #333;
            transition: background-color 0.3s, color 0.3s;
        }

        .dark-mode {
            background-color: #18191A;
            color: #E4E6EB;
        }

        header {
            background-color: #1877f2;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 2rem auto;
        }

        .post {
            background-color: #f0f2f5;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .dark-mode .post {
            background-color: #242526;
        }

        .toggle-btn {
            background-color: #fff;
            color: #1877f2;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            float: right;
            margin-top: -3rem;
        }

        .dark-mode .toggle-btn {
            background-color: #3A3B3C;
            color: #E4E6EB;
        }
    </style>
</head>
<body>
    <header>
        Mi Facebook Personal
        <button onclick="toggleMode()" class="toggle-btn">Modo Oscuro</button>
    </header>

    <div class="container">
        <div class="post">
            <strong>Juan Pérez:</strong>
            <p>Hola mundo, esta es mi primera publicación 🎉</p>
        </div>
        <div class="post">
            <strong>Ana Gómez:</strong>
            <p>Laravel es increíble 😍</p>
        </div>
    </div>

    <script>
        function toggleMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>