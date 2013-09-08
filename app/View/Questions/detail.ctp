


<?php
	echo $this->Html->css('question/detail'); 
?>


<!--パンくず-->
<div id="pankuzu">
	<p>
		<a href="/">トップ</a>&nbsp;&nbsp;>&nbsp;&nbsp;日本で1日に使われるトイレットペーパーの消費量は？
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
<div id"mainColumn">

	<!--問題文-->
	<div id="question">
		<div id="questionHeader">
	    	<div id="questionHeaderTitle">
			<h2 id="questionHeaderTitleH2"><?php echo htmlspecialchars($detail['Question']['questionTitle']); ?></h2>
			</div>
			<div id="questionHeaderCount">
	        （２件の回答）
	        </div>
		<!--div#questionHeader-->
		</div>
		
		<div id="questionContent">
	日本全国で１日に使用されるトイレットペーパーの消費量が知りたい。どんな方法で推測したら良いだろうか？
		<!--div#questionContent-->
		</div>
		
		<div id="questionFooter">
	ID:mkayokom
	2013.5.8 20:53
		<!--div#questionFooter-->
		</div>
	
	<!--div#question-->
	</div>
    
    
    <!--回答を投稿する-->
    <div id="postAnswer">
        <p><h2 id="headlineOrgH2">解答を投稿する</h2></p>
        <div id="postAnswerTextbox">
            <form method="POST" action="xxx.cgi">
                <textarea name="answer" style="width: 670px; height: 150px;"></textarea>
                <br />
                <div id="postAnswerBtn">
                <input type="image" src="../../img/qDetail/btn_post.png" value="投稿">
                </div>
            </form>
        </div>
    <!--div#postAnswer-->
    </div>
    
    
    <!--他の人の回答を見る-->
    <div id="showAnswers">
        <p><h2 id="headlineOrgH2">他の人の解答例を見る</h2></p>
        <div id="answer">
          <div id="answerHeader">
          	<div class="star">
 				<div class="star-rect" onmousemove="star.start(event, this, 1);"><ul><li>&nbsp;</li><li style="width: 80%;">&nbsp;</li></ul></div>
 				<div class="star-text">
 					<span><span id="starStars1">4.0</span>/5</span>
  					<span><span id="starUsers1">10</span>人が評価しています</span>
				</div>
            	<img src="../../img/qDetail/star_yelw.png" />
                <img src="../../img/qDetail/star_yelw.png" />
                <img src="../../img/qDetail/star_yelw.png" />
                <img src="../../img/qDetail/star_yelw.png" />
                <img src="../../img/qDetail/star_gray.png" />
               	<!--div#star-->
               	</div>
             
                ID:mkayokom
                2013.5.8 20:53
            <!--div#answerHeader-->
            </div>
            <div id="answerContent">
                トイレットペーパーの消費量が何によって決まるかを考えます。トイレットペーパーの消費量は、トイレにいく人間の数×その人間が１日にトイレに行く回数×１回に使用する紙の量で求められます。以後、この３つのファクターを推測していく。トイレットペーパーの消費量が何によって決まるかを考えます。トイレットペーパーの消費量は、トイレにいく人間の数×その人間が１日にトイレに行く回数×１回に使用する紙の量で求められます。以後、この３つのファクターを推測していく。
            トイレットペーパーの消費量が何によって決まるかを考えます。トイレットペーパーの消費量は、トイレにいく人間の数×その人間が１日にトイレに行く回数×１回に使用する紙の量で求められます。以後、この３つのファクターを推測していく。
            トイレットペーパーの消費量が何によって決まるかを考えます。トイレットペーパーの消費量は、トイレにいく人間の数×その人間が１日にトイレに行く回数×１回に使用する紙の量で求められます。以後、この３つのファクターを推測していく。
            トイレットペーパーの消費量が何によって決まるかを考えます。トイレットペーパーの消費量は、トイレにいく人間の数×その人間が１日にトイレに行く回数×１回に使用する紙の量で求められます。以後、この３つのファクターを推測していく。
            
            <!--div#answerContent-->
            </div>
        <!--div#answer-->
        </div>
    <!--div#showAnswers-->
    </div>

<!--div#mainColumn-->
</div>

<!--右カラム-->
<div id="rightColumn">
	<p>右カラム</p>
<!--div#rightColumn-->
</div>

