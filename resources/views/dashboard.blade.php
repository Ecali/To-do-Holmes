@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($services as $data)

            @include('utils.card')

    @endforeach


    @section('container')

    @endsection
</div>
@endsection
