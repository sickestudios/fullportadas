<?php
App::uses('AppModel', 'Model');
/**
 * Cover Model
 *
 * @property Categorytype $Categorytype
 */
class Cover extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	
	public $hasMany = array(
		'Review' => array(
	    	'className'     => 'Review',
	    	'conditions'    => array('Review.published' => 1,'Review.language_id' => 3),
		)
	);
	    

/**
 * hasAndBelongsToMany associations
 *
 * @var array

	public $hasAndBelongsToMany = array(
		'Categorytype' => array(
			'className' => 'Categorytype',
			'joinTable' => 'categorytypes_covers',
			'foreignKey' => 'cover_id',
			'associationForeignKey' => 'categorytype_id',
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
