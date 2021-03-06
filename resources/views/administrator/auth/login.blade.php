@extends('layouts.applogin')

@section('content')
<body class="bg-gradient-primary">
<div class="container">  
    <div class="row my-5 justify-content-center">
        <div class="col-xl-5 col-lg-12 col-md-9 my-4">
        <div class="card card-body shadow-lg my-5">
            <div class="card-body">
                <form class="user" action="{{route('administrator.login')}}" method="POST" >
                    @csrf 
                    <div class="text-center">
                        <a href="/">
                            <img class="img img-fluid mb-3 mt-2" style="max-width:240px"src="{{asset('img/applogo.png')}}" alt="logo">
                        </a>      
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        @error('username')
                            <div class="alert-danger p-1 mt-1">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div> 
                        <button type="submit" class="btn btn-primary btn-block">Login</button>  
                </form>
            </div>
        </div>
        </div>
    </div> 
</body>
@endsection