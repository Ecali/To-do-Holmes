@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-deck">
    @foreach ($services as $data)

            @include('utils.card')

    @endforeach
    </div>

    @section('container')

    @endsection
</div>
@endsection
