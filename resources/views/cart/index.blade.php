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
                            <div class="cart_title">{{ __('shop.cart.header.shopping_cart') }}<small> ({{ $cart->getItems()->count() }})</small>
                            </div>
                            <form action="{{ route('orders.store') }}" method="POST" id="order-form">
                                @csrf
                                <div class="cart_items">
                                    <ul class="cart_list">
                                        @foreach($cart->getItems() as $item)
                                            {{--                                    <li class="cart_item clearfix">--}}
                                            <li class="row text-center justify-content-center cart_item clearfix align-items-center">
                                                <div class="col-md-2">
                                                    <img src="{{ $item->getImage() }}" class="img-fluid mx-auto d-block"
                                                         alt="Zdjęcie produktu">
                                                </div>
                                                {{--                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">--}}
                                                <div class="col-md-2">
                                                    <div class="cart_item_title">{{ __('shop.cart.columns.name') }}</div>
                                                    <div class="cart_item_text">{{ $item->getName() }}</div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="cart_item_title">{{ __('shop.cart.columns.quantity') }}</div>
                                                    <div class="cart_item_text">{{ $item->getQuantity() }}</div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="cart_item_title">{{ __('shop.cart.columns.price') }}</div>
                                                    <div class="cart_item_text">{{ $item->getPrice() }}</div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="cart_item_title">{{ __('shop.cart.columns.total') }}</div>
                                                    <div class="cart_item_text">{{ $item->getSum() }}</div>
                                                </div>
                                                <div class="col-md-1">
                                                    <button type="button" class="btn btn-danger btn-sm delete"
                                                            data-id="{{ $item->getProductId() }}"><i
                                                            class="far fa-trash-alt"></i></button>
                                                </div>
                                                {{--                                        </div>--}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="order_total">
                                    <div class="order_total_content text-md-right">
                                        <div class="order_total_title">{{ __('shop.cart.columns.order_total') }}:</div>
                                        <div class="order_total_amount">{{ $cart->getSum() }}</div>
                                    </div>
                                </div>
                                <div class="cart_buttons">
                                    <a href="{{ url('/') }}" class="button cart_button_clear text-decoration-none">{{ __('shop.cart.button.continue_shopping') }}</a>
                                    <button type="submit" class="button cart_button_checkout" {{ !$cart->hasItems() ? 'disabled' : ""}}>{{ __('shop.cart.button.add_to_cart') }}</button>
                                </div>
                            </form>
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


