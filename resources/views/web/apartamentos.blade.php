@extends('layouts.template')
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
	<div class="container" id="top">
        <div class="col-lg-12 logo logo-apartamentos">
            <span class="one">INMOBILIARIA</span><br>
            <span class="two">SANTO DOMINGO CARTAGENA</span>
        </div>
		<div class="col-lg-12 text-pagination">
			MOSTRANDO 1 DE 12 INMUEBLES
		</div>
		<div class="wrap-busqueda">
			<div class="col-lg-3 formulario">
				<div class="row">
					<div class="col-lg-12 text-center title-formulario">
						BUSQUEDA
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="Nombre">TIPO DE OFERTA</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">TIPO DE PROPIEDAD</label>
					<select name="" id="" class="form-control">
						<option value="">Uno</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">TIPO DE PROPIEDAD</label>
					<select name="" id="" class="form-control">
						<option value="">Uno</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">TIPO DE PROPIEDAD</label>
					<select name="" id="" class="form-control">
						<option value="">Uno</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">TIPO DE PROPIEDAD</label>
					<select name="" id="" class="form-control">
						<option value="">Uno</option>
					</select>
				</div>
				<div class="form-group">
                    <a href="" class="btn-danger text-center btn-lg btn-block buscar">
                        BUSCAR
                    </a>
                </div>
			</div>
			<div class="col-lg-9">	
                <!--Item-->
                <div class="col-lg-4">
                    <div class="apartamento">
                        <div class="img-apartamento img-responsive">
                            <img class="img-responsive" src="{{asset('img/apartamento.jpg')}}" alt="">
                        </div>
                        <div class="tipo-apartamento text-right">
                            ARRIENDO
                        </div>
                        <div class="descripcion">
                            <h3 class="text-center">APARTAMENTO</h3>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione earum velit, delectus libero? Alias odit, iure omnis eos illum blanditiis, sunt!
                            </p>
                            <p class="precio text-center">
                                <span>
                                    $ 1.300.000
                                </span>
                            </p>
                            <table width="100%">
                                <tr>
                                    <td>Area</td>
                                    <td>Habs</td>
                                    <td>Baños</td>
                                    <td>Parq</td>
                                </tr>
                                <tr>
                                    <td>115M2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--Item-->
                <div class="col-lg-4">
                    <div class="apartamento">
                        <div class="img-apartamento img-responsive">
                            <img class="img-responsive" src="{{asset('img/apartamento.jpg')}}" alt="">
                        </div>
                        <div class="tipo-apartamento text-right">
                            ARRIENDO
                        </div>
                        <div class="descripcion">
                            <h3 class="text-center">APARTAMENTO</h3>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione earum velit, delectus libero? Alias odit, iure omnis eos illum blanditiis, sunt!
                            </p>
                            <p class="precio text-center">
                                <span>
                                    $ 1.300.000
                                </span>
                            </p>
                            <table width="100%">
                                <tr>
                                    <td>Area</td>
                                    <td>Habs</td>
                                    <td>Baños</td>
                                    <td>Parq</td>
                                </tr>
                                <tr>
                                    <td>115M2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--Item-->
                <div class="col-lg-4">
                    <div class="apartamento">
                        <div class="img-apartamento img-responsive">
                            <img class="img-responsive" src="{{asset('img/apartamento.jpg')}}" alt="">
                        </div>
                        <div class="tipo-apartamento text-right">
                            ARRIENDO
                        </div>
                        <div class="descripcion">
                            <h3 class="text-center">APARTAMENTO</h3>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione earum velit, delectus libero? Alias odit, iure omnis eos illum blanditiis, sunt!
                            </p>
                            <p class="precio text-center">
                                <span>
                                    $ 1.300.000
                                </span>
                            </p>
                            <table width="100%">
                                <tr>
                                    <td>Area</td>
                                    <td>Habs</td>
                                    <td>Baños</td>
                                    <td>Parq</td>
                                </tr>
                                <tr>
                                    <td>115M2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--Item-->
                <div class="col-lg-4">
                    <div class="apartamento">
                        <div class="img-apartamento img-responsive">
                            <img class="img-responsive" src="{{asset('img/apartamento.jpg')}}" alt="">
                        </div>
                        <div class="tipo-apartamento text-right">
                            ARRIENDO
                        </div>
                        <div class="descripcion">
                            <h3 class="text-center">APARTAMENTO</h3>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione earum velit, delectus libero? Alias odit, iure omnis eos illum blanditiis, sunt!
                            </p>
                            <p class="precio text-center">
                                <span>
                                    $ 1.300.000
                                </span>
                            </p>
                            <table width="100%">
                                <tr>
                                    <td>Area</td>
                                    <td>Habs</td>
                                    <td>Baños</td>
                                    <td>Parq</td>
                                </tr>
                                <tr>
                                    <td>115M2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--Paginacion-->
                <div class="col-lg-12">
                	<ul class="pagination pagination-md">
                		<li class=""><a href="#">«</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">»</a></li>
					</ul>
                </div>
			</div>
		</div>
	</div>
	<!--Pie de pagina-->
	@include('include.footer')
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
@endsection