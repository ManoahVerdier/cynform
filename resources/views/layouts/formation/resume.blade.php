<div class="wrap" id="resume">
    <div class="row content bg-white mx-0">
        <div class="col-12 text-right line">
            <span class="font-weight-bold blue float-left">Durée</span>{{$formation->duree}}
        </div>
        <div class="col-12 text-right line">
            <span class="font-weight-bold blue float-left">Prix</span>{{$formation->prix}}
        </div>
        <div class="col-12 text-right line">
            <span class="font-weight-bold blue float-left">Type</span>{{$formation->type}}
        </div>
        <div class="col-12 text-left py-2">
            <span class='blue font-weight-bold'> Prochaines sessions à distance</span>
        </div>
        @if($formation->sessions ?? false)
            @foreach(explode(',',$formation->sessions) as $session)
            <div class="col-6 text-center py-0">
                {{$session}}
            </div>
            @endforeach 
        @else
            @foreach(explode(',',$default->sessions) as $session)
            <div class="col-6 text-center py-0">
                {{$session}}
            </div>
            @endforeach 
            
        @endif
        <div class="col-12 text-center p-3">
            <a href="{{route('contact', ['id' => $formation->id,'session'=>1])}}" class="btn btn-blue">S'inscrire</a>
        </div>
    </div>
</div>