<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fas fa-home"></i> Home <span class="sr-only">(current)</span>
                    </a>
                </li>
                
                @role('admin')
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-th-list"></i> Quản lý user
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('user.create') }}">Thêm user</a>
                        <a class="dropdown-item" href="{{ route('user.index') }}">Liệt kê user</a>
                    </div>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-th-list"></i> Quản lý danh mục
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('danhmuc.create') }}">Thêm danh mục</a>
                        <a class="dropdown-item" href="{{ route('danhmuc.index') }}">Liệt kê danh mục</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-book"></i>Quản lý sách truyện
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('truyen.create') }}">Thêm sách truyện</a>
                        <a class="dropdown-item" href="{{ route('truyen.index') }}">Liệt kê sách truyện</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-book-open"></i> Quản lý chapter
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('chapter.create') }}">Thêm chapter</a>
                        <a class="dropdown-item" href="{{ route('chapter.index') }}">Liệt kê chapter</a>
                    </div>
                </li>
                @endrole
            </ul>
        </div>
    </nav>
</div>
