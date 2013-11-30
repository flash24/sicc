<?php
App::uses('Maestro', 'Model');
App::uses('AuthComponent', 'Controller/Component');
class InicioController extends AppController{
	public $helpers=array('Html','Form');
	public $components=array('Session');

	public function index(){
            $hola=$this->Auth->user('id');
            $this->set('usuario',$hola);
		
	}
	public function add(){
		if($this->request->is('post')){
			if($this->Maestro->save($this->request->data)){
				$this->Session->setFlash('maestro guardado');
				$this->redirect(array('action'=>'index'));
			}
		}
	}
}


