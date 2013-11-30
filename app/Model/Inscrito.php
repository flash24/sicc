<?php
App::uses('AuthComponent', 'Controller/Component');
class Inscrito extends AppModel{
	 
	public $hasOne = array(/// se relaciona el modelo user de uno a uno
        'User' => array(
            'className' => 'User',
            'dependent' => true
        )
    );
 public $belongsTo = array(// se relaciona el modelo TipoInscrito de muchos  a uno
        'TipoInscrito' => array(
            'className' => 'TipoInscrito'
            
        )
    );
 public $displayField='nombre';
	
}
?>