
<div id="headerLine">
</div>

<div id="headerContainer">
	<div id="headerLogo">
		<a href="/">
		<img src="/img/common/logo.png" alt="ケース問題ドットコム | ケース問題の例題と解答例の投稿サイト">
		</a>	
	</div>
	
	<h1>ケース問題の例題と解答例の投稿サイト</h1>
	
	
	<div id="headerNavi">
	<ul>
		<li>
		<img src="/img/common/icon_tri_gray.png">
		<h2>
<?php
			echo(
				$this->Html->link(
					'問題を投稿する',
					array(
						'controller' => 'questions',
						'action'     => 'post',
					),
					array('escape' => false)
				)
			);
?>

		</h2>
		</li>
		<li>
		<img src="/img/common/icon_tri_gray.png">
		<h2>
<?php
			echo(
				$this->Html->link(
					'会員登録',
					array(
						'controller' => 'users',
						'action'     => 'register',
					),
					array('escape' => false)
				)
			);
?>
		</h2>
		</li>
		<li>
		<img src="/img/common/icon_tri_gray.png">
		<h2>
<?php
			echo(
				$this->Html->link(
					'ログイン',
					array(
						'controller' => 'users',
						'action'     => 'login',
					),
					array('escape' => false)
				)
			);
?>
		</h2>
		</li>
	</ul>
	</div>

<!--headerContainer-->
</div>