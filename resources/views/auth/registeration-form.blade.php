@extends('layouts.app')

@section('title', __('auth.signup'))

@section('content')
    <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">

        @include('partials.alerts')

        <form method="POST" action="{{ route('auth.register') }}">

            @csrf

            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="name">@lang('auth.name')</label>
                <input name="name" type="text" id="name" class="form-control" />
            </div>

            <!-- Username input -->
            <div class="mb-3">
                <label class="form-label" for="username">@lang('auth.username')</label>
                <input name="username" type="text" id="username" class="form-control" />
            </div>

            <!-- Email input -->
            <div class="mb-3">
                <label class="form-label" for="email">@lang('auth.email')</label>
                <input name="email" type="email" id="email" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="mb-3">
                <label class="form-label" for="password">@lang('auth.password')</label>
                <input name="password" type="password" id="password" class="form-control" />
            </div>

            <!-- Repeat Password input -->
            <div class="mb-3">
                <label class="form-label" for="password_confirmation">@lang('auth.confirm-password')</label>
                <input name="password_confirmation" type="password" id="password_confirmation" class="form-control" />
            </div>

            @include('auth.validation')

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <label class="form-check-label" for="registerCheck">
                    @lang('auth.agree-terms')
                </label>
                <input name="agree-terms" class="form-check-input me-2" type="checkbox" value="" id="registerCheck"
                    checked aria-describedby="registerCheckHelpText" />
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-3">@lang('auth.signin')</button>
        </form>
    </div>
@endsection
