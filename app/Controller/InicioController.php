<?php
App::uses('Maestro', 'Model');
App::uses('AuthComponent', 'Controller/Component');
class InicioController extends AppController{
	public $helpers=array('Html','Form');
	public $components=array('Session');

	public function index(){
            $this->Session->write('rol', $this->Auth->user('role'));
//         $hola=$this->Auth->user('rol');
//            $this->set('usuario',$hola);
		
	}
	
}


