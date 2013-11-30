<div class="participantes view">
<h2><?php echo __('Participante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cursos Abierto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participante['CursosAbierto']['id'], array('controller' => 'cursos_abiertos', 'action' => 'view', $participante['CursosAbierto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inscrito'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participante['Inscrito']['nombre'], array('controller' => 'inscritos', 'action' => 'view', $participante['Inscrito']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acredito'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['acredito']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participante'), array('action' => 'edit', $participante['Participante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participante'), array('action' => 'delete', $participante['Participante']['id']), null, __('Are you sure you want to delete # %s?', $participante['Participante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Abiertos'), array('controller' => 'cursos_abiertos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Abierto'), array('controller' => 'cursos_abiertos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscritos'), array('controller' => 'inscritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscrito'), array('controller' => 'inscritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Constancias'), array('controller' => 'constancias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Constancia'), array('controller' => 'constancias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Constancias'); ?></h3>
	<?php if (!empty($participante['Constancia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Participante Id'); ?></th>
		<th><?php echo __('Tipo Constancia'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($participante['Constancia'] as $constancia): ?>
		<tr>
			<td><?php echo $constancia['id']; ?></td>
			<td><?php echo $constancia['participante_id']; ?></td>
			<td><?php echo $constancia['tipo_constancia']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'constancias', 'action' => 'view', $constancia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'constancias', 'action' => 'edit', $constancia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'constancias', 'action' => 'delete', $constancia['id']), null, __('Are you sure you want to delete # %s?', $constancia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Constancia'), array('controller' => 'constancias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
