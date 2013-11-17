
<?php
	$user_profile_lang = Configure::read( "User" );
	echo $this->Html->css('user/register_confirm'); 
?>

<!--パンくず-->
<div id="pankuzu">
	<p>
		<a href="/">トップ</a>&nbsp;&nbsp;>&nbsp;&nbsp;会員情報確認
	</p>
</div>


<!--見出し-->
<div id="headlineRctOrg">
	<p>
		<div id="headlineIconOrg">
		<img src="../../img/common/icon_rct_org.png">
		</div>
		<h2 id="headlineRctOrgH2">会員情報確認</h2>
	</p>
</div>


<!--中身の部分はじまり-->
<div id="main">

<!--プログレスバー-->
	<div id="step">
	<img src="../../img/registar/step2.png">
	</div>

	<div id="attention">
		<p>入力した内容をご確認のうえ、「上記の内容で登録する」を押してください。</p>
	</div>
	
<!--フォームここから-->

<?php //debug($user); ?>


<table id="form">
	<?php echo $this->Form->create('User',array('type'=>'post','action'=>'register_done')); ?>
	<?php echo $this->formhidden->hiddenVars('User'); ?>
    <tr>	
		<th class="th">ユーザーネーム</th>
		<td class="td">
			<?php echo $this->Form->value('User.name'); ?>
		</td>
	</tr>

	<tr>		
		<th class="th">メールアドレス</th>
		<td class="td">
			<?php echo $this->Form->value('User.email'); ?>
		</td>
	</tr>
	<tr>
		<th class="th">パスワード</th>
		<td class="td">
			<?php echo $this->Form->value('User.password'); ?>
		</td>
	</tr>
	<tr>
		<th class="th">生年月日</th>
		<td class="td">
			<?php echo( $this->Form->Value('User.birthday')['year'] ); ?>年
			<?php echo( $this->Form->Value('User.birthday')['month'] ); ?>月
			<?php echo( $this->Form->Value('User.birthday')['day'] ); ?>日
    	</td>
	</tr>
	<tr>
		<th class="th">性別</th>
		<td class="td">
			<?php 
				echo $user_profile_lang['sex'][$this->Form->value('User.sex')]; 
			?>
		</td>
	</tr>
	<tr>
		<th class="th" id="lastSchool">最終学歴</th>
		<td class="td">
			<?php echo $user['User']['grd_year']['year']; ?>年
			<?php echo $user_profile_lang['grd_status'][$this->Form->value('User.grd_status')]; ?>
			<br />
			<?php echo $this->Form->value('User.school'); ?>
			<?php echo $user_profile_lang['school_type'][$this->Form->value('User.school_type')]; ?>
			<?php echo $this->Form->value('User.major'); ?>
		</td>
	</tr>
	<tr>
		<th class="th">お知らせ</th>
		<td class="td">
			<?php echo $user_profile_lang['optin'][$this->Form->value('User.optin')]; ?>
		</td>
	</tr>
</table>


<div id="btnReg2">
	<?php 
		echo $this->Form->submit("../../img/registar/btnReg2.png");
		echo $this->Form->end(); 
	?>
</div>

<!--div#main-->
</div>

