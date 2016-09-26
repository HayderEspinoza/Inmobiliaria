<div class="contacto">
	<div class="container">
		<div class="col-lg-12 block-center text-center">
			<h4>CONTÁCTANOS</h4>
			<h2>ESTAMOS DISPUESTOS A AYUDARTE</h2>
			<h4>SI ESTÁ INTERESADO EN:</h4>
			{{ Form::open(['route' => 'web.enviar', 'method' => 'post']) }}
			<p>
				<label class="checkbox-inline">
					<input type="checkbox" value="arrendar" name="tipo[]">ARRENDAR
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" value="vender" name="tipo[]">VENDER
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" value="evalue" name="tipo[]">AVALÚO
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" value="gerencia_proyecto" name="tipo[]"> GERENCIA DE PROYECTOS
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" value="reclamos" name="tipo[]">RECLAMOS
				</label>
			</p>
			<h4>
				DÉJENOS SU EMAIL Y LO CONTÁCTAREMOS.
			</h4>
				<div class="row">
					<div class="col-lg-11 block-center">
						<div class="col-lg-4 form-group">
							{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => '*Nombre', 'required']) }}
						</div>
						<div class="col-lg-4 form-group">
							{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => '*Email', 'required']) }}
						</div>
						<div class="col-lg-4 form-group">
							{{ Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => '*Telefono', 'required']) }}
						</div>
						<div class="col-lg-12 form-group">
							{{ Form::textarea('mensaje', null, ['class' => 'form-control', 'placeholder' => 'Escriba su mensaje aqui', 'size' => '30x10', 'required']) }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 block-center">
						<input type="submit" class="btn btn-default btn-lg btn-block btn-enviar" value="Enviar">
					</div>
				</div>
			{{ Form::close() }}
		</div>
	</div>
</div>