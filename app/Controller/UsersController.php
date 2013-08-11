<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UsersController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Users';

/**
 * This controller does not use a model
 *
 * @var array
 */
    public
        $uses = Array('User'),
        $components = Array(
            'Session',
            'Auth' => Array(
                'loginRedirect'		=> Array('controller' => 'users', 'action' => 'index'),
                'logoutRedirect'	=> Array('controller' => 'users', 'action' => 'login'),
                'loginAction'		=> Array('controller' => 'users', 'action' => 'login'),
                'authenticate'		=> Array('Form' => Array('fields' => Array('username' => 'email'))),
				'authorize'			=> 'Controller',
            ),
//		    'Facebook.Connect' => array('model' => 'User'),
		    'Facebook.Connect',
        );
 
 
    public function beforeFilter()
    {
        parent::beforeFilter();
//		$this->layout = 'default';
        $this->Auth->allow('add', 'login','register','register_confirm','register_done');
    }
 
    public function index()
    {
    }
 
 
    //kaiin touroku input.
	public function register() {
	}
	//kaiin touroku kakunin.
	public function register_confirm() {
	}
	//kaiin touroku kanryou.
	public function register_done() {
	}
	
	
 
    public function login() {
debug( $this->Connect->user() );
        if($this->request->is('post')) {
            if($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
            }
        }
    }
 
    public function logout($id = null)
    {
        $this->redirect($this->Auth->logout());
    }
 
    public function add() {
        if($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }
}
?>
