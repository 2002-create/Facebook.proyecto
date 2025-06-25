<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Faccebook</title>
    <title>Facebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }

        .feed-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .post-card {
            background-color: white;
            padding: 15px 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .post-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ccc;
            margin-right: 10px;
        }

        .post-user {
            font-weight: bold;
            color: #1c1e21;
        }

        .post-time {
            font-size: 12px;
            color: #65676b;
        }

        .post-content {
            margin: 10px 0;
            font-size: 15px;
        }

        .post-actions {
            display: flex;
            justify-content: space-around;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: 10px;
        }

        .post-actions button {
            background: none;
            border: none;
            color: #65676b;
            font-weight: bold;
            cursor: pointer;
        }

        .post-actions button:hover {
            color: #1877f2;
        }
    </style>
</head>
<body>
    <div class="feed-container">
        <h2 style="text-align: center; color: #1877f2;">Inicio</h2>

        @foreach ($posts as $post)
            <div class="post-card">
                <div class="post-header">
                    <div class="profile-pic"></div>
                    <div>
                        <div class="post-user">{{ $post->user->name ?? 'Usuario' }}</div>
                        <div class="post-time">{{ $post->created_at->diffForHumans() }}</div>
                    </div>
                </div>

                <div class="post-content">
                    {{ $post->content }}
                </div>

                <div class="post-actions">
                    <button>👍 Me gusta</button>
                    <button>💬 Comentar</button>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>