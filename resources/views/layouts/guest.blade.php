<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4EP3B96WQB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4EP3B96WQB');
</script>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       
        @livewireStyles
        <!-- Scripts -->
        <script src="js/app.js" defer></script>
        @if (isset($meta))
        {{ $meta }}
        @else 
        <title>Villa Balin Apartman Békésszentandrás</title>
        @endif 
        
    </head>
    <body>
        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v13.0&appId=1144300069308240&autoLogAppEvents=1" nonce="IcnFVB2R"></script>
        <div class="font-sans text-gray-900 antialiased">

            @livewire('navigation-menu')
            {{ $slot }}
        </div>
        <footer class="bg-gray-50 w-full py-24 border-t border-bluish">
            <div class="flex flex-wrap container mx-auto md:px-8">
                <div class="w-full md:w-1/3 mb-10 md:mb-0 px-4 flex flex-col">

                    <div class="">
                        <h1 class="font-bold mb-3 tracking-widest text-xl ">KAPCSOLAT</h1>
                        <div>
                            <img class="h-20 w-auto my-4" src="{{asset('/images/VillaBalinLogo111111234.png')}}" alt="">
                        </div>
                        <p>5561, Békészentandrás</p>
                        <p>Dinnyelaposi üdülősor 118</p>
                        <a class="mt-2" href="tel:+36202398929">+36 20 239-8929</a>
                        <p class="mt-2">info@villabalin.hu</p>
                    </div>

                    <div>
                        <img class="mt-6" src="{{asset('/images/barion-card-strip-intl_300px.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/3 mb-10 md:mb-0 px-2 md:px-4">
                    <div class="mx-auto md:ml-0 md:mr-auto">
                        <h1 class="font-bold mb-3 tracking-widest text-xl uppercase">facebook</h1>
                        <div class="fb-page" data-href="https://www.facebook.com/VillaBalin" data-tabs="timeline" data-width="290" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/VillaBalin" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/VillaBalin">VillaBalin</a></blockquote></div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 mb-10 md:mb-0 px-4">
                    <div class="">
                        <h1 class="font-bold mb-3 tracking-widest text-xl uppercase">térkép</h1>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2728.2610628901257!2d20.49574161609791!3d46.85823464736482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4746a9073c1195cf%3A0x3ecdb2845c3e91e8!2sVilla%20Balin%20Apartman!5e0!3m2!1shu!2shu!4v1633457939596!5m2!1shu!2shu" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </footer>

        @livewireScripts
    </body>
</html>
