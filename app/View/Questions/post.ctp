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

       	  
<?php
	echo $this->Form->create('Question');
	echo $this->Form->text('questionTitle');
	echo $this->Form->text('questionContent');
	echo $this->Form->end('投稿');
?>


<!--div#mainColumn-->
</div>

<!--右カラム-->
<div id="rightColumn">
	<p>右カラム</p>
<!--div#rightColumn-->
</div>