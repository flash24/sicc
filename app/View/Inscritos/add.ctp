<h3 class="offset4">Añadir Participante</h3>       
<div class="span5 offset1">
        
            
    	<div class="form-signin">
<?php echo $this->Form->create('Inscrito'); ?>
    <fieldset>
        <legend><?php echo __('Datos de Usuario'); ?></legend>
        <?php
        
        echo $this->Form->input('User.username',array('label'=>'Nombre De Usuario'));
        echo $this->Form->input('User.password');
        echo $this->Form->input('User.role',array(
            'options' => array('jefeDepa' => 'Jefe De Departamento', 'participante' => 'Participante'),'label'=>'Permisos'
        ));
      

       
    ?>
    </fieldset>

</div>
    </div>
    <div class="span5 ">
    <div class="form-signin">
    <fieldset>
        <legend><?php echo __('Datos Personales'); ?></legend>
        <?php
        
        
        echo $this->Form->input('nombre');
        echo $this->Form->input('primer_apellido');
        echo $this->Form->input('segundo_apellido');
        echo $this->Form->input('telefono');
        echo $this->Form->input('e-mail');
        echo $this->Form->input('genero');
        echo $this->Form->input('rfc');
        echo $this->Form->input('tipo_inscrito_id');
      

       
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
    	
    </div>
   