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
public $validate = array(
		'id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                'inscrito_id' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'El nombre del Instrucctor es requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
              'tipo_curso_id' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'El tipo del curso es requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
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
