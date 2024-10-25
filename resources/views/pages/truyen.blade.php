@extends('../layout')
@section('content')
    <nav aria-label="breadcrumb ">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$truyen->tentruyen}}</li>
    </ol>
    </nav>
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" style="width: 100%; height: auto;">
                </div>

                <div class="col-md-9">
                <!-- Chuyển các input ẩn vào đây -->
                <input type="hidden" value="{{$truyen->tentruyen}}" class="wishlist_title"> 
                <input type="hidden" value="{{\URL::current()}}" class="wishlist_url"> 
                <input type="hidden" value="{{$truyen->id}}" class="wishlist_id">
                    <ul class="infotruyen" style="list-style: none;"> <br>
                        <li>Tên truyện: {{$truyen->tentruyen}}</li>
                        <li>Ngày đăng: {{$truyen->created_at->diffForHumans()}}</li>
                        <li>Tác giả: <strong>{{$truyen->tacgia}}</strong></li>
                        <li>Thể loại truyện: <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
                        <li>Số chapter: {{$truyen->chapter->count()}}</li>
                        <li>Số lượt xem: {{$truyen->chapter->sum("view")}}</li> <br>
                        @if($chapter_dau)
                        <li><a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-primary">Đọc Online</a></li> 
                        <li><button class="btn btn-danger btn-thich_truyen"><i class="fa fa-heart" aria-hidden="true"></i>Thích truyện</button></li>
                        <li><a href="{{url('xem-chapter/'.$chapter_moi->slug_chapter)}}" class="btn btn-success mt-2">Đọc chapter mới nhất</a></li>
                        @else
                        <li><button class="btn btn-danger">Hiện tại chưa có chương để đọc</button></li>
                        @endif
                    </ul>
                </div>
            </div> <br>

            <div class="col-md-12">
                <p>{{$truyen->tomtat}}</p>
            </div>
            <hr>
            <h4>Mục lục</h4>
            <ul class="mucluctruyen">
                @php 
                    $mucluc = count($chapter);
                @endphp
                @if($mucluc>0)
                    @foreach($chapter as $key => $chap)
                    <li><a href="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</a> - <i class="fa-solid fa-eye"></i> {{$chap->view}}</li>
                    @endforeach
                @else
                    <li>Đang cập nhật...</li>
                @endif
            </ul>

            <h4>Truyện cùng danh mục</h4>
            <div class="row">
                @foreach($cungdanhmuc as $key => $value)
                <div class="col-md-4 d-flex mb-3">
                    <div class="card shadow-sm" style="width: 100%;">
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" style="width: 100%; height: 300px;"> 
                        <div class="card-body">
                            <h5>{{$value->tentruyen}}</h5>
                            <p class="card-text">{{ Illuminate\Support\Str::words($value->tomtat, 20, '...') }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-eye">{{$value->chapter->sum("view")}}</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Cột phải -->
        <div class="col-md-3">
            <!-- Truyện yêu thích -->
            <h3>Truyện yêu thích</h3>
            <div class="row mt-2" id="yeuthich"></div> 

            <!-- Truyện được đề xuất -->
            <!-- <h3>Truyện được đề xuất</h3>
            <div class="row mt-2">
                @foreach($cungdanhmuc as $key => $value)
                <div class="col-md-12 mb-3">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" style="width: 100%; height: 300px;"> 
                        <div class="card-body">
                            <h5>{{$value->tentruyen}}</h5>
                            <p class="card-text">{{ Illuminate\Support\Str::words($value->tomtat, 20, '...') }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-eye">{{$value->chapter->sum("view")}}</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> -->
        </div>
    </div>
@endsection
