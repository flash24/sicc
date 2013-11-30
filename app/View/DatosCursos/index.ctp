<div class="datosCursos index">
	<h2><?php echo __('Datos Cursos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_curso'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivos'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('dirigido'); ?></th>
			<th><?php echo $this->Paginator->sort('horas_totales'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($datosCursos as $datosCurso): ?>
	<tr>
		<td><?php echo h($datosCurso['DatosCurso']['id']); ?>&nbsp;</td>
		<td><?php echo h($datosCurso['DatosCurso']['nombre_curso']); ?>&nbsp;</td>
		<td><?php echo h($datosCurso['DatosCurso']['objetivos']); ?>&nbsp;</td>
		<td><?php echo h($datosCurso['DatosCurso']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($datosCurso['DatosCurso']['dirigido']); ?>&nbsp;</td>
		<td><?php echo h($datosCurso['DatosCurso']['horas_totales']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $datosCurso['DatosCurso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $datosCurso['DatosCurso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $datosCurso['DatosCurso']['id']), null, __('Are you sure you want to delete # %s?', $datosCurso['DatosCurso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Datos Curso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos Abiertos'), array('controller' => 'cursos_abiertos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Abierto'), array('controller' => 'cursos_abiertos', 'action' => 'add')); ?> </li>
	</ul>
</div>
