@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm truyện</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action = "{{route('truyen.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Tên truyện</label>
                            <input type="text" class="form-control" value="{{old('tentruyen')}}" id="slug" onkeyup="ChangeToSlug();" name="tentruyen" aria-describedby="emailHelp" placeholder="Tên truyện ...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Slug truyện</label>
                            <input type="text" class="form-control" value="{{old('slug_truyen')}}" id="convert_slug" name="slug_truyen" aria-describedby="emailHelp" placeholder="Slug truyện ...">
                        </div>
                        <label for="exampleInputEmail1" class="form-label">Tác giả</label>
                            <input type="text" class="form-control" value="{{old('tacgia')}}" name="tacgia" id="slug"
                            aria-describedby="emailHelp" placeholder="Tác giả..."> <br>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Tóm tắt truyện</label>
                            <textarea name="tomtat" class="form-control" rows="5" style="resize:none" ></textarea>
                        </div>
                        <div class="form-group mb-3" >
                        <label for="exampleInputEmail1">Danh mục truyện</label>
                            <select name="danhmuc" class="custom-select w-100" aria-label="Default select example">
                                @foreach($danhmuc as $key=>$muc)
                                <option value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Hình ảnh truyện</label><br>
                            <input type="file" class="form-control-file"   name="hinhanh" >
                        </div>
                        <div class="form-group mb-3" >
                            <select name="kichhoat" class="custom-select w-100" aria-label="Default select example">
                                <option value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            </select>
                        </div>

                        <button type="submit" name="themtruyen" class="btn btn-primary">Thêm</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
