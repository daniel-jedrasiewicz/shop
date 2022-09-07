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
        @include('helpers.flash-messages')
        <div class="row">
            <div class="col-6">
                <h1><i class="fas fa-users"></i> {{ __('shop.user.index_title') }}</h1>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('shop.user.columns.name') }}</th>
                <th scope="col">{{ __('shop.user.columns.surname') }}</th>
                <th scope="col">{{ __('shop.user.columns.phone_number') }}</th>
                <th scope="col">{{ __('shop.user.columns.email') }}</th>
                <th scope="col">{{ __('shop.user.columns.actions') }}</th>
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
                        <button class="btn btn-danger delete" data-id="{{ $user->id }}"><i class="far fa-trash-alt"></i></button>
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
        const confirmDelete = "{{ __('shop.messages.delete_confirm') }}";
    </script>
@endsection


