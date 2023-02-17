<ul>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-3">
                <li class="text-danger">{{ $error }}</li>
            </div>
        @endforeach
    @endif
</ul>
