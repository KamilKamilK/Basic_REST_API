@extends('layouts.app')

@section('content')
<div class="d-flex  align-items-center p-3 px-md bg-white ">
<h5 class="my-0 mr-md-auto font_weight_normal"> Basic Laravel REST API</h5>

    <main class="py-4">
        @yield('content')
    </main>
</div>

@endsection
