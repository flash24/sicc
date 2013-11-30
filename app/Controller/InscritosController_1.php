<?php
class InscritosController extends AppController{
	public $helpers=array('Html','Form');
	public $components=array('Session');



	public function index(){

		

	}
	 /*public function add() {
         $TipoInscrito = $this->Inscrito->TipoInscrito->find('list');
        $this->set(compact('TipoInscrito'));
         $this->layout = 'add';
        if ($this->request->is('post')) {
            $this->Inscrito->create();
            if ($this->Inscrito->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('controller'=>'inicio','action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }

    }*/
    public function add() {
 $this->layout = 'add';
 if ($this->request->is('post')) {
    /*
     $this->Inscrito->create();
            if ($this->Inscrito->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('controller'=>'inicio','action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));*/
    
   if (!empty($this->request->data)) {
        // Use the following to avoid validation errors:
        unset($this->Inscrito->User->validate['inscrito_id']);
        if($this->Inscrito->saveAssociated($this->request->data)){
             $this->Session->setFlash(__('The user has been saved'));
             return $this->redirect(array('controller'=>'inicio','action' => 'index'));
        }else{
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
    }
  }
  $tipoInscritos = $this->Inscrito->TipoInscrito->find('list');
        $this->set(compact('tipoInscritos'));
        
}

   public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('add'); // Letting users register themselves
}




}