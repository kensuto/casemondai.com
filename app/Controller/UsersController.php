<?php
class UsersController extends AppController {
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


	/*====================
		会員情報入力
	 *====================*/
	public function register() {
			
		}

	



	/*====================
		会員情報確認
	 *====================*/

	public function register_confirm() {
		if ($this->request->is('post')) {
			$this->request->data['User']['grd_year'] = $this->request->data['User']['grd_year']['year']; //なぜかpostしたgrd_yearが配列で出力されるので、単体で代入
			$user = $this->request->data;	
			$this->set('user',$user);
		}
	}
			
	


	/*====================
		登録完了
	 *====================*/

	public function register_done() {
					$this->User->save($this->request->data);
			$res = $this->User->save($this->request->data);
				if ($res) {
						$last_id = $this->User->getLastInsertID();
						$confirm = $this->User->find( 'first', array( 'conditions' => array( 'User.id' => $last_id ) ) );//user_idでデータを検索して代入
						$this->set('confirm',$confirm);//viewに渡している
						$this->redirect(array('controller' => 'user', 'action' => 'register_confirm'));
				}	
	}


}//閉じ　class UsersController extends AppController


?>