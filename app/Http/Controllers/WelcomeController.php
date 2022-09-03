<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function index(): View
    {
        return view('welcome', [
            'products' => Product::paginate(10)
        ]);
    }
}
