@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($services as $service)

        @if(view()->exists('utils.card'))
            @include('utils.card')
        @else
            {{$service->name }}
            {{$service->desc }}
        @endif
    @endforeach


    @section('container')

    @endsection
</div>
@endsection
