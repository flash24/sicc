<div class="datosCursos form">
<?php echo $this->Form->create('DatosCurso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Datos Curso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_curso');
		echo $this->Form->input('objetivos');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('dirigido');
		echo $this->Form->input('horas_totales');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DatosCurso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DatosCurso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Datos Cursos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos Abiertos'), array('controller' => 'cursos_abiertos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Abierto'), array('controller' => 'cursos_abiertos', 'action' => 'add')); ?> </li>
	</ul>
</div>
