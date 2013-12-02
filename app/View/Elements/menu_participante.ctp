 <ul class="nav nav-tabs">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Perfil</a></li>
             
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cursos <b class="caret"></b></a>
                
                <ul class="dropdown-menu">
<!--                  <li><a href="#">Mis Cursos</a></li>-->
                  <li><a href="#">Mis Cursos</a></li>
                   <li class="divider"></li>
                  <li><li><?php echo $this->Html->link(__('Cursos Abiertos'), array('controller'=>'cursos_abiertos','action' => 'index')); ?></li>
                  
  
                </ul>
              </li>
               <li><a href="users/logout">Salir</a></li>
            </ul>