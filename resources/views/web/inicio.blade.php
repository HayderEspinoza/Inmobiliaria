@extends('layout.template')
@section('contenido')
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/portada/01.png')"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/portada/02.png');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/portada/03.png');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/portada/04.png');"></div>
                <div class="carousel-caption">
                    <h2>Caption 4</h2>
                </div>
            </div>
        </div>
        {{-- busqueda --}}
        <a href="#" class="busqueda-portada">
            <span class="icon-search icono-search"></span>
            BUSCAR APARTAMENTO
            <span class="formulario-portada">
                
            </span>
        </a>
        {{-- scroll down --}}
        <div class="scroll-down text-center">
            <a href="#" class="btn-scroll">
                <span class="icon-arrow-down arrow-scroll"></span>
                
                <p class="scroll-text">
                    SCROLL DOWN
                </p>
            </a>
        </div>
    </header>
    <div class="container">
        <div class="col-lg-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores pariatur accusantium quod facere, temporibus totam placeat perspiciatis, quisquam aut eaque? Sit dolores commodi doloremque, aliquid et hic. Voluptatibus, perferendis dolore.</p>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('.carousel').carousel({
            interval: 7000 //changes the speed
        })
    </script>
@endsection