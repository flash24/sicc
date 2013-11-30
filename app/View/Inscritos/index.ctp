<div class="inscritos index">
	<h2><?php echo __('Inscritos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('primer_apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('segundo_apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_inscrito_id'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('e-mail'); ?></th>
			<th><?php echo $this->Paginator->sort('genero'); ?></th>
			<th><?php echo $this->Paginator->sort('rfc'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inscritos as $inscrito): ?>
	<tr>
		<td><?php echo h($inscrito['Inscrito']['id']); ?>&nbsp;</td>
		<td><?php echo h($inscrito['Inscrito']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($inscrito['Inscrito']['primer_apellido']); ?>&nbsp;</td>
		<td><?php echo h($inscrito['Inscrito']['segundo_apellido']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inscrito['TipoInscrito']['nombre_tipo'], array('controller' => 'tipo_inscritos', 'action' => 'view', $inscrito['TipoInscrito']['id'])); ?>
		</td>
		<td><?php echo h($inscrito['Inscrito']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($inscrito['Inscrito']['e-mail']); ?>&nbsp;</td>
		<td><?php echo h($inscrito['Inscrito']['genero']); ?>&nbsp;</td>
		<td><?php echo h($inscrito['Inscrito']['rfc']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inscrito['Inscrito']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inscrito['Inscrito']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inscrito['Inscrito']['id']), null, __('Are you sure you want to delete # %s?', $inscrito['Inscrito']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Inscrito'), array('action' => 'add')); ?></li>
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
