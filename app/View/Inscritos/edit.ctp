<div class="inscritos form">
<?php echo $this->Form->create('Inscrito'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inscrito'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('primer_apellido');
		echo $this->Form->input('segundo_apellido');
		echo $this->Form->input('tipo_inscrito_id');
		echo $this->Form->input('telefono');
		echo $this->Form->input('e-mail');
		echo $this->Form->input('genero');
		echo $this->Form->input('rfc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inscrito.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Inscrito.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Inscritos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Inscritos'), array('controller' => 'tipo_inscritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Inscrito'), array('controller' => 'tipo_inscritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Abiertos'), array('controller' => 'cursos_abiertos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Abierto'), array('controller' => 'cursos_abiertos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Laborales'), array('controller' => 'datos_laborales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Laborale'), array('controller' => 'datos_laborales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
