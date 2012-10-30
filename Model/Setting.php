<?php
App::uses('AppModel', 'Model');
/**
 * Setting Model
 *
 */
class Setting extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'key';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'key' => array(
			'notempty' => array(
				'rule' => array('notempty')
			),
		),
		'value' => array(
			'notempty' => array(
				'rule' => array('notempty')
			),
		),
	);

	// currently used only on users::close
	private static $instance;
	function &getInstance() {
	    if (empty(self::$instance)) 
	    	self::$instance = ClassRegistry::init('Setting');

	    return self::$instance;
	}

	static function get($key){
		return self::getInstance()->field('value', compact('key'));
	}

	static function setField($key, $value){
		return self::getInstance()->updateAll(compact('value'), compact('key'));
	}

}