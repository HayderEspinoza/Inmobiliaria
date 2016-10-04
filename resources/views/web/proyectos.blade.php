@extends('layouts.template')
@section('estilos')
	<style>
		body{
			background: #191a1c;
		}
	</style>
@endsection
@section('contenido')
    @include('include.menu')
    @include('include.toggle')
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
                <div class="fill img-1" style="background-image:url('/img/proyecto/01.jpg')">
                    <div class="container">
                        <div class="row wrap-proyectos">
                            <div class="col-md-4 link-proyectos block-center">
                                <div class="caption-proyectos">
                                    <h4 class="text-center">CONOCE NUESTRO PROYECTO</h4>
                                </div>
                                <h2 class="text-center">VILLA ESCALLON</h2>
                                <div class="col-sm-12 text-center">
                                    <a href="{{ route('web.proyectos') }}" class="btn">MÁS CERCA DE TODO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/proyecto/02.jpg');">
                    <div class="container">
                        <div class="row wrap-proyectos">
                            <div class="col-md-4 link-proyectos block-center">
                                <div class="caption-proyectos">
                                    <h4 class="text-center">CONOCE NUESTRO PROYECTO</h4>
                                </div>
                                <h2 class="text-center">VILLA ESCALLON</h2>
                                <div class="col-sm-12 text-center">
                                    <a href="{{ route('web.proyectos') }}" class="btn">MÁS CERCA DE TODO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/proyecto/03.jpg');">
                    <div class="container">
                        <div class="row wrap-proyectos">
                            <div class="col-md-4 link-proyectos block-center">
                                <div class="caption-proyectos">
                                    <h4 class="text-center">CONOCE NUESTRO PROYECTO</h4>
                                </div>
                                <h2 class="text-center">VILLA ESCALLON</h2>
                                <div class="col-sm-12 text-center">
                                    <a href="{{ route('web.proyectos') }}" class="btn">MÁS CERCA DE TODO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/proyecto/04.jpg');">
                    <div class="container">
                        <div class="row wrap-proyectos">
                            <div class="col-md-4 link-proyectos block-center">
                                <div class="caption-proyectos">
                                    <h4 class="text-center">CONOCE NUESTRO PROYECTO</h4>
                                </div>
                                <h2 class="text-center">VILLA ESCALLON</h2>
                                <div class="col-sm-12 text-center">
                                    <a href="{{ route('web.proyectos') }}" class="btn">MÁS CERCA DE TODO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- scroll down --}}
        <div class="scroll-down text-center">
            <a href="#descripcion-proyecto" class="btn-scroll scroll">
                <span class="icon-arrow-down arrow-scroll"></span>
                
                <p class="scroll-text">
                    SCROLL DOWN
                </p>
            </a>
        </div>
    </header>
    <div class="descripcion-proyecto" id="descripcion-proyecto">
    	<div class="container">
    		<div class="title-descripcion">
    			<h3 class="text-center">
    				DESCRIPCIÓN DEL PROYECTO
    			</h3>
    		</div>
    		<div class="col-md-10 block-center">
    			<p class="text-center">
    				Moderno edificio de 26 Apartamentos de 2 y 3 alcobas, ubicados en el corazón de Cartagena VILLA ESCALLON, uno de los barrios más tradicionales de la ciudad de mucho desarrollo y valorización.
    			</p>
    		</div>
    	</div>
    </div>
    <div class="show-proyecto col-xs-12">
		<div class="row">
			<div class="col-md-7 pull-left">
	    		<img src="{{ asset('img/proyecto/05.jpg') }}" alt="" class="img-responsive">
	    	</div>
	    	<div class="col-md-5 pull-right items-proyecto">
	    		<br><br><br>
	    		<h2>AMENITIES</h2>
				<ul class="none">
					<li>7 Niveles</li>
					<li>1 Semisotano - Parqueadero</li>
					<li>1 Piso de lobby y Parqueadero</li>
					<li>1 Piso de zona social</li>
					<li>4 Pisos de apartamentos</li>
					<li>6 Aptos por piso</li>
					<li>Sistema de construcción tradicioanl</li>
					<li>Lobby de acceso</li>
					<li>Salón de eventos</li>
					<li>Planta electrica para zonas comunes</li>
					<li>Ascensor</li>
					<li>Shut de basura</li>
					<li>Parqueaderos cubiertos</li>
				</ul>
				<h2>MÁS CERCA DE TODO</h2>
				<ul class="none">
					<li>Centros Comerciales</li>
					<li>Zonas Bancarias</li>
					<li>Instituciones Educativas</li>
					<li>Centros Medicos</li>
					<li>Unidad Deportiva</li>
					<li>Iglesias</li>
					<li>Terminal de transcaribe</li>
				</ul>
	    	</div>
		</div>
    </div>
    <div class='clearfix'></div>
    <div class="plantas">
    	<div class="container">
    		<h2 class="titulo-plantas text-center">TIPOS DE PLANTAS</h2>
    		<div class="row">
    			<div class="col-md-7 foto">
    				<img class="img-responsive pull-left" src="{{ asset('img/proyecto/plano01.jpg') }}" alt="">
    				<div class="show-plano text-center">
    					<a href="{{ asset('img/proyecto/plano01.jpg') }}" class="btn image-link">
    						PLANO TIPO 1
    					</a>
    				</div>
    			</div>
    			<div class="col-md-5 foto">
    				<img class="img-responsive pull-left" src="{{ asset('img/proyecto/plano02.jpg') }}" alt="">
    				<div class="show-plano text-center">
    					<a href="{{ asset('img/proyecto/plano02.jpg') }}" class="btn image-link ">
    						PLANO TIPO 2
    					</a>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-4 foto">
    				<img class="img-responsive pull-left" src="{{ asset('img/proyecto/plano03.jpg') }}" alt="">
    				<div class="show-plano text-center">
    					<a href="{{ asset('img/proyecto/plano03.jpg') }}" class="btn image-link">
    						PLANO TIPO 3
    					</a>
    				</div>
    			</div>
    			<div class="col-md-5 foto">
    				<img class="img-responsive pull-left" src="{{ asset('img/proyecto/plano04.jpg') }}" alt="">
    				<div class="show-plano text-center">
    					<a href="{{ asset('img/proyecto/plano04.jpg') }}" class="btn image-link">
    						PLANO TIPO 4
    					</a>
    				</div>
    			</div>
    			<div class="col-md-3 foto">
    				<img class="img-responsive pull-left" src="{{ asset('img/proyecto/plano05.jpg') }}" alt="">
    				<div class="show-plano text-center">
    					<a href="{{ asset('img/proyecto/plano05.jpg') }}" class="btn image-link">
    						PLANO TIPO 5
    					</a>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-8 foto">
    				<img class="img-responsive pull-left" src="{{ asset('img/proyecto/plano06.jpg') }}" alt="">
    				<div class="show-plano text-center">
    					<a href="{{ asset('img/proyecto/plano06.jpg') }}" class="btn image-link">
    						PLANO TIPO 6
    					</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- Contacto -->
    @include('include.contacto')
	<!--Pie de pagina-->
	@include('include.footer')
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
@endsection