<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">Admin <span class="sr-only">(current)</span></a>
                                </li>
                        <!--        <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>  -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Quản lý danh mục
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('danhmuc.create')}}">Thêm danh mục</a>
                                        <a class="dropdown-item" href="{{route('danhmuc.index')}}">Liệt kê danh mục</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sách truyện
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('truyen.create')}}">Thêm sách truyện</a>
                                        <a class="dropdown-item" href="{{route('truyen.index')}}">Liệt kê sách truyện</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Chapter
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('chapter.create')}}">Thêm chapter</a>
                                        <a class="dropdown-item" href="{{route('chapter.index')}}">Liệt kê chapter</a>
                                    </div>
                                </li>
                            </ul>
                            <form class="d-flex ms-auto my-2 my-lg-0">
                                <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                                <button class="btn btn-outline-success btn-sm" type="submit">Tìm kiếm</button>
                            </form>

                        </div>
                    </nav>
    
</div>