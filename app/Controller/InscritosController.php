<?php

App::uses('AppController', 'Controller');

/**
 * Inscritos Controller
 *
 * @property Inscrito $Inscrito
 */
class InscritosController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Inscrito->recursive = 0;
        $this->set('inscritos', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Inscrito->exists($id)) {
            throw new NotFoundException(__('Invalid inscrito'));
        }
        $options = array('conditions' => array('Inscrito.' . $this->Inscrito->primaryKey => $id));
        $this->set('inscrito', $this->Inscrito->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        //$this->layout = 'add';
        if ($this->request->is('post')) {

            if (!empty($this->request->data)) {
                // Use the following to avoid validation errors:
                unset($this->Inscrito->User->validate['inscrito_id']);
                if ($this->Inscrito->saveAssociated($this->request->data)) {
                    $this->Session->setFlash(__('The user has been saved'));
                    return $this->redirect(array('controller' => 'inicio', 'action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
                }
            }
        }
        $tipoInscritos = $this->Inscrito->TipoInscrito->find('list');
        $this->set(compact('tipoInscritos'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Inscrito->exists($id)) {
            throw new NotFoundException(__('Invalid inscrito'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Inscrito->save($this->request->data)) {
                $this->Session->setFlash(__('The inscrito has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The inscrito could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Inscrito.' . $this->Inscrito->primaryKey => $id));
            $this->request->data = $this->Inscrito->find('first', $options);
        }
        $tipoInscritos = $this->Inscrito->TipoInscrito->find('list');
        $this->set(compact('tipoInscritos'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Inscrito->id = $id;
        if (!$this->Inscrito->exists()) {
            throw new NotFoundException(__('Invalid inscrito'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Inscrito->delete()) {
            $this->Session->setFlash(__('Inscrito deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Inscrito was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
