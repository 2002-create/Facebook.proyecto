<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Red Social - Dashboard</title>
    {{-- Aquí enlazamos nuestro archivo CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="app-container">
        {{-- BARRA SUPERIOR (HEADER) --}}
        <header class="navbar">
            <div class="navbar-left">
                <a href="/" class="logo">MiRedSocial</a>
                <input type="text" placeholder="Buscar..." class="search-bar">
            </div>
            <div class="navbar-right">
                <a href="#" class="nav-icon"><img src="{{ asset('icons/home.svg') }}" alt="Inicio"></a>
                <a href="#" class="nav-icon"><img src="{{ asset('icons/notifications.svg') }}" alt="Notificaciones"></a>
                <a href="#" class="nav-icon"><img src="{{ asset('icons/messages.svg') }}" alt="Mensajes"></a>
                <a href="#" class="profile-link">
                    <img src="{{ asset('images/default-avatar.png') }}" alt="Mi Perfil" class="profile-avatar-small">
                    <span>Mi Perfil</span> {{-- Aquí puedes poner el nombre del usuario logueado --}}
                </a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="logout-button">Salir</button>
                </form>
            </div>
        </header>

        {{-- CONTENIDO PRINCIPAL --}}
        <main class="main-content">
            <div class="sidebar-left">
                {{-- Navegación lateral izquierda --}}
                <div class="sidebar-section">
                    <a href="#" class="sidebar-item">
                        <img src="{{ asset('icons/friends.svg') }}" alt="Amigos" class="sidebar-icon">
                        <span>Amigos</span>
                    </a>
                    <a href="#" class="sidebar-item">
                        <img src="{{ asset('icons/groups.svg') }}" alt="Grupos" class="sidebar-icon">
                        <span>Grupos</span>
                    </a>
                    <a href="#" class="sidebar-item">
                        <img src="{{ asset('icons/marketplace.svg') }}" alt="Marketplace" class="sidebar-icon">
                        <span>Marketplace</span>
                    </a>
                    {{-- Más elementos si lo deseas --}}
                </div>
            </div>

            <div class="feed-container">
                {{-- Formulario para crear publicaciones --}}
                <div class="create-post-card">
                    <div class="post-header">
                        <img src="{{ asset('images/default-avatar.png') }}" alt="Tu Avatar" class="profile-avatar-small">
                        <input type="text" placeholder="¿Qué estás pensando, {{ Auth::user()->name ?? 'usuario' }}?" class="post-input-field">
                    </div>
                    <div class="post-actions">
                        <button class="post-action-button"><img src="{{ asset('icons/photo.svg') }}" alt="Foto"> Foto/Video</button>
                        <button class="post-action-button"><img src="{{ asset('icons/tag.svg') }}" alt="Etiquetar"> Etiquetar</button>
                        <button class="post-action-button"><img src="{{ asset('icons/feeling.svg') }}" alt="Sentimiento"> Sentimiento/Actividad</button>
                    </div>
                    <button class="publish-button">Publicar</button>
                </div>

                {{-- SECCIÓN DE PUBLICACIONES --}}
                <div class="feed-posts">
                    @forelse ($posts as $post)
                        <div class="post-card">
                            <div class="post-header">
                                <img src="{{ asset('images/default-avatar.png') }}" alt="Avatar de {{ $post->user->name ?? 'Usuario' }}" class="profile-avatar">
                                <div class="post-info">
                                    <span class="post-author">{{ $post->user->name ?? 'Usuario Anónimo' }}</span>
                                    <span class="post-time">{{ $post->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <p>{{ $post->content }}</p>
                                {{-- Aquí iría la imagen si la publicación la tiene --}}
                                {{-- <img src="{{ asset('storage/' . $post->image_path) }}" alt="Post Image" class="post-image"> --}}
                            </div>
                            <div class="post-actions-bar">
                                <button class="action-button"><img src="{{ asset('icons/like.svg') }}" alt="Like"> Me gusta</button>
                                <button class="action-button"><img src="{{ asset('icons/comment.svg') }}" alt="Comentar"> Comentar</button>
                                <button class="action-button"><img src="{{ asset('icons/share.svg') }}" alt="Compartir"> Compartir</button>
                            </div>
                            {{-- Aquí irían los comentarios si los tienes implementados --}}
                            {{-- <div class="comments-section">
                                </div> --}}
                        </div>
                    @empty
                        <p class="no-posts">Aún no hay publicaciones. ¡Sé el primero en publicar algo!</p>
                    @endforelse
                </div>
            </div>

            <div class="sidebar-right">
                {{-- Sugerencias de amigos, contactos, etc. --}}
                <div class="sidebar-section">
                    <h4>Contactos</h4>
                    {{-- Aquí irían contactos en línea, etc. --}}
                    <p class="no-contacts">Nada por aquí aún.</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
