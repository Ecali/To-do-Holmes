<div id="filterArea" class="card border-danger sticky-top sticky-offset">
    <div class="card-header bg-danger text-white c-pointer collapsed" data-toggle="collapse" data-target="#filterContent" aria-expanded="false" aria-controls="filterContent">
        Filters
    </div>
    <div id="filterContent" class="card-body p-3 collapse">
        <form action="" class="form-row" id="filters-form" method="post">
            @csrf
            <div class="col-md-6">
                <label for="periodo">Seleziona il periodo</label>
                <select class="form-control" data-oldvalue="45" id="periodo" name="periodo">
                    @foreach($periodi as $data)
                        <option value="{{$data->id}}">{{$data->completo}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="conto">Seleziona il conto</label>
                <select class="form-control" data-oldvalue="" id="conto" name="conto">
                    @foreach($conti as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>
                <button type="submit" class="btn btn-danger btn-block mt-3">Applica i filri</button>
        </form>
    </div>
</div>
