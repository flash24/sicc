<div class="cursosAbiertos form">
<?php echo $this->Form->create('CursosAbierto'); ?>
	<fieldset>
		<legend><?php echo __('Add Cursos Abierto'); ?></legend>
	<?php
		echo $this->Form->input('inscrito_id');
		echo $this->Form->input('datos_curso_id');
		echo $this->Form->input('tipo_curso_id');
		echo $this->Form->input('horario_curso');
		echo $this->Form->input('lugar');
		echo $this->Form->input('periodo_cursos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cursos Abiertos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscritos'), array('controller' => 'inscritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscrito'), array('controller' => 'inscritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Cursos'), array('controller' => 'datos_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Curso'), array('controller' => 'datos_cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Cursos'), array('controller' => 'tipo_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Curso'), array('controller' => 'tipo_cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
