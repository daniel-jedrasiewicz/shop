@extends('layouts.app')

@section('header')
    Lista produktów
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Lista produktów</h1>
            </div>
            <div class="col-6">
                <a class="float-end" href="{{ route('products.create')}}">
                    <button type="button" class=" btn btn-primary">Dodaj</button>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Ilość</th>
                    <th scope="col">Cena</th>
                    <th scope="col">Akcje</th>
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
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edycja</a>
{{--                            <button class="btn btn-danger delete" data-id="{{ $product->id }}">Usuń</button>--}}
                        </td>
                    </tr>
                @empty
                    <td class="text-center" colspan="6">Brak produktów do wyświetlenia</td>
                @endforelse
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        const deleteUrl = "{{ url('products') }}/";
    </script>
@endsection


