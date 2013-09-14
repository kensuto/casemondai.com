<?php
class UsersController extends AppController
{
	var	$components = array('Auth');
 
	function beforeFilter()
	{

		$this->Auth->authenticate = array('Facebook');

		$this->Auth->allow( 
			'login', 
			'fb_login', 
			'callback', 
			'logout', 
			'register', 
			'register_confirm', 
			'register_done' 
		);
		$this->Auth->loginRedirect = '/users/index/';
		$this->Auth->logoutRedirect = '/';
		$this->Auth->loginError = 'ユーザ名もしくはパスワードに誤りがあります';
		$this->Auth->authError = 'アクセス権限がありません。';

 
		parent::beforeFilter();
	}
 
	public function index()
	{
		$user = $this->Auth->user();
debug( $user );
		if(isset($user['Member']['user_id'])) {
			$this->set('title_for_layout', $user['Member']['user_name'] . 'さんのマイページ');

		} else {
			$this->set('title_for_layout', 'ゲストさんのマイページ');
		}
	}
	
	public function login(){
	}

	public function fb_login(){
		$user = $this->Auth->user();

//debug( $user );
		if(isset($user['Member']['user_id'])) {
			$this->redirect( $this->Auth->loginRedirect );

		}else{
//debug( 'Auth->login' );
			$this->Auth->login();
			$this->autoRender = false;
		}
	}

	public function callback(){
//debug( 'callback' );
		$this->autoRender = false;
		$user = $this->Auth->identify( $this->request, $this->response );
	}
 
	public function logout()
	{
		$user = $this->Auth->user();
//debug( $user );
		if($user['Member']['user_id']) {
//			$this->autoRender = false;
			$this->Auth->logout();
//debug( $user );
		}
//		$this->redirect( $this->Auth->logoutRedirect );
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
}
