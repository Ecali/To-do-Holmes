<div class="alert alert-danger" role="alert">
    <h5><strong>{{$data->title}}</strong></h5>
    <hr>
    <div class="container" style="min-height: 30px">
        <p style="float: left">{{$data->desc}}</p>
        <p class="text-muted" style="float: right">Delete at: {{$data->deleted_at}}</p>
    </div>
</div>
