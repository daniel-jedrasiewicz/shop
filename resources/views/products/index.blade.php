@extends('layouts.app')

@section('header')
    {{ __('shop.product.index_title') }}
@endsection
@section('content')

    <div class="container">
        @include('helpers.flash-messages')
        <div class="row">
            <div class="col-6">
                <h1><i class="fas fa-clipboard-list"></i> {{ __('shop.product.index_title') }}</h1>
            </div>
            <div class="col-6">
                <a class="float-end" href="{{ route('products.create')}}">
                    <button type="button" class=" btn btn-primary"><i class="far fa-plus"></i></button>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('shop.product.fields.name') }}</th>
                    <th scope="col">{{ __('shop.product.fields.description') }}</th>
                    <th scope="col">{{ __('shop.product.fields.amount') }}</th>
                    <th scope="col">{{ __('shop.product.fields.price') }}</th>
                    <th scope="col">{{ __('shop.product.fields.category') }}</th>
                    <th scope="col">{{ __('shop.columns.actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->amount }}</td>
                        <td>{{ $product->price }}</td>
                        <td>@if($product->hasCategory()){{ $product->category->name }} @endif</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}"
                               class="btn btn-primary btn-sm"><i class="fas fa-search"></i></a>
                            <a href="{{ route('products.edit', $product->id) }}"
                               class="btn btn-success btn-sm"><i class="far fa-edit"></i></a>
                            <button class="btn btn-danger btn-sm delete"
                                    data-id="{{ $product->id }}"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                @empty
                    <td class="text-center" colspan="6">{{ __('There are no products to display.') }}</td>
                @endforelse
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        const deleteUrl = "{{ url('admin/products') }}/";
        const confirmDelete = "{{ __('shop.messages.delete_confirm') }}";
    </script>
@endsection


