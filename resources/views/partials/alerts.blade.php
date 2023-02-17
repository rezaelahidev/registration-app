@if (session('success'))
    <div class="alert alert-success">
        @lang('public.success-operation');
    </div>
@endif

@if (session('failed'))
    <div class="alert alert-danger">
        @lang('public.failed-operation');
    </div>
@endif
