<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index(): View {
        return view("admin");
    }
}
