<?php
class User extends AppModel {
 
    public $name = 'User';
    public $validate = Array(
        'email' => Array(
            'required' => Array(
                'rule' => Array('notEmpty', 'email'),
                'message' => 'メールアドレスを入力してください。'
            )
        ),
        'password' => Array(
            'required' => Array(
                'rule' => Array('notEmpty'),
                'message' => 'パスワードを入力してください。'
            )
        ),
        'role' => Array(
            'valid' => Array(
                'rule' => Array('inList', Array('admin', 'staff', 'author')),
                'message' => '権限を選択してください。',
                'allowEmpty' => false
            )
        )
    );
 
    public function beforeSave( $options=array() ) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
	
	/*deconstruct関数をModelに書かなきゃいけないんだけど書き方がわからない*/
	
	public function register_confirm() {
		$birthday = $this->request->data['User']['birthday']; 
		$this->deconstruct( 'birthday' , $birthday );

	}
	
}
?>
