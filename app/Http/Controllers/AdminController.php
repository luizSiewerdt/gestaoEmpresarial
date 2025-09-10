<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{

    protected array $products = [
        ['id' => 1, 'nome' => 'Produto 1', 'descricao' => 'Descrição 1', 'preco' => 100],
        ['id' => 2, 'nome' => 'Produto 2', 'descricao' => 'Descrição 2', 'preco' => 200],
    ];

    protected array $clients = [
        ['id' => 1, 'nome' => 'Cliente 1'],
        ['id' => 2, 'nome' => 'Cliente 2'],
    ];

    protected array $fornecedores = [
        ['id' => 1, 'nome' => 'Fornecedor 1'],
        ['id' => 2, 'nome' => 'Fornecedor 2'],
    ];

    public function login(): View {
        return view("pages.admin.login");
    }

    public function dashboard(): View {
        return view("pages.admin.dashboard");
    }

    public function clientes(): View {

        return view("pages.admin.clientes.index", ['clientes' => $this->clients]);
    }

    public function show_cliente(int $id): View {
        $cliente = [
            'id' => $id,
            'nome' => "Cliente $id",
            'email' => "cliente{$id}@empresa.com",
            'telefone' => '99999-9999'
        ];

        return view("pages.admin.clientes.show", compact('cliente'));
    }

    public function fornecedores(): View {

        return view("pages.admin.fornecedores", ['fornecedores' => $this->fornecedores]);
    }

    public function produtos(): View {
        return view("pages.admin.produtos.index", ['produtos' => $this->products]);
    }

    public function find_product(string $slug): View {
        $produto = [
            'nome' => str_replace('-', ' ', ucfirst($slug)),
            'descricao' => 'Descrição do produto '.$slug,
            'preco' => rand(50, 500)
        ];

        return view("pages.admin.produtos.show", compact('produto'));
    }
}
