@extends('layouts.app')

@section('title', __('auth.signup'))

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
        <form action="{{ route('auth.register') }}">
            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="registerName">@lang('auth.name')</label>
                <input type="text" id="registerName" class="form-control" />
            </div>

            <!-- Username input -->
            <div class="mb-3">
                <label class="form-label" for="registerUsername">@lang('auth.username')</label>
                <input type="text" id="registerUsername" class="form-control" />
            </div>

            <!-- Email input -->
            <div class="mb-3">
                <label class="form-label" for="registerEmail">@lang('auth.email')</label>
                <input type="email" id="registerEmail" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="mb-3">
                <label class="form-label" for="registerPassword">@lang('auth.password')</label>
                <input type="password" id="registerPassword" class="form-control" />
            </div>

            <!-- Repeat Password input -->
            <div class="mb-3">
                <label class="form-label" for="registerRepeatPassword">@lang('auth.confirm-password')</label>
                <input type="password" id="registerRepeatPassword" class="form-control" />
            </div>

            @include('auth.validation')

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <label class="form-check-label" for="registerCheck">
                    @lang('auth.agree-terms')
                </label>
                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                    aria-describedby="registerCheckHelpText" />
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-3">@lang('auth.signin')</button>
        </form>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
