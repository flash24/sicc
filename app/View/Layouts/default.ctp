<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php echo $this->Html->charset(); ?>
	
	<?php
		echo $this->Html->meta('icon');
         // Aqui se mandan a llamar los CSS
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('login');
                echo $this->Html->css('css');
        //////////////////////////////////////////
        ////Aqui se mandan a llamar los JS
        echo $this->Html->script('jquery');
        echo $this->Html->script('bootstrap-carousel');
        echo $this->Html->script('bootstrap-transition');
        echo $this->Html->script('bootstrap');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('bootstrap-dropdown');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <div class="container-fluid">
        
<div class="span10 offset3" id="cabecera1"><!--inicio cabecera --> 
        <?php echo $this->Html->image('itc.jpg', array('style' => 'float:right; margin:15px;')); ?> 	
	    <h1>Intituto Tecnológico de Chetumal</h1><h1>Sistema de Control de Cursos</h1>		
	</div><!--fin cabecera -->

        <div class="span10 offset3" id="menu">
         
          <?php 
          if($this->Session->check('rol')){
              switch ($this->Session->read('rol')) {
                  case 'participante':
                      echo $this->element('menu_participante');
                      break;

                  case 'jefeDepa':
                      echo $this->element('menu_jefe');
                      break;
              }
              
          }
          else{
              
              echo $this->element('menu_login');
          }
              
          
          
          
          ?>

        </div>
        <div class="span10 offset3" id="cuerpo1">
            <div class="row-fluid">
                     <?php echo $this->Session->flash(); ?>

                     <?php echo $this->fetch('content'); ?>
<!--                <div  style="margin-top:40px"class="span5 offset3">
                     
               </div>-->
            </div>
            <div class="span8" >
	<p ALIGN=justify>El departamento de Desarrollo Academico da la bienvenida a todos los docentes y personas
            externos a nuestra Institución que deseen incribirse a algun curso de formación y actualización docente y
            profesional ha hacer uso de este sistema que esta elaborado con el fin de automatizar el proceso de 
            inscripción a cada curso.</p>
	</div>
        </div>
<!--      <div class="span10 offset3" id="cuerpo1">
            <div class="container">
                <div class="row">
                    <div class="span5 offset3">



                        <?php //echo $this->Session->flash(); ?>

                        <?php //echo $this->fetch('content'); ?>
                    </div>
                </div>
            </div>
        </div>-->
<!--<div class="span10 offset3" id="pie1">inicio pie 
        
	</div>fin pie -->
    </div>
</body>

</html>
