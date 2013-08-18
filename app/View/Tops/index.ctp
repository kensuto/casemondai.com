<?php
	echo $this->Html->css('top/top'); 
?>

<div id="mainVisual">
	<img src="/img/top/main.png">
	<div class="fbLoginBtn">
		<img src="/img/common/fb_login_btn.png">
<?php echo( $this->Facebook->logout() ); ?>
	</div>
</div>

<div id="mainContent">
	<div id="headline">
		<div id="headlineIconOrg"><img src="/img/common/icon_rct_org.png"></div>
		<h2 id="headlineRctOrgH2" style="float: left;">新着の回答</h2>
		<div id="goAll">	
			<p>
				<a href="/">>> すべての問題を見る</a>
			</p>
		</div>
	</div>
	<div class="mainContentQuestion">
		
		<div class="mainContentQuestionTitle">
			<p class="title">
				<img src="/img/common/icon_tri_gray.png" >
				<a href="/">
					&nbsp;ここに質問のタイトルが入ります。
				</a>
			</p>
			<p class="date">2013.8.2 20:59</p>
			<p class="id">ID:mkayokom</p>
		</div>
		
		<div class="mainContentQuestionContent">
			<p class="question">
				ここに質問の内容が入ります。ここに質問の内容が入ります。ここに質問の内容が入ります。ここに質問の内容が入ります。ここに質問の内容が入ります。ここに質問の内容が入ります。ここに質問の内容が入ります。ここに質問の内容が入ります。ここに質問の内容が入ります。ここに質問の内容が入ります。
			</p>
			<p class="readAll">
				<a href="/">
					続きを読む
				</a>
			</p>
		</div>
		
	<!--mainContentQuestion-->
	</div>

<!--mainContent-->
</div>


<div id="sideContent">
<!--sideContent-->
</div>


