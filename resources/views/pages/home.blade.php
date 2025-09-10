@extends("layouts.app")

@section('title', 'home')

@section('content')
    <h1>HOME</h1>
    @include("components.botao", ['text' => 'legal'])
@endsection
