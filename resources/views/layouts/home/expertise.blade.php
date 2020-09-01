<div class="bg-light-grey container-fluid" id="expertise">
    {{--<div class="container">--}}
        <div class="row p-5">
            <div class="col-12 col-md-4" id="expertise-left">
                <div class='h1 blue w-100 mb-0'>L'expertise</div>
                <div class='h2  w-100  mb-0'>métiers</div>
                <div class='h1 blue w-100 font-weight-bold  mb-0'>-</div>
            </div>
            <div class="col-12 col-md-8 align-bottom align-self-end pb-3" id="expertise-right">
                <div class="h-100 align-bottom d-inline-block gray">
                Où que vous soyez en France, quel que soit votre secteur d’activité, vous pouvez compter sur nos formateurs pour vous fournir des solutions adaptées pour vos projets de <b>formation</b>.
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3" src="{{asset('img/home/HP_aero.webp')}}"/>
                <div class="w-100 text-upper expertise-categ pb-3 pb-md-0"><a href="{{route('categorie',array('slug'=>'communication'))}}" class="font-weight-bold dark-grey">Communication</a></div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3" src="{{asset('img/home/HP_auto.webp')}}"/>
                <div class="w-100 text-upper expertise-categ"><a href="{{route('categorie',array('slug'=>'immobilier'))}}" class="font-weight-bold dark-grey">Immobilier</a></div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3" src="{{asset('img/home/HP_environnement.webp')}}"/>
                <div class="w-100 text-upper expertise-categ"><a href="{{route('categorie',array('slug'=>'informatique'))}}" class="font-weight-bold dark-grey">Informatique</a></div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3" src="{{asset('img/home/HP_labo.webp')}}"/>
                <div class="w-100 text-upper expertise-categ pb-3 pb-md-0"><a href="{{route('categorie',array('slug'=>'qualite-hygiene-securite'))}}" class="font-weight-bold dark-grey">Qualité</a></div>
            </div>
            <div class="col-6 col-md px-1 px-md-2">
                <img class="w-100 h-auto mb-3" src="{{asset('img/home/HP_sante.webp')}}"/>
                <div class="w-100 text-upper expertise-categ pb-3 pb-md-0"><a href="{{route('categorie',array('slug'=>'marches_publics'))}}" class="font-weight-bold dark-grey">Marchés publics</a></div>
            </div>
            <div class="col-6 col-md px-1 px-md-2 d-md-none">
                <span class="w-100 d-inline-block my-3"><span class="border-bottom border-blue mr-3">Tous nos secteurs de formation</span></span>
                <span class="blue plus border border-blue d-inline-block float-right mr-3">+</span>
            </div>
        </div>
        <div class="row d-none d-md-flex">
            <div class="col-12 col-md-3 offset-md-9 h4 my-4 pr-5">
                <div class="d-relative pr-5">
                    <span class="w-100 d-inline-block"><span class="border-bottom border-blue mr-3">Tous nos secteurs de formation</span></span>
                    <span class="blue plus border border-blue d-inline-block position-absolute">+</span>
                </div>
            </div>
        </div>
    {{--</div>--}}
</div>