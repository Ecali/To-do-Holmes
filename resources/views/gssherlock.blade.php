@extends('layouts.app')

@section('title')
    <?php echo __('labels.sherlockTitle') ?>
@endsection

@section('content')
<div class="container">
    <div class="container text-center">
        <p class="display-4"><?php echo __('labels.sherlockTitle') ?></p>
        <p class="text-muted">Benvenuto, sono Sherlock il tuo gestore delle spese</p>
    </div>
    <div class="row">
        <div class="col-md-8" >
            @include('utils.filterCardSherlock')
        </div>
        <div class=col-md-4">

        </div>
    </div>
    <div class="row">
        <div class="col-md-8" >

        </div>
        <div class=col-md-4">
            @include('utils.addCardSherlock')
        </div>
    </div>
    @section('container')

    @endsection
</div>
@endsection
