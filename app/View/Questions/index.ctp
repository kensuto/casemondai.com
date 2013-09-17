<?php
	echo $this->Html->css('question/index'); 
?>

<!--パンくず-->
<div id="pankuzu">
	<p>
		<a href="/">トップ</a>&nbsp;&nbsp;>&nbsp;&nbsp;ケース問題一覧
	</p>
</div>

<!--見出し-->
<div id="headlineRctOrg">
	<p>
		<div id="headlineIconOrg">
		<img src="../../img/common/icon_rct_org.png">
		</div>
		<h2 id="headlineRctOrgH2">ケース問題一覧</h2>
	</p>
</div>


<!--メインカラム-->
<div id="mainColumn">
	
	<!--ここから、$questions配列をループして、問題の一覧情報を表示-->
<!--	<?php debug($questions); ?> -->  
	<?php foreach ($questions as $question): ?>
	<div class="question">
		<div class="questionHeader" >
			<div class="questionHeaderTitle">
				<p><?php echo $this->Html->link($question['Question']['title'],
				array('controller' => 'questions', 'action' => 'detail', $question['Question']['id'])); ?></p>
			</div>
			<div class="questionHeaderCount">
				<p>(<a href="">2件の回答</a>)</p>
			</div>
			<div class="updates">
				<div class="update">
					<p><?php echo $question['Question']['created']; ?></p>
				</div>
			</div>
		<!--div.questionHeader-->
		</div>
		<div class="questionContent">
			<p><?php echo $question['Question']['content']; ?><?php echo $this->Html->link('･･･続きを読む',array('controller' => 'questions', 'action' => 'detail', $question['Question']['id'])); ?></p>
		<!--div.questionContent-->
		</div>
	</div>
	<?php endforeach; ?>
	<?php unset($question); ?>
	
<!--div#mainColumn-->
</div>

<!--右カラム-->
<div id="rightColumn">
	
	rightcontent
<!--div#rightColumn-->
</div>
