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
App::uses('Sanitize', 'Utility');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class AnswersController extends AppController {
	public $helpers = array('Html', 'Form');
/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Answers';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	
	
	
	/*====================
	   解答投稿のアクション
	 ====================*/
	 
	public function postAnswer() {
		//post時の処理
		if ($this->request->is('post')) {
			$questionId = $question['Question']['id'];
			$this->Answer->save($this->request->data);	
			$question = $this->Question->find( 'first', array( 'conditions' => array( 'Question.questionId' => $question['question']['id'] ) ) );//questionIdでデータを検索して、$detailに入れる
			$this->set('question',$question);//viewに渡している
			$this->redirect(array('controller' => 'questions', 'action' => 'detail', $question['Question']['questionId']));
		}
	}//閉じ　function detail
	
	
			
	
}//閉じ　class QuestionsController extends AppController

?>
