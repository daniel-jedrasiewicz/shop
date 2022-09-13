@extends('layouts.app')

@section('header')
    {{ __('shop.product.index_title') }}
@endsection
@section('content')

    <div class="container">
        @include('helpers.flash-messages')
        <div class="row">
            <div class="col-6">
                <h1><i class="fas fa-clipboard-list"></i> {{ __('shop.order.header.orders') }}</h1>
            </div>
        </div>
        <br>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('shop.order.columns.quantity') }}</th>
                    <th scope="col">{{ __('shop.order.columns.price') }}</th>
                    <th scope="col">{{ __('shop.order.columns.products') }}</th>
                </tr>
                </thead>
                <tbody>
                @forelse($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <th scope="row">{{ $order->quantity }}</th>
                        <th scope="row">{{ $order->price }}</th>
                        <th scope="row">
                            @foreach($order->products as $product)
                                <ul>
                                    <li>{{ $product->name }} - {{ $product->description }}</li>
                                </ul>
                            @endforeach
                        </th>
                        @empty
                            <td class="text-center" colspan="6"> Brak zamówień</td>
                @endforelse
                </tbody>
            </table>
            {{ $orders->links() }}
        </div>
    </div>

@endsection


