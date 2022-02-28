@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="carousel slide" id="carouselExempleIndicator" data-bs-ride='carousel'>
                <ol class="carousel-indicator">
                    <li data-bs-target="#carouselExempleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExempleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExempleIndicators" data-bs-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="https://dummyimage.com/855x365/55595c/fff" class="w-100 d-block" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dummyimage.com/855x365/a30ca3/fff" class="w-100 d-block" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dummyimage.com/855x365/1443ff/fff" class="w-100 d-block" alt="Third slide">
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>

@endsection