@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <nav arial-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Accueil</a>
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
                            <label for="color-red" class="form-check-input"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <input type="checkbox" id="color-vert" name="color[]" value="vert" class="form-check-input">
                            <label for="color-vert" class="form-check-input"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <button class="btn btn-primary w100">Filtrer</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
@endsection