@section('card')
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$service->name}}</h5>
        <p class="card-text">{{$service->name}}</p>
        <a href="#" class="btn btn-success">ENTER</a>
    </div>
</div>
@endsection
