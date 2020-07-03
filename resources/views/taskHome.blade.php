@extends('layouts.app')
@section('title')
    <?php echo __('labels.tasksTitle') ?>
@endsection

@section('content')
    <div class="container">
        @include('utils.addTaskCard')
    </div>
    @if(Session::has('message'))
    <div class="container" id="successMessage">
        <br><br><hr>
        <div class="alert alert-success"  role="alert">
            {{Session::get("message")}}
            <button class="btn" onclick="hideMessage()" type="submit" style="float: right; padding-top: 0"><span class="material-icons">close</span></button>

        </div>
        <hr>
    </div>
    @endif

    <?php $x = true;?>
<div class="container">
    <br><hr><br>
    <h3>Da completare</h3>
    @foreach($completeTask as $data)
        <?php $x = false;?>
        @include('utils.alert')
    @endforeach
    @if($x)
        <h5><?php echo __('labels.noTaskToDO')?></h5>
        <small class="text-muted"><?php echo __('labels.addTask')?></small>
    @endif
    <hr>
    <h3>Completati</h3>
    @foreach($tasks as $data)
        @include('utils.alert')
    @endforeach
</div>
@endsection

<script stype="textjavascript">
    function hideMessage() {
        document.getElementById('successMessage').style.display = 'none';
    }
</script>
