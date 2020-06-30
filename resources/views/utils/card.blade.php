<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{URL::asset('img/'.$data->img.'.jpg')}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$data->name}}</h5>
        <p class="card-text">{{$data->desc}}</p>
        <a href="{{ URL::route($data->link) }}" class="btn btn-success">ENTER</a>
    </div>
</div>
