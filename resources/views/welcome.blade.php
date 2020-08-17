@extends('layouts.app')
@section('content')
    <section class="block h-100" id="main" style="background-color: #F4F4F4;">
        <div class="container h-100" >
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-12 py-lg-0 py-5 d-flex align-items-center justify-content-center">
                    <div class="pt-lg-0 pt-4 text-center">
                        <div class="py-5">
                            <h1 class="font-weight-normal text-center" style="font-size: 40px; line-height: 47px;">Закупка Plus Size модели от 10 ед.
                                <br>с бесплатной доставкой! </h1>
                        </div>
                        <button class="btn btn-secondary mt-4 px-4 py-3 rounded" data-toggle="modal" data-target="#submit">
                            Ознакомиться
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="catalog">
        <div class="container my-5 py-5">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12" style="border:4px solid #f8f9fa;">
                    <div class="owl-one owl-carousel">
                    <div class="row item">
                        <div class="col-lg-4 col-12 px-lg-4 px-3 d-flex align-items-center justify-content-center mt-lg-0 mt-3">
                            <div class="">
                                <p class="font-weight-bold font-size-20 mb-4">Название товара</p>

                                <p class="font-size-18 font-weight-light line-height-110 mb-4">
                                    какое-то описание какое-то описание какое-то описание какое-то описание
                                </p>

                                <button class="btn jizelle-btn font-size-18 w-100" data-toggle="modal" data-target="#submit">
                                    Заказать в один клик
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12 order-lg-last order-first">
                            <img class="w-100" src="{{ asset('images/front_test/2blockimg.png') }}" alt="">
                        </div>
                    </div>

                        <div class="row item">
                            <div class="col-lg-4 col-12 px-lg-4 px-3 d-flex align-items-center justify-content-center mt-lg-0 mt-3">
                                <div class="">
                                    <p class="font-weight-bold font-size-20 mb-4">Название товара</p>

                                    <p class="font-size-18 font-weight-light line-height-110 mb-4">
                                        какое-то описание какое-то описание какое-то описание какое-то описание
                                    </p>

                                    <button class="btn jizelle-btn font-size-18 w-100" data-toggle="modal" data-target="#submit">
                                        Заказать в один клик
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-8 col-12 order-lg-last order-first">
                                <img class="w-100" src="{{ asset('images/front_test/2blockimg.png') }}" alt="">
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
        <div class="container-fluid my-5 py-5" style="background-color: #E3E3E3">
            <div class="container">
                <div class="owl-two owl-carousel">
            <div class="row item">
                <div class="col-12 text-center">
                    <p class="font-size-24">
                        Лучшие что покупки из Киргизии, полностью соответствует описанию.
                    </p>
                    <img class="img-fluid w-auto mx-auto" src="{{ asset('images/front_test/fifthimg.png') }}" alt="">
                    <p class="font-size-14 mt-3">
                        Василиса, Тверь. владелец магазина одежды
                    </p>
                </div>
            </div>
                    <div class="row item">
                        <div class="col-12 text-center">
                            <p class="font-size-24">
                                Актуальные модели одежды, качество пошива на высшем уровне. Отдельное спасибо Айнуре! За оперативность по любым вопросам.
                            </p>
                            <img class="img-fluid w-auto mx-auto" src="{{ asset('images/front_test/fifthimg.png') }}" alt="">
                            <p class="font-size-14 mt-3">
                                Евгений, директор интернет-магазина, Новосибирск
                            </p>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-12 text-center">
                            <p class="font-size-24">
                                Быстро! Четко! В срок! Все бы так …
                            </p>
                            <img class="img-fluid w-auto mx-auto" src="{{ asset('images/front_test/fifthimg.png') }}" alt="">
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

@endpush
