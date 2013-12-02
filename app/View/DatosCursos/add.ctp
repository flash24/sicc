<h3 class="offset4">Añadir Curso</h3>       
<div class="span5 offset1">


    <div class="form-signin">
        <?php echo $this->Form->create('DatosCurso'); ?>
	<fieldset>
		<legend><?php echo __('Datos Del Curso'); ?></legend>
	<?php
		echo $this->Form->input('nombre_curso');
		echo $this->Form->input('objetivos');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('dirigido');
		echo $this->Form->input('horas_totales',array('type'=>'number'));
	?>
	</fieldset>


    </div>
</div>
<div class="span5 ">
    <div class="form-signin">
        <fieldset>
            <legend><?php echo __('Abrir Curso'); ?></legend>
            <?php
                echo $this->Form->input('CursosAbierto.inscrito_id',array('label'=>'Instructor'));
//		echo $this->Form->input('CursosAbierto.datos_curso_id');
		echo $this->Form->input('CursosAbierto.tipo_curso_id');
		echo $this->Form->input('CursosAbierto.horario_curso');
		echo $this->Form->input('CursosAbierto.lugar');
		echo $this->Form->input('CursosAbierto.periodo_cursos');
            ?>
        </fieldset>
            <?php echo $this->Form->end(__('Guardar Y Abrir')); ?>
    </div>

</div>

<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Datos Cursos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos Abiertos'), array('controller' => 'cursos_abiertos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Abierto'), array('controller' => 'cursos_abiertos', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
