


<?php
	echo $this->Html->css('question/detail'); 
?>

<?php 
	if (isset($question,$answers)):
?><!--$questionに値が含まれているか-->
		
<!--パンくず-->
<div id="pankuzu">
	<p>
		<a href="/">トップ</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="/questions/">ケース問題一覧</a>&nbsp;&nbsp;>&nbsp;&nbsp;<?php echo htmlspecialchars($question['Question']['title']); ?>
	</p>
</div>

<!--見出し-->
<div id="headlineRctOrg">
	<p>
		<div id="headlineIconOrg">
		<img src="../../img/common/icon_rct_org.png">
		</div>
		<h2 id="headlineRctOrgH2">例題と解答例</h2>
	</p>
</div>


<!--メインカラム-->
<div id="mainColumn">

	<!--問題文-->
	<div id="question">
		<div id="questionHeader">
	    	<div id="questionHeaderTitle">
<<<<<<< HEAD
				<h2 id="questionHeaderTitleH2"><?php echo htmlspecialchars($detail['Question']['title']); ?></h2>
			</div>
			<div id="questionHeaderCount">
	        	（２件の回答）
=======
				<h2 id="questionHeaderTitleH2"><?php echo htmlspecialchars($question['Question']['title']); ?></h2>
			</div>
			<div id="questionHeaderCount">
	        	<p>(<a href="#showAnswers"><?php echo count($answers); ?>件の回答</a>）</p>
>>>>>>> 3802c9aab5c81968f45147aaedcf7d72a9180eb1
	        </div>
		<!--div#questionHeader-->
		</div>
		
		<div id="questionContent">
<<<<<<< HEAD
			<?php echo htmlspecialchars($detail['Question']['content']); ?>	
=======
		<?php echo htmlspecialchars($question['Question']['content']); ?>	
>>>>>>> 3802c9aab5c81968f45147aaedcf7d72a9180eb1
		<!--div#questionContent-->
		</div>
		
		<div id="questionFooter">
			<?php echo htmlspecialchars($question['Question']['user_id']); ?>
			&nbsp;&nbsp;
			<?php echo htmlspecialchars($question['Question']['created']); ?>
		<!--div#questionFooter-->
		</div>
	
	<?php endif; ?><!--$questionに値が含まれているか-->
	<!--div#question-->
	</div>
    
    
    <!--解答を投稿する-->
    <div id="postAnswer">
        <p><h3 id="headlineOrgH3">解答を投稿する</h3></p>
        
        <div id="postAnswerTextbox">
<?php
        	echo $this->Form->create('Answer',array('type'=>'post','action'=>'postAnswer'));
			echo $this->Form->textarea('answer',array('style'=>'width:670px;','rows'=>'5'));
?>
		<div id="postAnswerBtn">
			<?php echo $this->Form->submit('../../img/qDetail/btn_post.png'); ?>
		</div>	
			<?php echo $this->Form->end(); ?>
		</div>
    <!--div#postAnswer-->
    </div>
    
    
    
    <!--他の人の回答を見る-->
    <div id="showAnswers" name="showAnswers" >
        <p><h3 id="headlineOrgH3">他の人の解答例を見る</h3></p>
			
			<!--<?php print_r($answers); ?>-->

<?php		
				for($i = 0; $i < count($answers); $i++) {
					$answer = $answers[$i]['Answer'];
?>
        	<div class="answer">
						<div class="answerHeader">
							<div class="answerName">
								<?php echo $answer['user_id']; ?>
							</div>
							<div class="answerCreated">
								<?php echo $answer['created']; ?>
							</div>			
						</div>						
						<div class="answerContent">
							<?php echo $answer['answer']; ?>
						</div>
        	<!-- div#answer-->
        	</div>
<?php						
				}
?>	       
	        
    <!--div#showAnswers-->
    </div>


<!--div#mainColumn-->
</div>



<!--右カラム-->
<div id="rightColumn">
	<p>右カラム</p>
<!--div#rightColumn-->
</div>