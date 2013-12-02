<?php
App::uses('AppModel', 'Model');
/**
 * DatosCurso Model
 *
 * @property CursosAbierto $CursosAbierto
 */
class DatosCurso extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_curso';

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
		'nombre_curso' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'El nombre del curso el requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                'objetivos' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'Los objetivos deben ser establecidos',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
              'horas_totales' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CursosAbierto' => array(
			'className' => 'CursosAbierto',
			'foreignKey' => 'datos_curso_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
