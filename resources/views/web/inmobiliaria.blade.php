@extends('layouts.template')
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
		<img src="{{asset('img/inmobiliaria/01.jpg')}}" alt="" class="img-responsive">
	</div>
	<div class="container inmobiliaria">
        <div class="col-lg-12 title text-center title">
        	<h1>SOMOS</h1>
            <h2>INMOBILIARIA SANTO DOMINGO CARTAGENA</h2>
        </div>
        <div class="col-lg-10 block-center">
        	<div class="row">
        		<div class="col-lg-6">
        			<p>
                        Una joven y activa compañía cartagenera de carácter privado legalmente constituida, nutrida de ideas y conceptos innovadores, conformada por profesionales con más de 20 años de experiencia y amplio conocimiento del mercado inmobiliario, orientada a satisfacer con calidad y transparencia las necesidades y expectativas de un público exigente a través de la  prestación de servicios inmobiliarios y administración de bienes: venta, arriendo, avalúos, hipotecas y proyectos inmobiliarios,  que busca ofrecerle el mejor servicios empresarial y las mejores opciones de inversión en bienes raíces para el mejoramiento de su calidad de vida.        
                    </p>
        		</div>
        		<div class="col-lg-6">
        			<p>
                        Trabajamos con un equipo de humano con gran talento, capacidad y profesionalismo  con una amplia experiencia que se destaca por su excelencia y calidad de servicio en la solución de las necesidades inmobiliarias de todos nuestros clientes, ofreciéndoles seguridad, bienestar y confianza a la hora de invertir en Finca Raíz, actuales y a futuro.        
                    </p>
                    <p>
                        Nos caracterizamos por prestar un servicio integral de alta calidad basado en la eficiencia, responsabilidad, honestidad y transparencia, nuestros pilares valores corporativos, cumpliendo con todos los requisitos establecidos por la ley.
                    </p>
        		</div>
        	</div>
        </div>
        <div class="col-lg-10 block-center">
        	<div class="row">
        		<div class="col-lg-6">
        			<h2 class="text-center">MISIÓN</h2>
        			<p>
        				Trabajamos con un equipo de humano con gran talento, capacidad y profesionalismo  con una amplia experiencia que se destaca por su excelencia y calidad de servicio en la solución de las necesidades inmobiliarias de todos nuestros clientes, ofreciéndoles seguridad, bienestar y confianza a la hora de invertir en Finca Raíz, actuales y a futuro.
        			</p>
                    <p>
                        Nos caracterizamos por prestar un servicio integral de alta calidad basado en la eficiencia, responsabilidad, honestidad y transparencia, nuestros pilares valores corporativos, cumpliendo con todos los requisitos establecidos por la ley.
                    </p>
        		</div>
        		<div class="col-lg-6">
        			<h2 class="text-center">VISIÓN</h2>
        			<p>
        				Para el 2020, posicionarnos como líder de excelencia y competitividad en asesoría en todos los aspectos que se relacionan con la adecuada concreción de las operaciones comerciales y legales entre las compañías que presten servicios en el sector inmobiliario; ser la mejor opción inmobiliaria de nuestros clientes, ofreciendo un servicio de asesoría inmobiliaria integral y profesional, dando total satisfacción a todas sus necesidades, superando sus expectativas, siendo reconocidos por nuestro profesionalismo, confianza y cumplimiento.
        			</p>
        		</div>
        	</div>
        </div>
	</div>
	<div class="img-inmobiliaria" id="top">
		<img src="{{asset('img/inmobiliaria/02.jpg')}}" alt="" class="img-responsive">
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
    @include('include.contacto')
	<!--Pie de pagina-->
	@include('include.footer')
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
@endsection