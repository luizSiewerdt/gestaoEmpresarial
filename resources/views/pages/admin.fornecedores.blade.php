
@extends('layouts.app')

@section('title', 'Fornecedores Admin')

@section('content')
<div class="container mt-4">
    <h1>Fornecedores</h1>
    <ul class="list-group">
        @foreach($fornecedores ?? [] as $fornecedor)
            <li class="list-group-item">
                {{ $fornecedor->nome ?? 'Fornecedor' }}
            </li>
        @endforeach
    </ul>
</div>
@endsection
