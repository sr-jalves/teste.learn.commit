@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md p-8 text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Welcome to the Home Page</h1>
        <p class="text-gray-600 mb-6">This is the main content of the home page.</p>

        <a href="/formulario"
            class="inline-block bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition">
            Ir para o Formulário
        </a>
    </div>
@endsection