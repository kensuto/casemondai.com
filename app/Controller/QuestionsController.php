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
class QuestionsController extends AppController {
	public $helpers = array('Html', 'Form');
/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Questions';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Question','Answer');
	
	
	/*====================
	   	問題一覧のアクション
	 ====================*/
	
	public function index() {
		$this->set('questions',$this->Question->find('all'));
	}




	/*====================
	   	問題詳細のアクション
	 ====================*/

	 	public function detail($questionId = null) { //questionIdが設定されていなかったらnullで初期化する
			if (!$questionId) { //questionIdが入っていなかったら、エラーを返す
				throw new NotFoundException(_('Invalid post'));
			}	else  {
			$question = $this->Question->find( 'first', array( 'conditions' => array( 'Question.id' => $questionId ) ) );//questionIdでデータを検索して、$detailに入れる
			$this->set('question',$question);//viewに$questionを渡している
			$answers = $this->Answer->find('all', array('conditions' => array('Answer.question_id' => $questionId )));
			$this->set('answers',$answers);	
			}		
	}//閉じ　function detail
	
	
	
	
	/*====================
	   解答投稿のアクション
	 ====================*/
	 
	public function postAnswer() {
		//post時の処理
		if ($this->request->is('post')) {
			$this->Answer->save($this->request->data);
			
		}
	}//閉じ　function detail
	
	
	
	
	/*====================
	 	問題投稿のアクション
	 ====================*/

	public function post() {
		if ($this->request->is('post')) {
//			$id = $this->Auth->user('id');
			$this->Question->save($this->request->data);
			$res = $this->Question->save($this->request->data);
			if ($res) {
				$last_id = $this->Question->getLastInsertID();
				$detail = $this->Question->find( 'first', array( 'conditions' => array( 'Question.id' => $last_id ) ) );//questionIdでデータを検索して、$detailに入れる
				$this->set('detail',$detail);//viewに$detailを渡している
				$this->redirect(array('controller' => 'questions', 'action' => 'detail', $detail['Question']['id']));
				}
			}
		}
		
	
	
}//閉じ　class QuestionsController extends AppController

?>