<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jizelle</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.svg') }}">
    <!-- Scripts -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
</head>
<body>
    @include('partials.header')
        <main class="pb-4 h-100">
            @yield('content')
        </main>
    @include('modals.catch')
    @include('modals.application')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script charset="UTF-8" src="//web.webpushs.com/js/push/f5c64cd84717959c7df5ae3568360614_0.js" async></script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '4499632920076750');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=4499632920076750&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(66519958, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/66519958" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173937125-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-173937125-1');
    </script>
    @stack('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#pick").on("click","a", function (event) {
                event.preventDefault();
                var id  = $(this).attr('href'),
                    top = $(id).offset().top;
                $('body,html').animate({scrollTop: top}, 700);
            });
        });
    </script>
    <script>
        var owl = $('.owl-two');
        owl.owlCarousel({
            margin: 10,
            loop: true,
            autoplay:true,
            autoplayTimeout:5000,
            // autoplaySpeed: 1500,
            // autoplayHoverPause:true,
            responsive: {
                0: {
                    items: 1
                },
            }
        })
    </script>
    <script>
        var check = 0;

        $(document).ready(function() {
            $(window).scroll(function() {
                var scrollTop = $(window).scrollTop();
                var second = $('#main');

                if (scrollTop >= second.height() && check == 0) {
                    setTimeout(function () {
                        $('#catch').modal('show');
                    },10000);
                    // console.log(check);
                    check = 1;
                }
            });
        });
    </script>
        <script type="text/javascript">
            function myFunction() {
                let checkBox = document.getElementById("myCheck");
                let checkBox2 = document.getElementById("myCheck2");
                if (checkBox.checked == true){
                    $('#accept').prop('disabled', false);
                } else if(checkBox.checked != true) {
                    $('#accept').prop('disabled', true);
                }

                if (checkBox2.checked == true){
                    $('#accept2').prop('disabled', false);
                } else if(checkBox2.checked != true) {
                    $('#accept2').prop('disabled', true);
                }
            }
        </script>
    <script>
        $('#accept').click(function () {
            var name = $('#inputName').val();
            var phone = $('#telephone').val();

            if (name == '' || phone == '') {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Заполните поля',
                });
            }
            else {
                $.ajax({
                    url: '{{ route('send') }}',
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "name": name,
                        "phone": phone
                    },
                    success: data => {
                        if (data.check == 1){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Заявка отправлена',
                            });
                            $('#submit').modal('hide');;
                            $('#inputName').val('');
                            $('#telephone').val('');
                        }
                        else if (data.check == 0) {
                            Swal.fire({
                                position: 'center',
                                icon: 'info',
                                title: 'Вы уже отправляли заявку',
                            });
                            $('#submit').modal('hide');
                            $('#inputName').val('');
                            $('#telephone').val('');
                        }
                    },
                    error: () => {
                    }
                });
            }
        })
    </script>
    <script>
        $('#accept2').click(function () {
            var name = $('#name').val();
            var phone = $('#phone').val();

            if (name == '' || phone == '') {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Заполните поля',
                });
            }
            else {
                $.ajax({
                    url: '{{ route('send') }}',
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "name": name,
                        "phone": phone
                    },
                    success: data => {
                        if (data.check == 1){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Заявка отправлена',
                            });
                            $('#catch').modal('hide');
                            $('#name').val('');
                            $('#phone').val('');
                        }
                        else if (data.check == 0) {
                            Swal.fire({
                                position: 'center',
                                icon: 'info',
                                title: 'Вы уже отправляли заявку',
                            });
                            $('#catch').modal('hide');
                            $('#name').val('');
                            $('#phone').val('');
                        }
                    },
                    error: () => {
                    }
                });
            }
        })
    </script>
</body>
</html>
