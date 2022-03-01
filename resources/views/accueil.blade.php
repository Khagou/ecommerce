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
                        <div class="col-sm">
                            <div class="card">
                                <img src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap" class="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="product.html" title="VIew Product">Produit</a>
                                        </h4>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur. 
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="btn btn-danger w-100">99,00 €</p>
                                            </div>
                                            <div class="col">
                                                <a href="cart.htm" class="btn btn-success w-100">Ajouter</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
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
                    <i class="fa fa-trophy"></i>
                    MEILLEURS PRODUITS
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <img src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap" class="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="product.html" title="VIew Product">Produit</a>
                                        </h4>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur. 
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="btn btn-danger w-100">99,00 €</p>
                                            </div>
                                            <div class="col">
                                                <a href="cart.htm" class="btn btn-success w-100">Ajouter</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Footer --}}

<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>A propos</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Informations</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="http://">Link 1</a></li>
                    <li><a href="http://">Link 2</a></li>
                    <li><a href="http://">Link 3</a></li>
                    <li><a href="http://">Link 4</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Others links</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="http://">Link 1</a></li>
                    <li><a href="http://">Link 2</a></li>
                    <li><a href="http://">Link 3</a></li>
                    <li><a href="http://">Link 4</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home ms-2"></i> My compagny</li>
                    <li><i class="fa fa-envelope ms-2"></i> email@exemple.com</li>
                    <li><i class="fa fa-phone ms-2"></i> + 33 12 14 15 16</li>
                    <li><i class="fa fa-print ms-2"></i > + 33 12 15 14 16</li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a href="#">Back to top</a>
                </p>
            </div>
        </div>
    </div>
</footer>
@endsection