<h1>agregar curso</h1>
<?php
echo $this->Form->create('DatosCurso');
echo $this->Form->input('nombre_curso');
echo $this->Form->input('objetivos');
echo $this->Form->input('horas_totales');
echo $this->Form->input('dirigido');
echo $this->Form->input('observaciones');
echo $this->Form->end('guardar curso');
?>