@extends('layouts.app')

@section('title', $produto->nome ?? 'Produto')

@section('content')
<div class="container mt-4">
    <h1>{{ $produto->nome }}</h1>
    <p>{{ $produto->descricao }}</p>
    <p><strong>Preço:</strong> R$ {{ $produto->preco }}</p>
    <x-button class="btn-primary" onclick="alert('Produto adicionado!')">Adicionar ao carrinho</x-button>
</div>
@endsection
