<?php
	echo $this->Html->css('question/post'); 
?>       

<!--パンくず-->
<div id="pankuzu">
	<p>
		<a href="/">トップ</a>&nbsp;&nbsp;>&nbsp;&nbsp;ケース問題を投稿する
	</p>
</div>

<!--見出し-->
<div id="headlineRctOrg">
	<p>
		<div id="headlineIconOrg">
		<img src="../../img/common/icon_rct_org.png">
		</div>
		<h2 id="headlineRctOrgH2">ケース問題を投稿する</h2>
	</p>
</div>

<!--メインカラム-->
<div id="mainColumn">

	<div id="intro">
		<p>あなたが投稿したケース問題に解答がつきます。</p>
	</div>
	
	<div id="questionTitle">
		<div id="title">
			<p>タイトル</p>
		</div>
		<div id="titleText">
			<?php
				echo $this->Form->create('Question');
				echo $this->Form->text('questionTitle');
			?>
		</div>
	<!--div#title-->
	</div>
	
	<div id="questionContent">
		<div id="content">
			<p>本文</p>
		</div>
		<div id="contentText">
			<?php echo $this->Form->text('questionContent'); ?>
		</div>
		<div id="postQuestionBtn">
			<?php echo $this->Form->submit('../../img/qDetail/btn_post.png'); ?>
		</div>	
			<?php echo $this->Form->end(); ?>
	</div>
	


<!--div#mainColumn-->
</div>

<!--右カラム-->
<div id="rightColumn">
	<p>右カラム</p>
<!--div#rightColumn-->
</div>