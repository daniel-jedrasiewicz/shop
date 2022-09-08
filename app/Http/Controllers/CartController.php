<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\ValueObjects\Cart;
use App\ValueObjects\CartItem;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\JsonResponse;

class CartController extends Controller
{

    public function index(): View
    {
        dd(Session::get('cart', new Cart()));
        return view('home');
    }

    public function store(Product $product): JsonResponse
    {
        $cart = Session::get('cart', new Cart());

        Session::put('cart', $cart->addItem($product));
        return response()->json([
            'status' => 'success'
        ]);
    }

}
