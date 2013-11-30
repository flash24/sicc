<div class="participantes form">
<?php echo $this->Form->create('Participante'); ?>
	<fieldset>
		<legend><?php echo __('Edit Participante'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cursos_abierto_id');
		echo $this->Form->input('inscrito_id');
		echo $this->Form->input('acredito');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Participante.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Participante.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos Abiertos'), array('controller' => 'cursos_abiertos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Abierto'), array('controller' => 'cursos_abiertos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscritos'), array('controller' => 'inscritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscrito'), array('controller' => 'inscritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Constancias'), array('controller' => 'constancias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Constancia'), array('controller' => 'constancias', 'action' => 'add')); ?> </li>
	</ul>
</div>
