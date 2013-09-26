<?php
	echo $this->Html->css('user/register'); 
?>

<!--パンくず-->
<div id="pankuzu">
	<p>
		<a href="/">トップ</a>&nbsp;&nbsp;>&nbsp;&nbsp;会員情報入力
	</p>
</div>

<!--見出し-->
<div id="headlineRctOrg">
	<p>
		<div id="headlineIconOrg">
		<img src="../../img/common/icon_rct_org.png">
		</div>
		<h2 id="headlineRctOrgH2">会員情報入力</h2>
	</p>
</div>

<!--中身の部分はじまり-->
<div id="main">

<!--プログレスバー-->
<div id="step">
	<img src="../../img/registar/step1.png">
</div>

<!--導入-->
<div id="explanation">
	<p>会員登録（無料）をしていただくと、すべてのコンテンツをご利用いただけます。</p>
</div>
<dl id="merits">
	<div class="merit">
		<dt><img src="../../img/common/check.png"></dt>
		<dd>例題に解答を投稿することができます。</dd>
	</div>
	<div class="merit">
		<dt><img src="../../img/common/check.png"></dt>
		<dd>自分が投稿した解答を評価してもらえます。</dd>
	</div>
</dl>


<!--フォームここから-->
<table id="form">
	<?php echo $this->Form->create('User',array('type'=>'post','action'=>'register')); ?>
	<tr>	
		<th class="th">ユーザーネーム</th>
		<td class="td"><?php echo $this->Form->text('User.name',array('maxlength'=>'20','placeholder'=>'半角英数字で3文字以上')); ?><span style="color: #535362; font-size: 10px;">&nbsp;&nbsp;※投稿に表示されます</span></td>
	</tr>
	<tr>		
		<th class="th">メールアドレス</th>
		<td class="td"><?php echo $this->Form->text('User.email',array('maxlength'=>'30','placeholder'=>'sample@casemondai.com')); ?></td>
	</tr>
	<tr>
		<th class="th">パスワード</th>
		<td class="td"><?php echo $this->Form->password('User.password',array('maxlength'=>'20','placeholder'=>'半角英数字で6文字以上')); ?></td>
	</tr>
	<tr>
		<th class="th">生年月日</th>
		<td class="td">
			<?php echo $this->Form->year('User.birthday',2000,1970,array('empty'=>FALSE)); ?>
				年
			<?php echo $this->Form->month('User.birthday',array('empty' => FALSE , 'monthNames' => FALSE)); ?>
				月
			<?php echo $this->Form->day('User.birthday',array('empty' => FALSE , )); ?>
				日
		</td>
	</tr>
	<tr>
		<th class="th">性別</th>
		<td class="td">
			<?php echo $this->Form->radio('sex',array(' 男性',' 女性'),array('label'=>TRUE,'legend'=>FALSE,'separator'=>'　 ','value'=>'0')); ?>
		</td>
	</tr>
	<tr>
		<th class="th" id="lastSchool">最終学歴</th>
		<td class="td">
			<?php echo $this->Form->year('User.grd_year',date('Y')+3,2000,array('empty' => FALSE)); ?>
			年
			<?php echo $this->Form->select('User.grd_status',array('卒業','卒業見込み','中退'),array('empty' => FALSE)); ?>
			<br />
			<br />
			<?php echo $this->Form->text('User.school',array('maxlength'=>'30','placeholder'=>'学校名')); 
				  echo $this->Form->select('User.school_type',array('大学','大学院','短期大学','高等学校・専門学校'),array('empty' => FALSE));
				  echo $this->Form->text('User.major',array('maxlength'=>'30','placeholder'=>'学部・専攻'));
			?>
		</td>
	</tr>
	<tr>
		<th class="th">お知らせ</th>
		<td class="td"><?php echo $this->Form->checkbox('User.optin',array('checked' => TRUE)); ?>&nbsp;&nbsp;お知らせメールを受信する</td>
	</tr>
</table>


	<div id="mention"><a href="/" target="_blank">利用規約</a>と<a href="/" target="_blank">プライバシーポリシー</a>をご確認のうえ、「利用規約に同意して確認に進む」を押してください。</div>
	
	<div id="btnReg1">
	<?php 
		echo $this->Form->submit("../../img/registar/btnReg1.png");
	?>
	</div>
	<?php
		echo $this->Form->end(); 
	?>

<!--フォームここまで-->







<!--div#main-->
</div>
