<div id="deletedArea" class="card border-danger sticky-top sticky-offset">
    <div class="card-header bg-danger text-white c-pointer" data-toggle="collapse" data-target="#deletedAreaContent" aria-controls="deletedAreaContent">
       Task Eliminati<span class="material-icons" style="float:right;">keyboard_arrow_down</span>
    </div>
    <div id="deletedAreaContent" class="card-body p-3 collapse show" style="">
        @foreach($deletedTask as $data)
            @include('utils.alertDeleted')
        @endforeach
    </div>
</div>





