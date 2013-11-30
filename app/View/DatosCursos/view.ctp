<div class="datosCursos view">
<h2><?php echo __('Datos Curso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($datosCurso['DatosCurso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Curso'); ?></dt>
		<dd>
			<?php echo h($datosCurso['DatosCurso']['nombre_curso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivos'); ?></dt>
		<dd>
			<?php echo h($datosCurso['DatosCurso']['objetivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($datosCurso['DatosCurso']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirigido'); ?></dt>
		<dd>
			<?php echo h($datosCurso['DatosCurso']['dirigido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horas Totales'); ?></dt>
		<dd>
			<?php echo h($datosCurso['DatosCurso']['horas_totales']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Datos Curso'), array('action' => 'edit', $datosCurso['DatosCurso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Datos Curso'), array('action' => 'delete', $datosCurso['DatosCurso']['id']), null, __('Are you sure you want to delete # %s?', $datosCurso['DatosCurso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Curso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Abiertos'), array('controller' => 'cursos_abiertos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Abierto'), array('controller' => 'cursos_abiertos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cursos Abiertos'); ?></h3>
	<?php if (!empty($datosCurso['CursosAbierto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Inscrito Id'); ?></th>
		<th><?php echo __('Datos Curso Id'); ?></th>
		<th><?php echo __('Tipo Curso Id'); ?></th>
		<th><?php echo __('Horario Curso'); ?></th>
		<th><?php echo __('Lugar'); ?></th>
		<th><?php echo __('Periodo Cursos'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($datosCurso['CursosAbierto'] as $cursosAbierto): ?>
		<tr>
			<td><?php echo $cursosAbierto['id']; ?></td>
			<td><?php echo $cursosAbierto['inscrito_id']; ?></td>
			<td><?php echo $cursosAbierto['datos_curso_id']; ?></td>
			<td><?php echo $cursosAbierto['tipo_curso_id']; ?></td>
			<td><?php echo $cursosAbierto['horario_curso']; ?></td>
			<td><?php echo $cursosAbierto['lugar']; ?></td>
			<td><?php echo $cursosAbierto['periodo_cursos']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cursos_abiertos', 'action' => 'view', $cursosAbierto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cursos_abiertos', 'action' => 'edit', $cursosAbierto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cursos_abiertos', 'action' => 'delete', $cursosAbierto['id']), null, __('Are you sure you want to delete # %s?', $cursosAbierto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cursos Abierto'), array('controller' => 'cursos_abiertos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
