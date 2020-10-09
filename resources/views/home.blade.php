@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('section')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Welcome, Backpacker !</h1>
            <span class="subheading">never stop exploring the world</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
<div class="container">
    <div class="row col-md-12">
        <div class="card-group">
            @foreach($article as $a)
        <div class="card">
            <img class="card-img-top" src="img/about-bg.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{$a -> title}}</h5>
                <p class="card-text">{{$a -> excerpt}}</p>
                <a href="/article/{{$a->id}}">Readmore</a>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated {{$a -> created_at}}</small>
            </div>
        </div>
        @endforeach
    </div>
</div>

 @endsection
