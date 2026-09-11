@extends('layouts.app')

@section('title', 'Formulário')

@section('content')
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md p-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Formulário de Contato</h1>

        <form action="#" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                <input type="text" id="nome" name="nome" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="mensagem" class="block text-sm font-medium text-gray-700 mb-1">Mensagem</label>
                <textarea id="mensagem" name="mensagem" rows="4" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                Enviar
            </button>
        </form>

        <a href="/" class="block text-center mt-6 text-blue-600 hover:underline">
            ← Voltar para a Home
        </a>
    </div>
@endsection