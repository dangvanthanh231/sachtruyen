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
 <style>
        .card-img-top {
            width: 100%;        /* Đảm bảo ảnh chiếm hết chiều rộng của card */
            height: 300px;      /* Giới hạn chiều cao của ảnh */
            object-fit: cover;  /* Đảm bảo ảnh không bị biến dạng */
        }
        .card {
            height: 500px;      /* Giới hạn chiều cao của toàn bộ card */
            width: 300px;     
        }
        
    </style>
        
    </head>
    <body class="antialiased">
        <div class="container">
        <!-- Menu -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Chapter
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="">Thêm chapter</a>
                                        <a class="dropdown-item" href="">Liệt kê chapter</a>
                                    </div>
                                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
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
            </div>
            </nav>
        <!-- Slide -->
        <!-- <div class="owl-carousel owl-theme mt-5">
            <div class="item"><img src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}"></div>
            <div class="item"><img src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}"></div>
            <div class="item"><img src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}"></div>
            <div class="item"><img src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}"></div>
            <div class="item"><img src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}"></div>
           
        </div> -->
        <h3>Truyện đề cử</h3>
        <div class="your-slider">
        
            <div><img src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}">
                <h4>Nhất niệm vĩnh hằng</h4>
                <p><i class="fa-solid fa-eye"></i>1234</i></p>
            </div>
            <div><img src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}">
                <h4>Nhất niệm vĩnh hằng</h4>
                <p><i class="fa-solid fa-eye"></i>1234</i></p>
            </div>
            <div><img src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}">
                <h4>Nhất niệm vĩnh hằng</h4>
                <p><i class="fa-solid fa-eye"></i>1234</i></p>
            </div>
            <div><img src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}">
                <h4>Nhất niệm vĩnh hằng</h4>
                <p><i class="fa-solid fa-eye"></i>1234</i></p>
            </div>
            <div><img src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}">
                <h4>Nhất niệm vĩnh hằng</h4>
                <p><i class="fa-solid fa-eye"></i>1234</i></p>
            </div>
            <div><img src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}">
                <h4>Nhất niệm vĩnh hằng</h4>
                <p><i class="fa-solid fa-eye"></i>1234</i></p>
            </div>
       
        </div>

         <!-- Truyen moi -->
        <h3>Truyện mới</h3>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                            <h4>This is a wider card with supporting </h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                            <h4>This is a wider card with supporting </h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{ asset('public/uploads/truyen/nhat-niem-vinh-hang62.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                            <h4>This is a wider card with supporting </h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

    </body>
</html>

    
