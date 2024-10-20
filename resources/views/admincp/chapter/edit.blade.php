@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật chapter</div>
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
                    <form method="POST" action = "{{route('chapter.update',[$chapter->id])}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Tên chapter</label>
                            <input type="text" class="form-control" value="{{$chapter->tieude}}" id="slug" onkeyup="ChangeToSlug();" name="tieude" aria-describedby="emailHelp" placeholder=" ">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Slug chapter</label>
                            <input type="text" class="form-control" value="{{$chapter->slug_chapter}}" id="convert_slug" name="slug_chapter" aria-describedby="emailHelp" placeholder=" ">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Tóm tắt chapter</label>
                            <input type="text" class="form-control" value="{{$chapter->tomtat}}" id="exampleInputEmail1" name="tomtat" aria-describedby="emailHelp" placeholder=" ">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Nội dung</label>
                            <textarea name="noidung" class="form-control" rows="5" style="resize:none">{{$chapter->noidung}} </textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Thuộc truyện</label>
                            <select name="truyen_id" class="custom-select w-100" aria-label="Default select example">
                                @foreach($truyen as $key => $value)
                                <option {{$chapter->truyen_id == $value->id ? 'selected' : ''}} value="{{$value->id}}">{{$value->tentruyen}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3" >
                        <label for="exampleInputEmail1">Kích hoạt</label>
                            <select name="kichhoat" class="custom-select w-100" aria-label="Default select example">
                                @if($chapter->kichhoat==0)
                                    <option selected value="0">Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                    @else
                                    <option value="0">Kích hoạt</option>
                                    <option selected value="1">Không kích hoạt</option>
                                @endif
                            </select>
                        </div>

                        <button type="submit" name="themdanhmuc" class="btn btn-primary">Cập nhật</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
