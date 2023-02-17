@extends('layouts.app')

@section('title', __('auth.signin'))

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
        <form action="{{ route('auth.login') }}">

            <!-- Email input -->
            <div class="mb-3">
                <label class="form-label" for="loginName">@lang('auth.email-or-username')</label>
                <input type="email" id="loginName" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="mb-3">
                <label class="form-label" for="loginPassword">@lang('auth.password')</label>
                <input type="password" id="loginPassword" class="form-control" />
            </div>

            @include('auth.validation')

            <!-- 2 column grid layout -->
            <div class="row mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="mb-3">
                        <label class="form-check-label" for="loginCheck">@lang('auth.remember-me')</label>
                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                    <!-- Simple link -->
                    <a href="#!">@lang('auth.forgot-password')</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">@lang('auth.signin')</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>@lang('auth.no-register') <a href="{{ route('auth.register') }}">@lang('auth.signup')</a></p>
            </div>

        </form>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
