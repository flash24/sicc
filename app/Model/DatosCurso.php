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
