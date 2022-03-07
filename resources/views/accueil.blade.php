@extends('layouts.base')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Ecommerce</h1>
        <p class="lead text-muted mb-0">blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla </p>
    </div>

    
</section>
<div class="container ">
    <div class="row">
        <div class="col">
            <div class="carousel slide" id="carouselExempleIndicators" data-bs-ride='carousel'>
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExempleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExempleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExempleIndicators" data-bs-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    @foreach ($randomProducts as $Product)
                    
                        <div class="carousel-item  @if ($loop->first) active @endif">
                            <img src="{{ $Product->image}}" class="w-100 d-block" alt="First slide">
                        </div>
                    
                        {{-- <div class="carousel-item">
                            <img src="{{ $Product->image}}" class="w-100 d-block" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ $Product->image}}" class="w-100 d-block" alt="Third slide">
                        </div> --}}
                        @endforeach 
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

        <div class="col-12 col-md-3">
            <div class="card h-100">
                <div class="card-headeer bg-success text-white text-uppercase">
                    <i class="fa fa-heart"></i>
                    " Coup de coeur "
                </div>
                
                    <img src="{{ $randomFavoris->image }}" alt="Card image capS" class="img-fluid border-0">

                <div class="card-body">
                    <h4 class="card-title text-center">
                        <a href="product.html" title="View Product"> {{$randomFavoris->nom}}</a>
                    </h4>
                    <p class="card-text">{{$randomFavoris->description}}</p>  
                    <div class="row">
                        <div class="col">
                            <p class="btn btn-danger w-100">{{$randomFavoris->prix}} €</p>
                        </div>
                        <div class="col">
                            <a href="product.html" class="btn btn-success w-100">Voir</a>
                        </div>
                    </div>             
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-primary text-white text-uppercase">
                    <i class="fa fa-star"></i>
                    Dernier produits
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($lastProducts as $Products)
                        <div class="col-sm">
                            <div class="card">
                                <img src="{{ $Products->image}}" alt="Card image cap" class="card-img-top">
                                    <div class="card-body ">
                                        <h4 class="card-title">
                                            <a href="product.html" title="VIew Product">{{$Products->nom}}</a>
                                        </h4>
                                        <p class="card-text">
                                            {{$Products->description}}
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="btn btn-danger w-100">{{$Products->prix}}</p>
                                            </div>
                                            <div class="col">
                                                <a href="cart.htm" class="btn btn-success w-100">Ajouter</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="container mt-3">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-primary text-white text-uppercase">
                    <i class="fa fa-trophy"></i>
                    MEILLEURS PRODUITS
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($bestProducts as $best)
                        <div class="col-sm">
                            <div class="card">
                                
                                
                                <img src="{{$best->image}}" alt="Card image cap" class="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="product.html" title="View Product">{{$best->nom}}</a>
                                        </h4>
                                        <p class="card-text">
                                            {{$best->description}}
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="btn btn-danger w-100">{{ $best->prix}} €</p>
                                            </div>
                                            <div class="col">
                                                <a href="cart.htm" class="btn btn-success w-100">Ajouter</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        @endforeach
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Footer --}}


@endsection