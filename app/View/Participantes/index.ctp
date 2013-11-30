<div class="participantes index">
	<h2><?php echo __('Participantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cursos_abierto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('inscrito_id'); ?></th>
			<th><?php echo $this->Paginator->sort('acredito'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($participantes as $participante): ?>
	<tr>
		<td><?php echo h($participante['Participante']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($participante['CursosAbierto']['id'], array('controller' => 'cursos_abiertos', 'action' => 'view', $participante['CursosAbierto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($participante['Inscrito']['nombre'], array('controller' => 'inscritos', 'action' => 'view', $participante['Inscrito']['id'])); ?>
		</td>
		<td><?php echo h($participante['Participante']['acredito']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $participante['Participante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $participante['Participante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $participante['Participante']['id']), null, __('Are you sure you want to delete # %s?', $participante['Participante']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Participante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos Abiertos'), array('controller' => 'cursos_abiertos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Abierto'), array('controller' => 'cursos_abiertos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscritos'), array('controller' => 'inscritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscrito'), array('controller' => 'inscritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Constancias'), array('controller' => 'constancias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Constancia'), array('controller' => 'constancias', 'action' => 'add')); ?> </li>
	</ul>
</div>
