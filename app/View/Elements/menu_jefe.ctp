 <ul class="nav nav-tabs">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Perfil</a></li>
             
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cursos <b class="caret"></b></a>
                <ul class="dropdown-menu">
<!--                  <li><a href="#">Mis Cursos</a></li>-->
                   <li><?php echo $this->Html->link(__('Lista De Cursos'), array('controller'=>'datos_cursos','action' => 'index')); ?></li>
                  <li class="divider"></li>
                  <li><?php echo $this->Html->link(__('Agregar Cursos'), array('controller'=>'datos_cursos','action' => 'add')); ?></li>
                  <li class="divider"></li>
                </ul>
              </li>
               <li><a href="users/logout">Salir</a></li>
            </ul>