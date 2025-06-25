@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
        <h3 class="text-xl font-semibold mb-4 text-gray-800">Crear Publicación</h3>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <textarea name="content" rows="4" placeholder="¿Qué estás pensando, {{ auth()->user()->name }}?" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4"></textarea>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">Publicar</button>
        </form>
    </div>

    @foreach ($posts as $post)
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <div class="flex items-center mb-4">
                <img src="{{ asset('storage/' . ($post->user->profile_picture ?? 'default-avatar.png')) }}" alt="{{ $post->user->name }}" class="w-12 h-12 rounded-full mr-3 border-2 border-gray-200">
                <div>
                    <a href="{{ route('profile.show', $post->user->id) }}" class="font-bold text-gray-800 hover:text-blue-600">{{ $post->user->name }}</a>
                    <p class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <p class="text-gray-700 mb-4 text-lg leading-relaxed">{{ $post->content }}</p>

            <div class="flex border-t border-b border-gray-200 py-3 mb-4 space-x-6 justify-around text-gray-600">
                <form action="{{ route('posts.toggle_like', $post) }}" method="POST" class="flex items-center">
                    @csrf
                    <button type="submit" class="flex items-center space-x-2 p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200
                        @if(auth()->user()->isLikedBy($post)) text-blue-600 @else text-gray-500 @endif">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                        <span class="font-semibold">{{ $post->likers->count() }} Me gusta</span>
                    </button>
                </form>

                <button class="flex items-center space-x-2 text-gray-600 p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    <span class="font-semibold">{{ $post->comments->count() }} Comentarios</span>
                </button>

                <button class="flex items-center space-x-2 text-gray-600 p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15 8a3 3 0 10-2.977-2.677l-3.371 1.704A2 2 0 008 10v1H7a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-.093-.577l3.371-1.704A3 3 0 1015 8z"></path></svg>
                    <span class="font-semibold">Compartir</span>
                </button>
            </div>

            <div class="comments-section">
                @foreach ($post->comments as $comment)
                    <div class="flex items-start mb-2">
                        <img src="{{ asset('storage/' . ($comment->user->profile_picture ?? 'default-avatar.png')) }}" alt="{{ $comment->user->name }}" class="w-8 h-8 rounded-full mr-2 border">
                        <div class="bg-gray-100 p-3 rounded-lg flex-1">
                            <a href="{{ route('profile.show', $comment->user->id) }}" class="font-semibold text-gray-800 hover:text-blue-600 text-sm">{{ $comment->user->name }}</a>
                            <p class="text-gray-700 text-sm">{{ $comment->content }}</p>
                        </div>
                    </div>
                @endforeach

                <form action="{{ route('comments.store', $post) }}" method="POST" class="mt-4">
                    @csrf
                    <div class="flex items-center">
                        <img src="{{ asset('storage/' . (auth()->user()->profile_picture ?? 'default-avatar.png')) }}" alt="Tu Perfil" class="w-8 h-8 rounded-full mr-2 border">
                        <input type="text" name="content" placeholder="Escribe un comentario..." class="flex-1 p-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <button type="submit" class="bg-blue-500 text-white p-2 rounded-full ml-2 hover:bg-blue-600 transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0l-1.5-1.5a.5.5 0 11.708-.708L7.5 9.793l2.646-2.647a.5.5 0 01.708 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0 1a9 9 0 100-18 9 9 0 000 18z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
