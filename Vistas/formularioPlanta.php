<?php
class formularioPlanta
{
	public function mostrar()
	{
		$html = <<<EOT
	<div class="container-fluid well">
		<div class="row clearfix">
			<form role="form" class=""
				action="liquidar_empleado_planta.php">
	
				<div class="form-group">
					<label class="col
					control-label">Identificacion</label>
					<div class="col">
					<input type="hidden" name="tipo_empleado"
					value="1">
					<input type="text" class="form-control"
					name="identificacion"
					id="identificacion"
					placeholder="Identificacion...">
					</div>
				</div>
				<div class="form-group">
					<label class="col
					control-label">Nombre</label>
					<div class="col">
					<input type="text" class="form-control"
					name="nombre" id="nombre"
					placeholder="Nombre...">
					</div>
				</div>
				<div class="form-group">
					<label class="col
					control-label">Cargo</label>
					<div class="col">
					<input type="text" class="form-control"
					name="cargo" id="cargo"
					placeholder="Cargo...">
					</div>
				</div>
				<div class="form-group">
					<label class="col control-label">Sueldo
					básico</label>
					<div class="col">
					<input type="text" class="form-control"
					name="sueldo_basico" id="sueldo_basico"
					placeholder="Sueldo básico...">
					</div>
				</div>
				<div class="form-group">
					<label class="col control-label">Horas
					Extras</label>
					<div class="col">
					<input type="text" class="form-control"
					name="horas_extras" id="horas_extras"
					placeholder="Horas extras...">
					</div>
				</div>
				<div class="form-group">
					<label class="">Deducciones</label>
					<div class="col">
						<input type="text" class="form-control"
						name="deducciones" id="horas_extras"
						placeholder="Deducciones...">
					</div>
					<br>
					<div class="form-group">
					<div class="col-4 col-sm-offset-3">
					<input type="submit" class="btn btn-info"
					value="Procesar">
					</div>
					</div>
				
				</form>
				</div>
				</div>
EOT;
		echo $html;
	}
}
?>
}
}
?>