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

    public function getSum(): float
    {
        return $this->items->sum(function ($item) {
            return $item->getSum();
        });
    }

    public function hasItems(): bool
    {
        return $this->items->isNotEmpty();
    }

    public function getQuantity(): int
    {
        return $this->items->sum(function ($item) {
            return $item->getQuantity();
        });
    }

    public function addItem(Product $product): Cart
    {
        $items = $this->items;
        $item = $items->first($this->isProductSameAsItemProduct($product));
        if (!is_null($item)) {
            $items = $this->removeItemFromCollection($items, $product);
            $newItem = $item->addQuantity($product);
        } else {
            $newItem = new CartItem($product);
        }
        $items->add($newItem);

        return new Cart($items);
    }

    public function removeItem(Product $product): Cart
    {
        $items = $this->removeItemFromCollection($this->items, $product);
        return new Cart($items);
    }

    private function removeItemFromCollection(Collection $items, Product $product): Collection
    {
        return $this->items->reject($this->isProductSameAsItemProduct($product));
    }

    private function isProductSameAsItemProduct(Product $product): Closure
    {
        return function ($item) use ($product) {
            return $product->id == $item->getProductId();
        };
    }

}
