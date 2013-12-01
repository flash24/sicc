<?php
App::uses('AppController', 'Controller');
/**
 * CursosAbiertos Controller
 *
 * @property CursosAbierto $CursosAbierto
 */
class CursosAbiertosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CursosAbierto->recursive = 0;
		$this->set('cursosAbiertos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CursosAbierto->exists($id)) {
			throw new NotFoundException(__('Invalid cursos abierto'));
		}
		$options = array('conditions' => array('CursosAbierto.' . $this->CursosAbierto->primaryKey => $id));
		$this->set('cursosAbierto', $this->CursosAbierto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
public function add() {
        if ($this->Auth->user('role') == 'jefeDepa') {
            if ($this->request->is('post')) {
                $this->CursosAbierto->create();
                if ($this->CursosAbierto->save($this->request->data)) {
                    $this->Session->setFlash(__('The cursos abierto has been saved'));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The cursos abierto could not be saved. Please, try again.'));
                }
            }
            $inscritos = $this->CursosAbierto->Inscrito->find('list');
            $datosCursos = $this->CursosAbierto->DatosCurso->find('list');
            $tipoCursos = $this->CursosAbierto->TipoCurso->find('list');
            $this->set(compact('inscritos', 'datosCursos', 'tipoCursos'));
        } else {
            return $this->redirect(array('controller' => 'inicio', 'action' => 'index'));
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
             if ($this->Auth->user('role') == 'jefeDepa') {
		if (!$this->CursosAbierto->exists($id)) {
			throw new NotFoundException(__('Invalid cursos abierto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CursosAbierto->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos abierto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos abierto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CursosAbierto.' . $this->CursosAbierto->primaryKey => $id));
			$this->request->data = $this->CursosAbierto->find('first', $options);
		}
		$inscritos = $this->CursosAbierto->Inscrito->find('list');
		$datosCursos = $this->CursosAbierto->DatosCurso->find('list');
		$tipoCursos = $this->CursosAbierto->TipoCurso->find('list');
		$this->set(compact('inscritos', 'datosCursos', 'tipoCursos'));
             }
             else {
            return $this->redirect(array('controller' => 'inicio', 'action' => 'index'));
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
             if ($this->Auth->user('role') == 'jefeDepa') {
		$this->CursosAbierto->id = $id;
		if (!$this->CursosAbierto->exists()) {
			throw new NotFoundException(__('Invalid cursos abierto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CursosAbierto->delete()) {
			$this->Session->setFlash(__('Cursos abierto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cursos abierto was not deleted'));
		$this->redirect(array('action' => 'index'));
             }
             else {
            return $this->redirect(array('controller' => 'inicio', 'action' => 'index'));
        }
	}
}
