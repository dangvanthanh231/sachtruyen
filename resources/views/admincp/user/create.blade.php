@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm User</div>
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
                    <form method="POST" action = "{{route('user.store')}}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Tên User</label>
                            <input type="text" class="form-control" value="{{old('name')}}"  name="name" aria-describedby="emailHelp" placeholder="Tên người dùng ...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" value="{{old('email')}}"  name="email" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" class="form-control" value="{{old('password')}}"  name="password" aria-describedby="emailHelp" placeholder="">
                        </div>
                        

                        <button type="submit" name="themuser" class="btn btn-primary">Thêm User</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
