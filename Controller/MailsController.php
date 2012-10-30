<?php
App::uses('AppController', 'Controller');
/**
 * Mails Controller
 *
 * @property Mail $Mail
 */
class MailsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mail->recursive = 0;
		$this->set('mails', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mail->create();
			if ($this->Mail->save($this->request->data)) {
				$this->Session->setFlash(__('El mail a sido enviado, nos prondremos en contacto con usted'),'default', array('class' => 'div_sent'));
				$this->redirect(array('controller'=>'mails','action' => 'add'));
			} else {
				$this->Session->setFlash(__('Su mail no puede ser enviado, verifíque los campos.'),'default', array('class' => 'div_error'));
			}
		}
	}
}
