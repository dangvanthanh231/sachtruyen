
<h3>Truyện đề cử</h3>
<<<<<<< HEAD
        <div class="your-slider ">
        
        @foreach($truyen->shuffle()->take(8) as $key => $value)
=======
        <div class="your-slider">
        
        @foreach($truyen->shuffle()->take(3) as $key => $value)
>>>>>>> 37a87dfd24801752c71b9eba066df05f668c49d0
            <div class="col-md-3 d-flex">
            <div class="card shadow-sm">
                <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" style="width: auto; height: 250px">
                <div class="card-body" style="width: 200px;">
                    <h4>{{$value->tentruyen}}</h4>
                <p class="card-text">{{ $value->limit_desc }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                    <a class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-eye"> {{$value->chapter->sum("view")}}</i></a>
                    </div>
                    
                </div>
                </div>
            </div>
            </div>
            @endforeach
            
       
        </div>
<<<<<<< HEAD
        {{-- Phần hiển thị truyện mới cập nhật --}}
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Truyện mới cập nhật</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($truyen->shuffle()->take(4) as $key => $value)
                <div class="col-md-3 d-flex">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" style="width: auto; height: 400px">
                        <div class="card-body" style="width: 300px;">
                            <h4>{{$value->tentruyen}}</h4>
                            <p class="card-text">{{ $value->limit_desc }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                    <a class="btn btn-sm btn-outline-secondary">
                                        <i class="fa-solid fa-eye"> {{$value->chapter->sum("view")}}</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> 
        </div>
    </div>
=======
>>>>>>> 37a87dfd24801752c71b9eba066df05f668c49d0

        