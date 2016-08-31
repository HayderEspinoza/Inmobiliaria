@extends('layout.template')
@section('estilos')
	<style>
		body{
			background: #191a1c;
		}
        .logo-apartamentos{
            padding: 50px 0 100px 0;
        }
        .inmobiliaria title{
        	font-size: 30px;
        }
	</style>
@endsection
@section('contenido')
    @include('include.menu')
    @include('include.toggle')
	<div class="img-inmobiliaria" id="top">
		<img src="{{asset('img/inmobiliaria/01.png')}}" alt="" class="img-responsive">
	</div>
	<div class="container inmobiliaria">
        <div class="col-lg-12 title text-center">
        	<span>SOMOS</span>
        </div>
        <div class="col-lg-12">
        	<h2>INMOBILIARIA SANTO DOMINGO CARTAGENA</h2>
        </div>
        <div class="col-lg-12">
        	<div class="row">
        		<div class="col-lg-6">
        			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia quibusdam, odio consectetur! Delectus iste voluptatem quod error tempore tempora, neque quisquam aut reprehenderit debitis accusantium sed tenetur culpa officiis ipsa.
        		</div>
        		<div class="col-lg-6">
        			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ratione rerum labore dolorem consectetur sunt minima voluptate, dolore architecto, aperiam accusamus quasi eius. Labore saepe consectetur ipsum, exercitationem velit. Dignissimos.
        		</div>
        	</div>
        </div>
        <div class="col-lg-12">
        	<div class="row">
        		<div class="col-lg-6">
        			<h2>MISIÓN</h2>
        			<p>
        				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et nobis, eaque obcaecati id, aliquam in rem dolor vitae aspernatur dolore quod neque numquam unde eius architecto laboriosam veniam excepturi animi.
        			</p>
        		</div>
        		<div class="col-lg-6">
        			<h2>MISIÓN</h2>
        			<p>
        				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem laboriosam repellendus incidunt praesentium maiores repellat tenetur libero dignissimos voluptate maxime, itaque ullam nihil eligendi eveniet molestias. Culpa, voluptatibus vel laboriosam.
        			</p>
        		</div>
        	</div>
        </div>
	</div>
	<div class="img-inmobiliaria" id="top">
		<img src="{{asset('img/inmobiliaria/01.png')}}" alt="" class="img-responsive">
	</div>
	<div class="container">
		<h2>
			TRABAJAR CON NOSOTROS <br>
			LE TRAE BENEFICIOS
		</h2>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-4">
					<img src="" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae non, voluptatibus at animi ad illum architecto culpa eligendi magni adipisci ex beatae error ipsam labore consequuntur voluptatem facere similique distinctio.</p>
				</div>
			</div>
		</div>
	</div>
	<!--Pie de pagina-->
	@include('include.footer')
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
@endsection