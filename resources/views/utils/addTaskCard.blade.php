<div id="filterArea" class="card border-danger sticky-top sticky-offset">
    <div class="card-header bg-danger text-white c-pointer" data-toggle="collapse" data-target="#filterContent" aria-expanded="true" aria-controls="filterContent">
        Aggiungi un task<span class="material-icons" style="float:right;">keyboard_arrow_down</span>
    </div>
    <div id="filterContent" class="card-body p-3 collapse show" style="">
        <form action = "{{route('taskAdd')}}" method = "post">
            @csrf
            <div class="form-group">
                <label for="inputTitleLabel">Titolo del task</label>
                <input required type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="inserisci il titolo completo del task">
            </div>
            <div class="form-group">
                <label for="inputDescLabel">Descrizione del task</label>
                <textarea required type="text" rows="3" class="form-control" id="desc" name="desc" placeholder="Inserisci la descrizione lunga del task"></textarea>
            </div>
            <button type="submit" class="btn btn-danger">Inserisci</button>
        </form>
    </div>
</div>

