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
                              action="{{ route('users.update', $user->id) }}"
                              novalidate>
                            @csrf
                            @method('PUT')


                            <div class="col-8">
                                <label for="street"
                                       class="form-label">{{ __('shop.user.columns.street') }}</label>
                                <input type="text" class="form-control @error('address.street') is-invalid @enderror"
                                       id="street" placeholder="1234 Main St"
                                       name="address[street]" value="@if($user->hasAddress()){{ $user->address->street }}@endif">
                                @error('address.street')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-4">
                                <label for="street-number"
                                       class="form-label">{{ __('shop.user.columns.street_number') }}</label>
                                <input type="text"
                                       class="form-control @error('address.street_number') is-invalid @enderror"
                                       id="street-number" placeholder="1234 Main St"
                                       name="address[street_number]"
                                       value="@if($user->hasAddress()){{ $user->address->street_number }}@endif">
                                @error('address.street_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-12">
                                <label for="home_number"
                                       class="form-label">{{ __('shop.user.columns.home_number') }}</label>
                                <input type="text"
                                       class="form-control @error('address.home_number') is-invalid @enderror"
                                       id="home-number" name="address[home_number]"
                                       placeholder="Apartment, studio, or floor"
                                       value="@if($user->hasAddress()){{ $user->address->home_number }}@endif">
                                @error('address.home_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-8">
                                <label for="city" class="form-label">{{ __('shop.user.columns.city') }}</label>
                                <input type="text" class="form-control @error('address.city') is-invalid @enderror"
                                       id="city" name="address[city]"
                                       value="@if($user->hasAddress()){{ $user->address->city }}@endif">
                                @error('address.city')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="zip_code" class="form-label">{{ __('shop.user.columns.zip_code') }}</label>
                                <input type="text" class="form-control @error('address.zip_code') is-invalid @enderror"
                                       id="zip-code" name="address[zip_code]"
                                       value="@if($user->hasAddress()){{ $user->address->zip_code }}@endif">
                                @error('address.zip_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
