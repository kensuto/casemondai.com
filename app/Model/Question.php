<?php
App::uses('AppModel', 'Model');
 
class Question extends AppModel {
	public $name = 'Question';
	
	public $validate = array(
		'title' => array(
			'rule' => array('between',5,30),
			'required' => TRUE,
			'message' => 'タイトルを5~20文字で入力してください。',
			),
		'content' => array(
			'rule' => array('between',5,300),
			'required' => TRUE,
			'message' => '本文を5~300文字で入力してください。',
			),
		);
}