@extends('layouts.app')

@section('css-files')
   @vite('resources/css/cart.css')
@endsection

{{--@section('header')--}}
{{--    {{ __('shop.product.index_title') }}--}}
{{--@endsection--}}
@section('content')

    <div class="container">
        @include('helpers.flash-messages')
        <div class="cart_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cart_container">
                            <div class="cart_title">Shopping Cart<small> ({{ $cart->getItems()->count() }})</small></div>
                            <div class="cart_items">
                                <ul class="cart_list">
                                    @foreach($cart->getItems() as $item)
{{--                                    <li class="cart_item clearfix">--}}
                                    <li class="row text-center justify-content-center cart_item clearfix align-items-center">
                                        <div class="col-md-2">
                                            <img src="{{ $item->getImage() }}" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">
                                        </div>
{{--                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">--}}
                                            <div class="col-md-2">
                                                <div class="cart_item_title">Name</div>
                                                <div class="cart_item_text">{{ $item->getName() }}</div>
                                            </div>
                                        <div class="col-md-2">
                                                <div class="cart_item_title">Quantity</div>
                                                <div class="cart_item_text">{{ $item->getQuantity() }}</div>
                                            </div>
                                        <div class="col-md-2">
                                                <div class="cart_item_title">Price</div>
                                                <div class="cart_item_text">{{ $item->getPrice() }}</div>
                                            </div>
                                        <div class="col-md-2">
                                                <div class="cart_item_title">Total</div>
                                                <div class="cart_item_text">{{ $item->getSum() }}</div>
                                            </div>
                                        <div class="col-md-1">
                                                <button class="btn btn-danger btn-sm delete"
                                                        data-id="{{ $item->getProductId() }}"><i class="far fa-trash-alt"></i></button>
                                            </div>
{{--                                        </div>--}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="order_total">
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title">Order Total:</div>
                                    <div class="order_total_amount">{{ $cart->getSum() }}</div>
                                </div>
                            </div>
                            <div class="cart_buttons">
                                <a href="{{ url('/') }}" class="button cart_button_clear text-decoration-none">Continue Shopping</a>
                                <button type="button" class="button cart_button_checkout">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        const deleteUrl = "{{ url('cart') }}/";
        const confirmDelete = "{{ __('shop.messages.delete_confirm') }}";
    </script>
@endsection


