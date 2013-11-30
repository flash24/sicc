<div class="cursosAbiertos view">
<h2><?php echo __('Cursos Abierto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cursosAbierto['CursosAbierto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inscrito'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cursosAbierto['Inscrito']['nombre'], array('controller' => 'inscritos', 'action' => 'view', $cursosAbierto['Inscrito']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datos Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cursosAbierto['DatosCurso']['nombre_curso'], array('controller' => 'datos_cursos', 'action' => 'view', $cursosAbierto['DatosCurso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cursosAbierto['TipoCurso']['nivel_curso'], array('controller' => 'tipo_cursos', 'action' => 'view', $cursosAbierto['TipoCurso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horario Curso'); ?></dt>
		<dd>
			<?php echo h($cursosAbierto['CursosAbierto']['horario_curso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar'); ?></dt>
		<dd>
			<?php echo h($cursosAbierto['CursosAbierto']['lugar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo Cursos'); ?></dt>
		<dd>
			<?php echo h($cursosAbierto['CursosAbierto']['periodo_cursos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cursos Abierto'), array('action' => 'edit', $cursosAbierto['CursosAbierto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cursos Abierto'), array('action' => 'delete', $cursosAbierto['CursosAbierto']['id']), null, __('Are you sure you want to delete # %s?', $cursosAbierto['CursosAbierto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Abiertos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Abierto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscritos'), array('controller' => 'inscritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscrito'), array('controller' => 'inscritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Cursos'), array('controller' => 'datos_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Curso'), array('controller' => 'datos_cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Cursos'), array('controller' => 'tipo_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Curso'), array('controller' => 'tipo_cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
