@extends('layouts.base')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Produits</h1>
        <p class="lead text-muted mb-0">blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla </p>
    </div>


</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav arial-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> Produits</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase">
                    <i class="fa fa-list"></i>
                    Filtres
                </div>
                <form action="" method="post">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-check">
                                <input type="checkbox" id="color-red" name="color[]" value="bleu" class="form-check-input">
                                <label for="color-bleu" class="form-check-label">Bleu</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input type="checkbox" id="color-red" name="color[]" value="rouge" class="form-check-input">
                                <label for="color-red" class="form-check-label">Rouge</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input type="checkbox" id="color-vert" name="color[]" value="vert" class="form-check-input">
                            <label for="color-vert" class="form-check-label">Vert</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <button class="btn btn-primary w100">Filtrer</button>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase">
                    <i class="fa fa-list"></i>
                    Catégories
                </div>
                <ul class="list-group category_block">
                    @foreach ($categories as $categorie)
                        
                    <li class="list-group-item"><a href="/categories/{{$categorie->id}}">{{$categorie->nom}}</a></li>
                    @endforeach
                    
                </ul>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase">
                    Dernier Produit
                </div>
                <div class="card-body">
                   
                    <img src="{{$latest->image}}" class="img-fluid">
                    
                    <h5 class="card-title mt-3">{{$latest->nom}}</h5>
                    <p class="card-text">{{$latest->description}}</p>
                    <div class="row">
                        <div class="col">
                            <p class="btn btn-danger w-100">{{$latest->prix}}</p>
                        </div>
                        <div class="col">
                            <a href="products.show" class="btn btn-success w-100">Voir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                @foreach ($category->products as $product)
                <div class="col-12 col-md-6 col-lg-4 md-4">
                    <div class="card">
                            
                        
                        <img src="{{$product->image}}" alt="Card image cap" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="product.html" title="View Product">{{$product->nom}}</a>
                            </h4>
                            <p class="card-text">{{$product->description}}</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger w-100">{{$product->prix}}</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success w-100">Ajouter</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                @endforeach
                
                {{$products->links()}}
            </div>
        </div>
    </div>
</div>
@endsection