
@extends('layouts.app')

@section('title', 'Clientes Admin')

@section('content')
<div class="container mt-4">
    <h1>Clientes</h1>
    <ul class="list-group">
        @foreach($clientes ?? [] as $cliente)
            <li class="list-group-item">
                {{ $cliente->nome ?? 'Cliente' }}
            </li>
        @endforeach
    </ul>
</div>
@endsection
