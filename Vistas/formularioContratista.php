<?php
class formularioContratista
{
    public function mostrar()
    {
        $html = <<<EOT
<div class="container-fluid well">
<div class="row ">
<form class="form-horizontal"
action="liquidar_empleado.php">
<div class="form-group">
<label class="col
control-label">Identificacion</label>
<div class="col">
<input type="hidden" name="tipo_empleado"
value="2">
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
<label class="col control-label">Valor
de la hora</label>
<div class="col">
<input type="text" class="form-control"
name="valor_hora" id="valor_hora"
placeholder="Valor de la hora...">
</div>
</div>
<div class="form-group">
<label class="col control-label">Horas
Trabajadas</label>
<div class="col">
<input type="text" class="form-control"
name="horas_trabajadas"
id="horas_trabajadas" placeholder="Horas
extras...">
</div>
<</form>
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