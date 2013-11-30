<div class="inscritos view">
<h2><?php echo __('Inscrito'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inscrito['Inscrito']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($inscrito['Inscrito']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primer Apellido'); ?></dt>
		<dd>
			<?php echo h($inscrito['Inscrito']['primer_apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundo Apellido'); ?></dt>
		<dd>
			<?php echo h($inscrito['Inscrito']['segundo_apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Inscrito'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscrito['TipoInscrito']['nombre_tipo'], array('controller' => 'tipo_inscritos', 'action' => 'view', $inscrito['TipoInscrito']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($inscrito['Inscrito']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-mail'); ?></dt>
		<dd>
			<?php echo h($inscrito['Inscrito']['e-mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($inscrito['Inscrito']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfc'); ?></dt>
		<dd>
			<?php echo h($inscrito['Inscrito']['rfc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inscrito'), array('action' => 'edit', $inscrito['Inscrito']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inscrito'), array('action' => 'delete', $inscrito['Inscrito']['id']), null, __('Are you sure you want to delete # %s?', $inscrito['Inscrito']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscritos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscrito'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Cursos Abiertos'); ?></h3>
	<?php if (!empty($inscrito['CursosAbierto'])): ?>
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
		foreach ($inscrito['CursosAbierto'] as $cursosAbierto): ?>
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
<div class="related">
	<h3><?php echo __('Related Datos Laborales'); ?></h3>
	<?php if (!empty($inscrito['DatosLaborale'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Inscrito Id'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Puesto Actual'); ?></th>
		<th><?php echo __('Nombre Jefe'); ?></th>
		<th><?php echo __('Unidad Responsable'); ?></th>
		<th><?php echo __('Domicilio Laboral'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Ext Telefono'); ?></th>
		<th><?php echo __('Horario Laboral'); ?></th>
		<th><?php echo __('Carrera'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inscrito['DatosLaborale'] as $datosLaborale): ?>
		<tr>
			<td><?php echo $datosLaborale['id']; ?></td>
			<td><?php echo $datosLaborale['inscrito_id']; ?></td>
			<td><?php echo $datosLaborale['area']; ?></td>
			<td><?php echo $datosLaborale['puesto_actual']; ?></td>
			<td><?php echo $datosLaborale['nombre_jefe']; ?></td>
			<td><?php echo $datosLaborale['unidad_responsable']; ?></td>
			<td><?php echo $datosLaborale['domicilio_laboral']; ?></td>
			<td><?php echo $datosLaborale['telefono']; ?></td>
			<td><?php echo $datosLaborale['ext_telefono']; ?></td>
			<td><?php echo $datosLaborale['horario_laboral']; ?></td>
			<td><?php echo $datosLaborale['carrera']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'datos_laborales', 'action' => 'view', $datosLaborale['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'datos_laborales', 'action' => 'edit', $datosLaborale['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'datos_laborales', 'action' => 'delete', $datosLaborale['id']), null, __('Are you sure you want to delete # %s?', $datosLaborale['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Datos Laborale'), array('controller' => 'datos_laborales', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Participantes'); ?></h3>
	<?php if (!empty($inscrito['Participante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cursos Abierto Id'); ?></th>
		<th><?php echo __('Inscrito Id'); ?></th>
		<th><?php echo __('Acredito'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inscrito['Participante'] as $participante): ?>
		<tr>
			<td><?php echo $participante['id']; ?></td>
			<td><?php echo $participante['cursos_abierto_id']; ?></td>
			<td><?php echo $participante['inscrito_id']; ?></td>
			<td><?php echo $participante['acredito']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'participantes', 'action' => 'view', $participante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'participantes', 'action' => 'edit', $participante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'participantes', 'action' => 'delete', $participante['id']), null, __('Are you sure you want to delete # %s?', $participante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($inscrito['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Inscrito Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inscrito['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['inscrito_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['role']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
