<footer class='p-3 mt-5 bg-light-grey'>
    <div class="container">    
        <div class="row">
            <div class="col-12 col-md-6 text-center">
                <p class="title mb-1">Besoin d'un conseil ?</p>
                <a href="" class="w-100 d-inline-block blue h5 font-weight-bold">Contactez nous !</a>
            </div>
            <div class="col-12 col-md-6 mt-3 mb-3 mt-md-1 mt-md-0  text-center">
                <a href="tel:+33482534478" class="w-100 d-inline-block mt-3 dark-grey h6 mb-0">04 82 53 44 78</a>
                <a href="mailto:contact@cyn-communication.fr" class="w-100 d-inline-block blue h5 font-weight-bold">contact@cyn-communication.fr</a>
            </div>
            <div class="col-12 text-center">
                <span>{{env('APP_NAME')}} - Copyright 2020 - Tous droits reserves. | </span>
                <a href="{{route('mentions_legales')}}">Mentions legales</a><span> | </span>
                <a href="{{route('infos_pratiques')}}">Infos Pratiques</a><span> | </span>
                <a href="{{route('cgv')}}">CGV</a><span> | </span>
                <a href="{{route('pages')}}">Documentation</a><span> 
            </div>
        </div>
    </div>
</footer>