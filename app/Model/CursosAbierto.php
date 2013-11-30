<?php
App::uses('AppModel', 'Model');
/**
 * CursosAbierto Model
 *
 * @property Inscrito $Inscrito
 * @property DatosCurso $DatosCurso
 * @property TipoCurso $TipoCurso
 */
class CursosAbierto extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Inscrito' => array(
			'className' => 'Inscrito',
			'foreignKey' => 'inscrito_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DatosCurso' => array(
			'className' => 'DatosCurso',
			'foreignKey' => 'datos_curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoCurso' => array(
			'className' => 'TipoCurso',
			'foreignKey' => 'tipo_curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
