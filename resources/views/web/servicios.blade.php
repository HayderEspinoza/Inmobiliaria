@extends('layout.template')
@section('estilos')
	<style>
		body{
			background: #191a1c;
		}
        .logo-apartamentos{
            padding: 50px 0 100px 0;
        }
	</style>
@endsection
@section('contenido')
    @include('include.menu')
    @include('include.toggle')
	<div class="img-inmobiliaria" id="top">
		<img src="{{asset('img/servicios/01.png')}}" alt="" class="img-responsive">
	</div>
	<div class="container servicios" id="top">
        <h1 class="text-center">NUESTROS SERVICIOS</h1>
        <div class="col-lg-8 block-center">
        	<p class="text-center">
	        	Contamos con un amplio portafolio y equipo de profesionales altamente capacitados que lo podrán asesorar en la compra y venta de inmuebles.
	        </p>
        </div>
        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-pills col-lg-12" role="tablist" style="background:red;">
                <li role="presentation" class="active text-center"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio delectus ipsam modi ipsum ea reprehenderit accusamus quo! Praesentium molestias, odit, nulla, cum, recusandae magnam quae molestiae qui magni omnis voluptas.
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ex dicta tenetur quaerat, doloribus, aspernatur? Quod est aut possimus minus illum, officia fugit accusamus. Recusandae tempore deserunt saepe, omnis cum!
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At repellat enim eius dolore, non minima quidem alias quam vero aut, sapiente nostrum possimus totam asperiores facilis quasi voluptatibus minus et.
                </div>
            </div>
        </div>
	</div>
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
	<!--Pie de pagina-->
	@include('include.footer')
@endsection