<div class="card mb-3" >
    <div class="card-header text-white bg-danger">Header</div>
    <div class="card-body border-danger">
        <h5 class="card-title">Inserisci una nuova transizione</h5>
        <form>
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input required type="text" class="form-control" id="title"  name="title" placeholder="Inserisci il titolo, descrizione">
            </div>
            <div class="form-group">
                <label class="my-1 mr-2" for="quando">Periodo</label>
                <select required class="custom-select my-1 mr-sm-2" id="quando" name="quando">
                    <option selected>Seleziona il periodo</option>
                    @foreach($periodi as $data)
                        <option value="{{$data->id}}">{{$data->completo}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="my-1 mr-2" for="quando">Portafoglio</label>
                <select required class="custom-select my-1 mr-sm-2" id="quando" name="quando">
                    <option selected>Seleziona il portafoglio</option>
                    @foreach($conti as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" onclick="selectOnlyThis(this.id)" type="radio" name="spesa" id="spesa" value="1">
                <label class="form-check-label" for="spesa">Spesa</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" onclick="selectOnlyThis(this.id)" type="radio" name="entrata" id="entrata" value="2">
                <label class="form-check-label" for="entrata">Entrata</label>
            </div>
            </div>
            <button type="submit" class="btn btn-danger" style="width: 100%">Inserisci</button>
        </form>
    </div>
</div>

<?php
/* TODO create movimenti table (migration [titolo, quando, conto, entrata(bool)])
 * TODO create route for filter and insert moviment
 * TODO  create view for mouviment
*/
?>


<script>
    function selectOnlyThis(id) {
        if(id === 'spesa'){
            document.getElementById('spesa').checked = true;
            document.getElementById('entrata').checked = false;
        }else{
            document.getElementById('spesa').checked = false;
            document.getElementById('entrata').checked = true;
        }
    }
</script>

