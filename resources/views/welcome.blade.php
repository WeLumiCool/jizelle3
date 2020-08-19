@extends('layouts.app')
@section('content')
    <section class="block h-100 position-relative" id="main" style="background-image: url({{ asset('images/main.jpg') }}); background-size:cover; background-position: center; background-repeat: no-repeat; min-height: 110%;">
        <div class="container h-100">
            <div class="row justify-content-end align-items-center h-100">
                <div class="col-lg-8 col-12 py-lg-0 py-5 d-flex align-items-center justify-content-center">
                    <div class="pt-lg-0 pt-4 text-right">
                        <div class="py-5">
                            <h1 class="font-weight-normal text-right" style="font-size: 40px; line-height: 47px;">Закупка Plus Size модели от 10 ед.
                                с бесплатной доставкой! </h1>
                        </div>
                        <button class="btn mt-4 px-4 py-3 rounded font-size-28 px-5" style="background-color: #E5DD90;" data-toggle="modal" data-target="#submit">
                            Ознакомиться
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-fluid position-absolute" style="left:0%; bottom:-5%;" src="{{ asset('images/img1.png') }}" alt="">
    </section>
    <section id="catalog">
        <div class="container my-5 py-5">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12" style="border:4px solid #f8f9fa;">
                    {{--<div class="owl-one owl-carousel">--}}
                    {{--<div class="row item">--}}
                        {{--<div class="col-lg-4 col-12 px-lg-4 px-3 d-flex align-items-center justify-content-center mt-lg-0 mt-3">--}}
                            {{--<div class="">--}}
                                {{--<p class="font-weight-bold font-size-20 mb-4">Название товара</p>--}}

                                {{--<p class="font-size-18 font-weight-light line-height-110 mb-4">--}}
                                    {{--какое-то описание какое-то описание какое-то описание какое-то описание--}}
                                {{--</p>--}}

                                {{--<button class="btn jizelle-btn font-size-18 w-100" data-toggle="modal" data-target="#submit">--}}
                                    {{--Заказать в один клик--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-8 col-12 order-lg-last order-first">--}}
                            {{--<img class="w-100" src="{{ asset('images/front_test/2blockimg.png') }}" alt="">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                        {{--<div class="row item">--}}
                            {{--<div class="col-lg-4 col-12 px-lg-4 px-3 d-flex align-items-center justify-content-center mt-lg-0 mt-3">--}}
                                {{--<div class="">--}}
                                    {{--<p class="font-weight-bold font-size-20 mb-4">Название товара</p>--}}

                                    {{--<p class="font-size-18 font-weight-light line-height-110 mb-4">--}}
                                        {{--какое-то описание какое-то описание какое-то описание какое-то описание--}}
                                    {{--</p>--}}

                                    {{--<button class="btn jizelle-btn font-size-18 w-100" data-toggle="modal" data-target="#submit">--}}
                                        {{--Заказать в один клик--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-8 col-12 order-lg-last order-first">--}}
                                {{--<img class="w-100" src="{{ asset('images/front_test/2blockimg.png') }}" alt="">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
<div class="carousel-main">
                    <div class="carousel">
                        <div class="carousel__nav">
   <span id="moveLeft" class="carousel__arrow">
        <svg class="carousel__icon" width="24" height="24" viewBox="0 0 24 24">
    <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
</svg>
    </span>
                            <span id="moveRight" class="carousel__arrow" >
      <svg class="carousel__icon"  width="24" height="24" viewBox="0 0 24 24">
  <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
</svg>
    </span>
                        </div>
                        <div class="carousel-item carousel-item--1">
                            <div class="carousel-item__image" style="background-image: url({{ asset('images/catalog/1.jpg') }});"></div>
                            <div class="carousel-item__info mt-lg-0 mt-4">
                                <div class="carousel-item__container">
                                    {{--<h2 class="carousel-item__subtitle">The grand moment </h2>--}}
                                    <p class="h2 carousel-item__title mb-3">Спортивный костюм</p>
                                    {{--<p class="carousel-item__description">какое-то описание какое-то описание какое-то описание какое-то описание</p>--}}
                                    <button class="btn jizelle-btn font-size-18 w-100" data-toggle="modal" data-target="#submit">
                                    Заказать в один клик
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item carousel-item--2">
                            <div class="carousel-item__image" style="background-image: url({{ asset('images/catalog/2.jpg') }});"></div>
                            <div class="carousel-item__info">
                                <div class="carousel-item__container">
                                    {{--<h2 class="carousel-item__subtitle">The big window </h2>--}}
                                    <p class="h2 carousel-item__title mb-3">Топ</p>
                                    {{--<p class="carousel-item__description">какое-то описание какое-то описание какое-то описание какое-то описание</p>--}}
                                    <button class="btn jizelle-btn font-size-18 w-100" data-toggle="modal" data-target="#submit">
                                        Заказать в один клик
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-item--3">
                            <div class="carousel-item__image" style="background-image: url({{ asset('images/catalog/3.jpg') }});"></div>
                            <div class="carousel-item__info">
                                <div class="carousel-item__container">
                                    {{--<h2 class="carousel-item__subtitle">Tropical palms </h2>--}}
                                    <p class="h2 carousel-item__title mb-3">Пальто</p>
                                    {{--<p class="carousel-item__description">какое-то описание какое-то описание какое-то описание какое-то описание</p>--}}
                                    <button class="btn jizelle-btn font-size-18 w-100" data-toggle="modal" data-target="#submit">
                                        Заказать в один клик
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item carousel-item--4">
                            <div class="carousel-item__image" style="background-image: url({{ asset('images/catalog/4.jpg') }});"></div>
                            <div class="carousel-item__info">
                                <div class="carousel-item__container">
                                    {{--<h2 class="carousel-item__subtitle">Beach </h2>--}}
                                    <p class="h2 carousel-item__title mb-3">Платье-рубашка</p>
                                    {{--<p class="carousel-item__description">какое-то описание какое-то описание какое-то описание какое-то описание</p>--}}
                                    <button class="btn jizelle-btn font-size-18 w-100" data-toggle="modal" data-target="#submit">
                                        Заказать в один клик
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item carousel-item--5">
                            <div class="carousel-item__image" style="background-image: url({{ asset('images/catalog/5.jpg') }});"></div>
                            <div class="carousel-item__info">
                                <div class="carousel-item__container">
                                    {{--<h2 class="carousel-item__subtitle">The white building </h2>--}}
                                    <p class="h2 carousel-item__title mb-3">Куртка</p>
                                    {{--<p class="carousel-item__description">какое-то описание какое-то описание какое-то описание какое-то описание</p>--}}
                                    <button class="btn jizelle-btn font-size-18 w-100" data-toggle="modal" data-target="#submit">
                                        Заказать в один клик
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-lg-block d-none" id="third">
        <div class="container my-5 py-5">
            <div class="row justify-content-center">
                <div class="col-12 position-relative">
                    <img class="w-100" src="{{ asset('images/3block.jpg') }}" alt="">
                    <div class="third-content text-center" style="position: absolute; top:33%; left:30%;">
                        <p>
                        <span style="font-size: 30px;">Оставь заявку <strong>сейчас</strong> и получи</span> <br><span class="font-weight-bold" style="font-size: 45px;"> бесплатную доставку!</span>
                        </p>
                        <button class="btn jizelle-btn-2 font-size-20 px-5" data-toggle="modal" data-target="#submit" style="background-image: url({{asset('images/3btn.png')}}); background-position: center; background-size: cover; background-repeat:  no-repeat">
                            Оставить заявку
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="d-lg-none d-block" id="third">
        <div class="container my-5 py-5">
            <div class="row justify-content-center">
                <div class="col-12 position-relative">
                    {{--<img class="w-100" src="{{ asset('images/3block.jpg') }}" alt="">--}}
                    <div class="third-content text-center">
                        <p>
                            <span style="font-size: 22px;">Оставь заявку <strong>сейчас</strong> и получи</span> <br><span class="font-weight-bold" style="font-size: 32px;"> бесплатную доставку!</span>
                        </p>
                        <button class="btn jizelle-btn-2 font-size-20 px-5" data-toggle="modal" data-target="#submit" style="background-image: url({{asset('images/3btn.png')}}); background-position: center; background-size: cover; background-repeat:  no-repeat">
                            Оставить заявку
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fourth">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <img class="w-100" src="{{ asset('images/front_test/fourthimg.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-12 mt-lg-0 mt-4 d-flex align-items-center">
                    <div class="">
                        <p class="font-weight-bold font-size-20 mb-4">Преимущества работы с нами</p>

                        <ul>
                            <li class="mb-3">
                                Обновление моделей каждые две недели
                            </li>
                            <li class="mb-3">
                                Лучший прайс по СНГ
                            </li>
                            <li class="mb-3">
                                Минимальный заказ от 5000 рублей| 10 ед
                            </li>
                            <li class="mb-3">
                                Бесплатная доставка по всей СНГ
                            </li>
                            <li class="mb-3">
                                Закрытый чат поддержки с консультациями
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fifth">
        <div class="container-fluid my-5 py-5" style="background-color: #FDC8AA">
            <div class="container">
                <div class="owl-two owl-carousel">
            <div class="row item justify-content-center w-100">
                <div class="col-lg-8 col-12 text-center">
                    <p class="font-size-24 line-height-110">
                        Лучшие что покупки из Киргизии, полностью соответствует описанию.
                    </p>
                    {{--<img class="img-fluid w-auto mx-auto" src="{{ asset('images/front_test/fifthimg.png') }}" alt="">--}}
                    <p class="font-size-14 mt-3">
                        Василиса, Тверь. владелец магазина одежды
                    </p>
                </div>
            </div>
                    <div class="row item justify-content-center w-100">
                        <div class="col-lg-8 col-12 text-center">
                            <p class="font-size-24 line-height-110">
                                Актуальные модели одежды, качество пошива на высшем уровне. Отдельное спасибо Айнуре! За оперативность по любым вопросам.
                            </p>
                            {{--<img class="img-fluid w-auto mx-auto" src="{{ asset('images/front_test/fifthimg.png') }}" alt="">--}}
                            <p class="font-size-14 mt-3">
                                Евгений, директор интернет-магазина, Новосибирск
                            </p>
                        </div>
                    </div>
                    <div class="row item justify-content-center w-100">
                        <div class="col-lg-8 col-12 text-center">
                            <p class="font-size-24 line-height-110">
                                Быстро! Четко! В срок! Все бы так …
                            </p>
                            {{--<img class="img-fluid w-auto mx-auto" src="{{ asset('images/front_test/fifthimg.png') }}" alt="">--}}
                            <p class="font-size-14 mt-3">
                                Огонян, Краснодар, владелец бутика в ТЦ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection

@push('scripts')
    <script>
        $(function(){
            $('.carousel-item').eq(0).addClass('active');
            var total = $('.carousel-item').length;
            var current = 0;
            $('#moveRight').on('click', function(){
                var next=current;
                current= current+1;
                setSlide(next, current);
            });
            $('#moveLeft').on('click', function(){
                var prev=current;
                current = current- 1;
                setSlide(prev, current);
            });
            function setSlide(prev, next){
                var slide= current;
                if(next>total-1){
                    slide=0;
                    current=0;
                }
                if(next<0){
                    slide=total - 1;
                    current=total - 1;
                }
                $('.carousel-item').eq(prev).removeClass('active');
                $('.carousel-item').eq(slide).addClass('active');
                setTimeout(function(){

                },800);



                console.log('current '+current);
                console.log('prev '+prev);
            }
        });
    </script>
@endpush
