
@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<div class="container mt-4">
    <h1>Admin Login</h1>
    <form>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha">
        </div>
        <x-button class="btn-primary" type="submit">Entrar</x-button>
    </form>
</div>
@endsection
