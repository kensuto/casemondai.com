

<?php
	echo $this->Html->css('user/login'); 
?>

<div id="loginContainer">
	<div id="intro">
		<p>ケース問題.comは、外資系戦略コンサルティングファームや外資系投資銀行の面接で必須のケース問題の例題と解答例を多数掲載しています。</p>
	</div>
		
	<div id="left">
		<div id="headlineRctOrg">
			<p>
			<div id="headlineIconOrg">
			<img src="../../img/common/icon_rct_org.png">
			</div>
			<h2 id="headlineRctOrgH2">新規登録はこちら</h2>
			</p>
		</div>
		
		<div class="content">
			<div id="invite">
				<p>会員登録（無料）をすると、回答を投稿できます。</p>
			</div>
			<div class="btnLayout">
				<img src="../../img/common/btn_reg.png">
			</div>
		</div>
	<!--div#left-->
	</div>
	
	<div id="right">
		<div id="headlineRctOrg">
			<p>
			<div id="headlineIconOrg">
			<img src="../../img/common/icon_rct_org.png">
			</div>
			<h2 id="headlineRctOrgH2">ログインはこちら</h2>
			</p>
		</div>
		
		<div class="content">
		    <?php echo $this->Session->flash('auth'); ?>
		<?php
			echo( $this->Facebook->login() );
		?>
		    <?php echo $this->Form->create('User', Array('url' => '/users/login')); ?>
		    <table>
		    	<tr>
		    		<th>メールアドレス</th>
		            <td><?php echo $this->Form->input('email', Array('label' => false)); ?></td>
		    	</tr>
		    	<tr>
		    		<th>パスワード</th>
		            <td><?php echo $this->Form->input('password', Array('label' => false)); ?></td>
		    	</tr>
		    </table>
		    <?php echo $this->Form->end('ログイン'); ?>

		   	<div class="btnLayout">
				<img src="../../img/common/btn_login.png">
			</div>
			
			<div id="or">
				<img src="../../img/registar/or.png">
			</div>
			
		   	<div class="btnLayout">
				<img src="../../img/common/fb_login_btn.png">
			</div>

		</div>
	<!--div#right-->
	</div>
	
<!-- div#loginContainer#-->
</div>