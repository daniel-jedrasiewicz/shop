<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpsertProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{

    public function index(): View
    {
        return view('products.index', [
            'products' => Product::paginate(10)
        ]);
    }

    public function create()
    {
        return view('products.create', [
            'categories' => ProductCategory::all()
        ]);
    }

    public function store(UpsertProductRequest $request): RedirectResponse
    {
        $product = new Product($request->validated());
        if ($request->hasFile('image')) {
            $product->image_path = $request->file('image')->store('products');
        }
        $product->save();
        return redirect(route('products.index'))->with('status', __('shop.product.status.store.success'));
    }

    public function show(Product $product): View
    {
        return view('products.show', [
            'product' => $product
        ]);
    }

    public function edit(Product $product): View
    {

        return view('products.edit', [
            'product' => $product,
            'categories' => ProductCategory::all()
        ]);
    }

    public function update(UpsertProductRequest $request, Product $product): RedirectResponse
    {
        $oldImagePath = $product->image_path;

        $product->fill($request->all());
        if ($request->hasFile('image')) {
            if(Storage::exists($oldImagePath)) {
                Storage::delete($oldImagePath);
            }
        $product->image_path = $request->file('image')->store('products');
    }
        $product->save();
        return redirect(route('products.index'))->with('status', __('shop.product.status.update.success'));
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();
            Session::flash('status', __('shop.product.status.delete.success'));
            return response()->json([
                'status' => 'success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Wyst??pi?? b????d'
            ])->setStatusCode(500);
        }
    }
}
