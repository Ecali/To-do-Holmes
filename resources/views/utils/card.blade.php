<div class="card" style="width: 18rem;max-width: 200px;max-height: 400px;">
    <img class="card-img-top" src="{{URL::asset('img/'.$data->img.'.jpg')}}" style="width: 200px; height: 200px" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$data->name}}</h5>
        <p class="card-text">{{$data->desc}}</p>
        <a href="{{ URL::route($data->link) }}" class="btn btn-primary" style="width: 100%">ENTER</a>
    </div>
</div>

