<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sách truyện</title>

        <!-- Fonts -->
        


        <!-- Styles -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

 <!-- Custom CSS -->
 
        
    </head>
    <body class="antialiased">
        <div class="container">
        <!-- Menu -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{url('/')}}">Sachtruyen.Com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Danh mục truyện
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($danhmuc as $key => $danh)
                                    <li><a class="dropdown-item"
                                            href="{{ url('danh-muc/' .$danh->slug_danhmuc) }}">{{ $danh->tendanhmuc }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                

                </ul>
                <form autocomplete="off" class="d-flex" role="search" action="{{ url('tim-kiem') }}"
                        method="POST">
                        @csrf
                        <input class="form-control me-2" type="search" name="tukhoa" id="keywords"
                            placeholder="Nhập..." aria-label="Search">
                        <div class="search_ajax"></div>
                        <button class="btn btn-outline-success" type="submit">Tìm</button>
                    </form>

                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
            </nav>
        <!-- Slide -->
        @yield('slide')
        <!-- Truyen moi -->
        @yield('content')

        </div>

       
        <!-- jQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
         <!-- Owl Carousel JS -->
        <script src="{{ asset('/js/owl.carousel.js') }}"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!-- Owl Carousel Initialization -->
        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.your-slider').slick({
                    dots: true,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                });
            });
        </script>

        <script type="text/javascript">
            $('.select-chapter').on('change', function() {
                var url = $(this).val();
                if (url) {
                    window.location = url;
                }
                return false;
            });

            current_chapter();

            function current_chapter() {
                var url = window.location.href;
                $('.select-chapter').find('option[value="' + url + '"]').attr("selected", true);
            }
        </script>

        <script type="text/javascript">
            $('#keywords').keyup(function() {
                var keywords = $(this).val();
                if (keywords != '') {
                    var _token = $('input[name="_token"]').val();

                    $.ajax({
                        url: "{{ url('/timkiem-ajax') }}",
                        method: "POST",
                        data: {
                            keywords: keywords,
                            _token: _token
                        },
                        success: function(data) {
                            $('#search_ajax').fadeIn();
                            $('#search_ajax').html(data);
                        }
                    });
                    else {
                        $('#search_ajax').fadeOut();
                    }
                }
                $(document).on('click', 'li.timkiem_ajax', function() {
                    $('keywords').val($(this).text());
                    $('#search_ajax').fadeOut();
                })
            })
        </script>
    </body>
</html>

    
