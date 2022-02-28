@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="carousel slide" id="carouselExempleIndicators" data-bs-ride='carousel'>
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExempleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExempleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExempleIndicators" data-bs-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://dummyimage.com/855x365/55595c/fff" class="w-100 d-block" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dummyimage.com/855x365/a30ca3/fff" class="w-100 d-block" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dummyimage.com/855x365/1443ff/fff" class="w-100 d-block" alt="Third slide">
                    </div>
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
                <img src="https://dummyimage.com/600x400/55595c/fff" alt="Card image capS" class="img-fluid border-0">
                <div class="card-body">
                    <h4 class="card-title text-center">
                        <a href="product.html" title="View Product"> Produit</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit, amet.</p>  
                    <div class="row">
                        <div class="col">
                            <p class="btn btn-danger w-100">99,00 €</p>
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

@endsection