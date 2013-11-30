<div class="container">

    <div class="offset3">
<?php echo $this->Form->create('User',array('class'=>'form-signin')); ?>
   <?php echo $this->Session->flash('auth'); ?>
         <h2 class="form-signin-heading">Inicie sesión</h2>
        <?php 
        echo $this->Form->input('username',array('class'=>'input-block-level','label'=>'Usuario'));
        echo $this->Form->input('password',array('class'=>'input-block-level'));
    ?>
    <div>
    <a href="/sicc/inscritos/add" class="btn" >Registrarse</a>
    <button class="btn btn-primary" type="submit">Login</button>
  </div>
 </form>
</div>


