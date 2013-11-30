<?php
App::uses('AppController', 'Controller');
/**
 * DatosCursos Controller
 *
 * @property DatosCurso $DatosCurso
 */
class DatosCursosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DatosCurso->recursive = 0;
		$this->set('datosCursos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DatosCurso->exists($id)) {
			throw new NotFoundException(__('Invalid datos curso'));
		}
		$options = array('conditions' => array('DatosCurso.' . $this->DatosCurso->primaryKey => $id));
		$this->set('datosCurso', $this->DatosCurso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DatosCurso->create();
			if ($this->DatosCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The datos curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The datos curso could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DatosCurso->exists($id)) {
			throw new NotFoundException(__('Invalid datos curso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DatosCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The datos curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The datos curso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DatosCurso.' . $this->DatosCurso->primaryKey => $id));
			$this->request->data = $this->DatosCurso->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DatosCurso->id = $id;
		if (!$this->DatosCurso->exists()) {
			throw new NotFoundException(__('Invalid datos curso'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DatosCurso->delete()) {
			$this->Session->setFlash(__('Datos curso deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Datos curso was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
