<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class ProdutoController extends Controller
{
    public function index(): View {
        return view("products");
    }


    public function show(int $id): View {
        return view("produtos.show");
    }
}
