    @if($data->do == 0)
        <div class="alert alert-success" role="alert">
    @else
        <div class="alert alert-primary" role="alert">
    @endif
    <h5><strong>{{$data->title}}</strong>
        <form action = "{{route('taskUpdate')}}" method = "post" style="float: right">
            @csrf
        @if($data->do == 0)
            <input type="hidden" name="id" value="0">
            <input type="hidden" name="idTask" value="{{$data->id}}">
            <button class="btn" type="submit"><span class="material-icons">loop</span></button>
        @else
            <input type="hidden" name="id" value="1">
                <input type="hidden" name="idTask" value="{{$data->id}}">
                <button class="btn" type="submit"><span class="material-icons">done_all</span></button>
        @endif
        </form>

    </h5>
    <hr>
    <p>{{$data->desc}}</p>
</div>




