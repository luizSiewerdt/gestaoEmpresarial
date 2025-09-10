<footer class="bg-dark text-light py-4 mt-5">
    <div class="container text-center">
        <p class="mb-1">&copy; {{ date('Y') }} MinhaAplicacao. Todos os direitos reservados.</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-light text-decoration-none">Home</a></li>
            <li class="list-inline-item"><a href="{{ url('/produtos') }}" class="text-light text-decoration-none">Produtos</a></li>
            <li class="list-inline-item"><a href="{{ url('/sobre') }}" class="text-light text-decoration-none">Sobre</a></li>
            <li class="list-inline-item"><a href="{{ url('/contato') }}" class="text-light text-decoration-none">Contato</a></li>
        </ul>
    </div>
</footer>
