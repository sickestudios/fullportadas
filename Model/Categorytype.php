<?php
App::uses('AppModel', 'Model');
/**
 * Categorytype Model
 *
 * @property Cover $Cover
 */
class Categorytype extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
/**
 * hasMany associations
 *
 * @var array
*/
	
	public $hasMany = array(
        'Categorygiven' => array(
            'className' => 'Categorygiven',
            'foreignKey' => 'categorytype_id',
            'conditions' => array('Categorygiven.language_id' => 3),
            //'order' => 'Categorygiven.name DESC',
            //'limit' => '5',
            'dependent' => true
        )
    );
    
	
/**
 * hasAndBelongsToMany associations
 *
 * @var array

	public $hasAndBelongsToMany = array(
		'Cover' => array(
			'className' => 'Cover',
			'joinTable' => 'categorytypes_covers',
			'foreignKey' => 'categorytype_id',
			'associationForeignKey' => 'cover_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
	*/
	 
}


