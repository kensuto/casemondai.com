
<?php
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

<table id="form">
	<tr>	
		<th class="th">ユーザーネーム</th>
		<td class="td">まっち</td>
	</tr>

	<tr>		
		<th class="th">メールアドレス</th>
		<td class="td">mkayokom@gmail.com</td>
	</tr>
	<tr>
		<th class="th">パスワード</th>
		<td class="td">**********</td>
	</tr>
	<tr>
		<th class="th">生年月日</th>
		<td class="td">1987年7月12日</td>
	</tr>
	<tr>
		<th class="th">性別</th>
		<td class="td">女性</td>
	</tr>
	<tr>
		<th class="th" id="lastSchool">最終学歴</th>
		<td class="td">
			2011年　卒業
			<br />
			青山学院大学　経営学部経営学科
		</td>
	</tr>
	<tr>
		<th class="th">お知らせ</th>
		<td class="td">お知らせメールを受信する</td>
	</tr>
</table>


<div id="btnReg2">
	<input type="image" src="../../img/registar/btnReg2.png" alt="上記の内容で登録する">
</div>

<!--div#main-->
</div>

