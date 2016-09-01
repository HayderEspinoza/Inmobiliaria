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
        <div class="col-lg-12 title text-center title">
        	<h1>SOMOS</h1>
            <h2>INMOBILIARIA SANTO DOMINGO CARTAGENA</h2>
        </div>
        <div class="col-lg-12">
        	<div class="row">
        		<div class="col-lg-6">
        			<p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo omnis quaerat dolor nihil cumque, cum consequuntur, voluptate eaque ad laboriosam quae inventore praesentium ea nulla possimus qui quibusdam quas distinctio!         
                    </p>
        		</div>
        		<div class="col-lg-6">
        			<p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia debitis, adipisci, inventore excepturi repudiandae non natus blanditiis itaque asperiores pariatur, vero ex distinctio aperiam molestias cumque ipsum, sapiente nihil at.         
                    </p>
        		</div>
        	</div>
        </div>
        <div class="col-lg-12">
        	<div class="row">
        		<div class="col-lg-6">
        			<h2 class="text-center">MISIÓN</h2>
        			<p>
        				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et nobis, eaque obcaecati id, aliquam in rem dolor vitae aspernatur dolore quod neque numquam unde eius architecto laboriosam veniam excepturi animi.
        			</p>
        		</div>
        		<div class="col-lg-6">
        			<h2 class="text-center">VISIÓN</h2>
        			<p>
        				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem laboriosam repellendus incidunt praesentium maiores repellat tenetur libero dignissimos voluptate maxime, itaque ullam nihil eligendi eveniet molestias. Culpa, voluptatibus vel laboriosam.
        			</p>
        		</div>
        	</div>
        </div>
	</div>
	<div class="img-inmobiliaria" id="top">
		<img src="{{asset('img/inmobiliaria/02.png')}}" alt="" class="img-responsive">
	</div>
	<div class="container beneficios">
		<h2 class="text-center">
            TRABAJAR CON NOSOTROS <br>
            LE TRAE BENEFICIOS
        </h2>
		<div class="col-lg-10 block-center">
			<div class="row">
				<div class="col-lg-4 item-beneficios">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('/img/inmobiliaria/marketing.png') }}" alt="" class="">
                        <h3>MARKETING</h3>
                    </div>

					<div class="col-lg-12">
                        <p>
                            Creamos estrategias y pautamos en medios digitales, para que su propiedad sea visible y tenga mayores resultados.
                        </p>
                    </div>
				</div>

                <div class="col-lg-4 item-beneficios">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('/img/inmobiliaria/seguridad.png') }}" alt="" class="">
                        <h3>SEGURIDAD</h3>
                    </div>

                    <div class="col-lg-12">
                        <p>
                            Vendemos y arrendamos inmuebles confiables y seguros procurado siempre el mejor precio.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 item-beneficios">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('/img/inmobiliaria/tecnologia.png') }}" alt="" class="">
                        <h3>TECNOLOGIA</h3>
                    </div>

                    <div class="col-lg-12">
                        <p>
                            Disponemos de web site y herramientas tecnológicas para el uso eficiente de la información.
                        </p>
                    </div>
                </div>
			</div>
            <div class="row">
                <div class="col-lg-4 item-beneficios">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('/img/inmobiliaria/seguridad.png') }}" alt="" class="">
                        <h3>POLIZA DE SEGURO</h3>
                    </div>

                    <div class="col-lg-12">
                        <p>
                            Contamos con póliza integral para servicios públicos y posibles daños que se presenten en los inmuebles administrados, respaldados por EL LIBERTADOR, empresa de Seguros Comerciales Bolívar.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 item-beneficios">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('/img/inmobiliaria/garantia.png') }}" alt="" class="">
                        <h3>GARANTIA</h3>
                    </div>

                    <div class="col-lg-12">
                        <p>
                            Garantizamos al propietario la seguridad de la renta y la conservacion del inmueble, puesto que trabajamos con Aseguradoras y Afianzadoras ampliamente reconocidas en el sectos inmobiliario.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 item-beneficios">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('/img/inmobiliaria/reparaciones.png') }}" alt="" class="">
                        <h3>REPARACIONES</h3>
                    </div>

                    <div class="col-lg-12">
                        <p>
                            Garantizamos y manejamos las remodelaciones o reparaciones de los inmuebles con personal idóneo, altamente calificado y especializado.
                        </p>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!--Pie de pagina-->
	@include('include.footer')
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
@endsection