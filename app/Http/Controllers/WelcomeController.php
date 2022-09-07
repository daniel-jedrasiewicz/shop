<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function index(Request $request): View|\Symfony\Component\HttpFoundation\JsonResponse
    {
        $filters = $request->query('filter');
        $paginate = $request->query('paginate') ?? 10;

        $query = Product::query();

        if(!is_null($filters)) {
            $query->when(array_key_exists('categories', $filters), function($query) use ($filters) {
                $query->whereIn('category_id', $filters['categories']);
            })
            ->when(!is_null($filters['price_min']), function($query) use ($filters){
                $query->where('price','>=', $filters['price_min']);
            })
            ->when(!is_null($filters['price_max']), function($query) use ($filters){
                $query->where('price','<=', $filters['price_max']);
            });

            return response()->json( $query->paginate($paginate));
        }

        return view('welcome', [
            'products' => $query->paginate($paginate),
            'categories' => ProductCategory::orderBy('name', 'ASC')->get(),
        ]);
    }
}
