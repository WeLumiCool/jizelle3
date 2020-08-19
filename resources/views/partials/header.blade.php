<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__body">
                <a href="#" class="header__logo">
                    <img class="logo" src="{{ asset('images/logo.svg') }}" alt="logo">
                </a>
                <div class="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu">
                    <ul class="header__list" id="pick" style="padding-left: 0px;">
                        <li>
                            <a href="#catalog" class="header__link"><img class="nav-header  pr-2"  src="{{ asset('icons/box_icon.svg') }}"
                                                                         alt="Каталог">Каталог</a>
                        </li>
                        <li>
                            <a href="#fourth" class="header__link "><img  class="nav-header pr-2 " src="{{ asset('icons/about_us_icon.svg') }}"
                                                                         alt="О нас">Условия работы</a>
                        </li>
                        {{--<li class="nav-header">--}}
                        {{--<a href="#" class="header__link"><img  class="nav-header pr-2" src="{{ asset('icons/catalog_icon.svg') }}" alt="Каталог">Каталог для оптовых--}}
                        {{--покупателей</a>--}}
                        {{--</li>--}}
                        <li >
                            <a href="#fourth" class="header__link"><img class="nav-header pr-2"  src="{{ asset('icons/how_we_work_icon.svg') }}"
                                                                      alt="Как мы работаем?">О нас</a>
                        </li>
                        <li>
                            <a href="#footer" class="header__link "><img  class="nav-header pr-2" src="{{ asset('icons/contact_icon.svg') }}"
                                                                           alt="Контакты">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>
<div class="content">

</div>

@push('scripts')
    <script type="text/javascript">
        window.addEventListener("scroll", function () {
            let header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.header__burger').click(function (event) {
                $('.header__burger,.header__menu,header').toggleClass('active');
                $('body').toggleClass('lock');
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.header__list').click(function (event) {
                $('.header__burger,.header__menu,header').removeClass('active');
                $('body').removeClass('lock');
            });

        });
    </script>

@endpush
