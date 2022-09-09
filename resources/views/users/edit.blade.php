@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <div class="card">
                    <div class="card-header">{{ __('shop.user.edit_title', ['name' => $user->email]) }}</div>
                    <div class="card-body">
                        <form class="needs-validation row g-3" method="POST"
                              action="{{ route('users.update', $user->id) }} " enctype="multipart/form-data"
                              novalidate>
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                                <label for="name" class="form-label">{{ __('shop.user.columns.name') }}</label>
                                <input type="text" class="form-control" id="name" name="name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="surname"
                                       class="form-label">{{ __('shop.user.columns.surname') }}</label>
                                <input type="password" class="form-control" id="surname" name="surname">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">{{ __('shop.user.columns.email') }}</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="password"
                                       class="form-label">{{ __('shop.user.columns.password') }}</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="col-8">
                                <label for="street"
                                       class="form-label">{{ __('shop.user.columns.street') }}</label>
                                <input type="text" class="form-control" id="street" placeholder="1234 Main St" name="street">
                            </div>
                            <div class="col-4">
                                <label for="street-number"
                                       class="form-label">{{ __('shop.user.columns.street_number') }}</label>
                                <input type="text" class="form-control" id="street-number" placeholder="1234 Main St" name="street_number">
                            </div>
                            <div class="col-12">
                                <label for="home_number"
                                       class="form-label">{{ __('shop.user.columns.home_number') }}</label>
                                <input type="text" class="form-control" id="home-number" name="home_number"
                                       placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="col-md-8">
                                <label for="city" class="form-label">{{ __('shop.user.columns.city') }}</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                            <div class="col-md-4">
                                <label for="zip_code" class="form-label">{{ __('shop.user.columns.zip_code') }}</label>
                                <input type="text" class="form-control" id="zip-code" name="zip_code">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('shop.button.save') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
