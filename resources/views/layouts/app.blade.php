<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>

    @section('header')
        @include('partials.header')
    @endsection

    @yield('header')

    <div class="container">

    </div>

    <div class="container px-4 mt-5 mb-5 border p-3 pt-10">
        <div class="row gx-5">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>

    @section('footer')
        @include('partials.footer')
    @endsection

    @yield('footer')


    {{-- Loading scripts --}}
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>


</body>

</html>
