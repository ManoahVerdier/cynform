<!doctype html>
<html lang="fr" class="h-100 w-100 cyn">
    <head>
        <!-- Google Tag Manager -->
        {{--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WV9DF45');</script>--}}
        <!-- End Google Tag Manager -->

        
        {{-- Required meta tags --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="page" content="@yield('page')">

        @yield('extra-meta')

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')"/>

        {{-- CSS --}}
        @section('css')
        {!! Html::style(mix('/css/app.css')) !!}
        @show

        @yield('captcha')

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-9998670-20"></script>-->
        <!--<script>-->
        <!--    window.dataLayer = window.dataLayer || [];-->
        <!--    function gtag(){dataLayer.push(arguments);}-->
        <!--    gtag('js', new Date());-->
        <!--    gtag('config', 'UA-9998670-20');-->
        </script>
    </head>

    <body @yield('body-attr') class="bg-white">
        <!-- Google Tag Manager (noscript) -->
        <!--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WV9DF45"-->
        <!--height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
        <!-- End Google Tag Manager (noscript) -->


        {{-- Header --}}
        @yield('header')

        {{-- Content --}}
        <main class="content" style="height: calc(100% - 60px)">
            @yield('content')
        </main>

        {{-- Footer --}}
        @yield('footer')

        {{-- JavaScript --}}
        @section('script')
            <script src={{mix('/js/app.js')}} async></script>
        @show
        <script src="https://kit.fontawesome.com/4236d13d2d.js" crossorigin="anonymous"></script>
    </body>
</html>
