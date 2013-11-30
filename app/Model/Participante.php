<?php
App::uses('AppModel', 'Model');
/**
 * Participante Model
 *
 * @property CursosAbierto $CursosAbierto
 * @property Inscrito $Inscrito
 * @property Constancia $Constancia
 */
class Participante extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'inscrito_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CursosAbierto' => array(
			'className' => 'CursosAbierto',
			'foreignKey' => 'cursos_abierto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Inscrito' => array(
			'className' => 'Inscrito',
			'foreignKey' => 'inscrito_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Constancia' => array(
			'className' => 'Constancia',
			'foreignKey' => 'participante_id',
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
