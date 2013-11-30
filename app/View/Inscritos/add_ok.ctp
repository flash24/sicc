<!-- app/View/Users/add.ctp -->

<div class="span4 offset2">
<div class="form-signin">
<?php echo $this->Form->create('Inscrito'); ?>
    <fieldset>
        <legend><?php echo __('Datos de Usuario'); ?></legend>
        <?php
        
        echo $this->Form->input('User.username');
        echo $this->Form->input('User.password');
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
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
