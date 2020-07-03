    @if($data->do == 0)
        <div class="alert alert-success" role="alert">
    @else
        <div class="alert alert-primary" role="alert">
    @endif
    <h5><strong>{{$data->title}}</strong>

        @if($data->do == 0)
            <form action = "{{route('taskUpdate')}}" method = "post" style="float: right">
                @csrf
                <input type="hidden" name="id" value="0">
                <input type="hidden" name="idTask" value="{{$data->id}}">
                <button class="btn" type="submit"><span class="material-icons">loop</span></button>
            </form>
                <form action = "{{route('taskDelete')}}" method = "post" style="float: right">
                    @csrf
                    <input type="hidden" name="idTaskd" value="{{$data->id}}">
                    <button class="btn border-danger" type="submit"><span class="material-icons">delete</span></button>
                </form>
            @else
            <form action = "{{route('taskUpdate')}}" method = "post" style="float: right">
                @csrf
            <input type="hidden" name="id" value="1">
                <input type="hidden" name="idTask" value="{{$data->id}}">
                <button class="btn" type="submit"><span class="material-icons">done_all</span></button>
            </form>
        @endif




    </h5>
    <hr>
    <p>{{$data->desc}}</p>
</div>




