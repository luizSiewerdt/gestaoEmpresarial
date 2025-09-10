<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function login(): View {
        return view("pages.admin.login");
    }

    public function dashboard(): View {
        return view("pages.admin.dashboard");
    }

    public function clientes(): View {
        $clientes = [
            ['id' => 1, 'nome' => 'Cliente 1'],
            ['id' => 2, 'nome' => 'Cliente 2'],
        ];

        return view("pages.admin.clientes", compact('clientes'));
    }

    public function show_cliente(int $id): View {
        $cliente = [
            'id' => $id,
            'nome' => "Cliente $id",
            'email' => "cliente{$id}@empresa.com",
            'telefone' => '99999-9999'
        ];

        return view("pages.admin.show_cliente", compact('cliente'));
    }

    public function fornecedores(): View {
        $fornecedores = [
            ['id' => 1, 'nome' => 'Fornecedor 1'],
            ['id' => 2, 'nome' => 'Fornecedor 2'],
        ];

        return view("pages.admin.fornecedores", compact('fornecedores'));
    }

    public function produtos(): View {
        $produtos = [
            ['id' => 1, 'nome' => 'Produto 1', 'descricao' => 'Descrição 1', 'preco' => 100],
            ['id' => 2, 'nome' => 'Produto 2', 'descricao' => 'Descrição 2', 'preco' => 200],
        ];

        return view("pages.admin.produtos", compact('produtos'));
    }

    public function find_product(string $slug): View {
        $produto = [
            'nome' => str_replace('-', ' ', ucfirst($slug)),
            'descricao' => 'Descrição do produto '.$slug,
            'preco' => rand(50, 500)
        ];

        return view("pages.admin.find_produto", compact('produto'));
    }
}
