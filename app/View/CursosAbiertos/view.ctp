<div class="cursosAbiertos view">
<h2 class="offset4">Curso De <?php echo $cursosAbierto['DatosCurso']['nombre_curso']; ?></br></h2>
<div class="span10 offset1">
    <div class="row">
        <div class="span5">
            <header> 
                <h1 class="portlet-title">
                    <span>Objetivos</span>
                </h1> 
            </header> 
            <div> 

                <div class="portlet-body">
                    <p><!--?xml version='1.0' encoding='UTF-8'?--><root available-locales="es_ES" default-locale="es_ES"><description language-id="es_ES"></description></root></p><p>
                        El MOOC titulado “Curso Fundamental de Microeconomía” se imparte en su totalidad en el medio online, con un carácter abierto y masivo, y de forma gratuita, con una duración de 12 semanas. En su primera edición se desarrolló desde el 31 de enero hasta el 24 de abril de 2013. La evaluación constará de un test al final de cada módulo, además de un examen general de la materia. Este MOOC cubre los contenidos fundamentales de microeconomía que se han de conocer para interpretar en clave microeconómica los hechos de la realidad cotidiana.</p>
                    <p></p> 
                </div> 

            </div>
        </div>
        <div class="span6">
        <header> 
            <h1 class="portlet-title">
                <span>Observaciones</span>
            </h1> 
        </header> 
        <div> 

            <div class="portlet-body">
                <p><!--?xml version='1.0' encoding='UTF-8'?--><root available-locales="es_ES" default-locale="es_ES"><description language-id="es_ES"></description></root></p><p>
                    El MOOC titulado “Curso Fundamental de Microeconomía” se imparte en su totalidad en el medio online, con un carácter abierto y masivo, y de forma gratuita, con una duración de 12 semanas. En su primera edición se desarrolló desde el 31 de enero hasta el 24 de abril de 2013. La evaluación constará de un test al final de cada módulo, además de un examen general de la materia. Este MOOC cubre los contenidos fundamentales de microeconomía que se han de conocer para interpretar en clave microeconómica los hechos de la realidad cotidiana.</p>
                <p></p> 
            </div> 
            
        </div> 
    </div>

    </div> 
    <?php 
     $data=array();
     $data['Participantes']['cursos_abierto_id']=$this->Session->read('inscrito_id');
     $data['Participantes']['inscrito_id']=$cursosAbierto['CursosAbierto']['id'];
     pr($data);
     ?>
    <?php echo $this->Form->postLink(__('Inscribirse'), array('controller'=>'participantes','action' => 'add',$data['Participantes']['cursos_abierto_id'],$data['Participantes']['inscrito_id']), array('class'=>'btn btn-primary btn-large')); ?>
     
</div>
<!--	<dl>
		<dt><?php // echo __('Id'); ?></dt>
		<dd>
			<?php // echo h($cursosAbierto['CursosAbierto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php // echo __('Inscrito'); ?></dt>
		<dd>
			<?php // echo $this->Html->link($cursosAbierto['Inscrito']['nombre'], array('controller' => 'inscritos', 'action' => 'view', $cursosAbierto['Inscrito']['id'])); ?>			&nbsp;
		</dd>
		<dt><?php // echo __('Datos Curso'); ?></dt>
		<dd>
			<?php // echo $this->Html->link($cursosAbierto['DatosCurso']['nombre_curso'], array('controller' => 'datos_cursos', 'action' => 'view', $cursosAbierto['DatosCurso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php // echo __('Tipo Curso'); ?></dt>
		<dd>
			<?php // echo $this->Html->link($cursosAbierto['TipoCurso']['nivel_curso'], array('controller' => 'tipo_cursos', 'action' => 'view', $cursosAbierto['TipoCurso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php // echo __('Horario Curso'); ?></dt>
		<dd>
			<?php // echo h($cursosAbierto['CursosAbierto']['horario_curso']); ?>
			&nbsp;
		</dd>
		<dt><?php // echo __('Lugar'); ?></dt>
		<dd>
			<?php // echo h($cursosAbierto['CursosAbierto']['lugar']); ?>
			&nbsp;
		</dd>
		<dt><?php // echo __('Periodo Cursos'); ?></dt>
		<dd>
			<?php // echo h($cursosAbierto['CursosAbierto']['periodo_cursos']); ?>
			&nbsp;
		</dd>
	</dl>-->
</div>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php // echo $this->Html->link(__('Edit Cursos Abierto'), array('action' => 'edit', $cursosAbierto['CursosAbierto']['id'])); ?> </li>
		<li><?php // echo $this->Form->postLink(__('Delete Cursos Abierto'), array('action' => 'delete', $cursosAbierto['CursosAbierto']['id']), null, __('Are you sure you want to delete # %s?', $cursosAbierto['CursosAbierto']['id'])); ?> </li>
		<li><?php // echo $this->Html->link(__('List Cursos Abiertos'), array('action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Cursos Abierto'), array('action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Inscritos'), array('controller' => 'inscritos', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Inscrito'), array('controller' => 'inscritos', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Datos Cursos'), array('controller' => 'datos_cursos', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Datos Curso'), array('controller' => 'datos_cursos', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Tipo Cursos'), array('controller' => 'tipo_cursos', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Tipo Curso'), array('controller' => 'tipo_cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
