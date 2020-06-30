@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($tasks as $data)
        @include('utils.alert')
    @endforeach
</div>
@endsection
