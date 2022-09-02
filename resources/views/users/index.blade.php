{{--<x-app-layout>--}}

{{--<x-slot name="header">--}}
{{--    Header test--}}
{{--</x-slot>--}}

{{--    other content--}}

{{--</x-app-layout>--}}

@extends('layouts.app')

@section('header')
    Lista użytkowników
@endsection

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imię</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Telefon</th>
                <th scope="col">Email</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <button class="btn btn-danger delete" data-id="{{ $user->id }}">Usuń</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>

@endsection
@section('scripts')
    <script type="text/javascript">
        const deleteUrl = "{{ url('users') }}/";
    </script>
@endsection


