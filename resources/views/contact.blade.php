@extends('layouts.base')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Contact</h1>
        <p class="lead text-muted mb-0">blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla </p>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/accueil">Accueil</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        Contact
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <i class="fa fa-enveloppe">Contactez-nous.</i>
                </div>
                <div class="card-body">
                    <form action="post">
                        <div class="mb-3">
                            <label for="name">Nom</label>
                            <input type="text" aria-describedby="emailHelp" id="name" placeholder="Votre nom" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="text" aria-describedby="emailHelp" id="email" placeholder="Votre email" class="form-control">
                            <small class="form-text text-muted" id="emailHelp">Nous ne partagerons pas votre email.</small>
                        </div>
                        <div class="mb-3">
                            <label for="message">Message</label>
                            <textarea id="message"  class="form-control" rows="6"></textarea>
                        </div>
                        <div class="mx-auto">
                            <button class="btn btn-primary text-right" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase">
                    <i class="fa fa-home"></i>
                    Adresse
                </div>
                <div class="card-body">
                    <p>3 rue des Champs Elysées</p>
                    <p>75008 PARIS</p>
                    <p>France</p>
                    <p>Email : email@exemple.com</p>
                    <p>Tel. +33 12 56 11 51 84</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection