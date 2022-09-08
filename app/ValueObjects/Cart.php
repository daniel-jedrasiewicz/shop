<?php

namespace App\ValueObjects;

use App\Models\Product;
use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class Cart
{
    private Collection $items;

    public function __construct(Collection $items = null)
    {
        $this->items = $items ?? Collection::empty();
    }


    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(Product $product): Cart
    {
        $items = $this->items;
        $item = $items->first($this->isProductSameAsItemProduct($product));
        if (!is_null($item)) {
            $items = $items->reject($this->isProductSameAsItemProduct($product));
            $newItem = $item->addQuantity($product);
        } else {
            $newItem = new CartItem($product);
        }
        $items->add($newItem);

        return new Cart($items);
    }

    private function isProductSameAsItemProduct(Product $product): Closure
    {
        return function ($item) use ($product) {
            return $product->id == $item->getProductId();
        };
    }

}
