@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo __('labels.nameApp') ?></h1>
            <p class="lead"><?php echo __('labels.descApp') ?></p>
            <hr class="my-4">
            <p class="lead">Enter in <?php echo __('labels.gobalNameApp') ?> NOW</p>
            <a href="{{ URL::route('home') }}" type="button" class="btn btn-success">ENTER</a>
        </div>
    </div>
</div>
@endsection
