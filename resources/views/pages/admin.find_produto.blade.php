@extends('layouts.app')

@section('title', $produto->nome ?? 'Produto')

@section('content')
<div class="container mt-4">
    <h1>{{ $produto->nome ?? 'Produto' }}</h1>
    <p>{{ $produto->descricao ?? 'Descrição não disponível' }}</p>
    <p><strong>Preço:</strong> R$ {{ $produto->preco ?? '0,00' }}</p>
    <x-button class="btn-primary" onclick="alert('Ação executada!')">Ação</x-button>
</div>
@endsection
