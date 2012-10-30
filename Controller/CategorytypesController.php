<?php
App::uses('AppController', 'Controller');
/**
 * Categorytypes Controller
 *
 * @property Categorytype $Categorytype
 */
class CategorytypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {		
		$this->Categorytype->recursive = 1;
		$categories = $this->Categorytype->find('all');
		if ($this->request->is('requested')) {
			return $categories;
		} else {
			//$this->set('categories', $categories);
		}
	}

}
