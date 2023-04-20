@if (count($errors) > 0)
    @foreach ($errors->all() as $err)
        <div class="alert alert-danger">
            <ul>
                <li>{{ $err }}</li>
            </ul>

        </div>
    @endforeach


@endif


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>

@endif


@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>

@endif
