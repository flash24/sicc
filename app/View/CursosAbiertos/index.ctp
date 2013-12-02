<div class="cursosAbiertos index">
	<h2><?php echo __('Cursos Abiertos'); ?></h2>
	<table class="table table-bordered" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><a href="/sicc/cursos_abiertos/index/sort:inscrito_id/direction:asc">Instructor</a></th>
			<!--<th><?php // echo $this->Paginator->sort('inscrito_id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('datos_curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('horario_curso'); ?></th>
			<th><?php echo $this->Paginator->sort('lugar'); ?></th>
			<th><?php echo $this->Paginator->sort('periodo_cursos'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cursosAbiertos as $cursosAbierto): ?>
	<tr>
		<td><?php echo h($cursosAbierto['CursosAbierto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cursosAbierto['Inscrito']['nombre'], array('controller' => 'inscritos', 'action' => 'view', $cursosAbierto['Inscrito']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cursosAbierto['DatosCurso']['nombre_curso'], array('controller' => 'datos_cursos', 'action' => 'view', $cursosAbierto['DatosCurso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cursosAbierto['TipoCurso']['nivel_curso'], array('controller' => 'tipo_cursos', 'action' => 'view', $cursosAbierto['TipoCurso']['id'])); ?>
		</td>
		<td><?php echo h($cursosAbierto['CursosAbierto']['horario_curso']); ?>&nbsp;</td>
		<td><?php echo h($cursosAbierto['CursosAbierto']['lugar']); ?>&nbsp;</td>
		<td><?php echo h($cursosAbierto['CursosAbierto']['periodo_cursos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $cursosAbierto['CursosAbierto']['id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $cursosAbierto['CursosAbierto']['id'])); ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cursosAbierto['CursosAbierto']['id']), null, __('Are you sure you want to delete # %s?', $cursosAbierto['CursosAbierto']['id'])); ?>
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
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php // echo $this->Html->link(__('New Cursos Abierto'), array('action' => 'add')); ?></li>
		<li><?php // echo $this->Html->link(__('List Inscritos'), array('controller' => 'inscritos', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Inscrito'), array('controller' => 'inscritos', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Datos Cursos'), array('controller' => 'datos_cursos', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Datos Curso'), array('controller' => 'datos_cursos', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Tipo Cursos'), array('controller' => 'tipo_cursos', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Tipo Curso'), array('controller' => 'tipo_cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
