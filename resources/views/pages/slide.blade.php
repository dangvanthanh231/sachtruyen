
<h3>Truyện đề cử</h3>
        <div class="your-slider">
        
        @foreach($truyen->shuffle()->take(3) as $key => $value)
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

        