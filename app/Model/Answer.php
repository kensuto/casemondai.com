<?php

App::uses('AppModel', 'Model');
 
class Answer extends AppModel {
	public $name = 'Answer';    
	
	public function get_answer_count()
	{
		$params = array(
			'fields'	=> array( 'question_id', 'count(id) as ans_count' ),
			'group'		=> array( 'question_id'),
		);
		$res = $this->find( 'all', $params );
		//$res[0]['Answer']['question_id']=
		$ans_counts = array();
//		debug( $res );
		foreach( $res as $val ){
			$ans_counts[$val['Answer']['question_id']] = $val[0]['ans_count'];
		}
		return( $ans_counts );
	}
	
	
	public function top()
	{
		$params = array(
			'fields' => array( 'Answer.created', 'Question.title', 'Answer.answer', 'User.name','Question.id'),
			'joins' => array( 
				array(
					'table' => 'questions',
					'alias' => 'Question',
 					'type' => 'LEFT',
					'conditions' => array( 'Question.id=Answer.question_id')
				),
				array(
					'table' => 'users',
					'alias' => 'User',
					'type' => 'LEFT',
					'conditions' => array( 'User.id=Answer.user_id' )
				)
			),
			'order' => array( 'Answer.created DESC'),
			'limit' => 5,
		);
		$res = $this->find( 'all', $params );
//		debug( $res );
		return( $res );

	}
		
	
}
?>