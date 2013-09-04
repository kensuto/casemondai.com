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
		<dd>例題に回答を投稿することができます。</dd>
	</div>
	<div class="merit">
		<dt><img src="../../img/common/check.png"></dt>
		<dd>自分が投稿した解答を評価してもらえます。</dd>
	</div>
</dl>

<!--フォームここから-->
<table id="form">
	<tr>	
		<th class="th">ユーザーネーム</th>
		<td class="td"><input type="text" name="userName" class="textarea" maxlength="20" placeholder="半角英数字で3文字以上" ><span style="color: #535362; font-size: 10px;">&nbsp;&nbsp;※投稿に表示されます</span></td>
	</tr>

	<tr>		
		<th class="th">メールアドレス</th>
		<td class="td"><input type="email" name="mailAddress" class="textarea" maxlength="30" placeholder="sample@casemondai.com"></td>
	</tr>
	<tr>
		<th class="th">パスワード</th>
		<td class="td"><input type="password" name="password" class="textarea" maxlength="20" placeholder="半角英数字で6文字以上"></td>
	</tr>
	<tr>
		<th class="th">生年月日</th>
		<td class="td">
			<select name="birthYear" class="selectbox">
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
			</select>
				年
			<select name="birthMonth" class="selectbox">
				<option value=""></option>
			</select>
				月
			<select name="birthDay">
				<option value=""></option>
			</select>
				日
		</td>
	</tr>
	<tr>
		<th class="th">性別</th>
		<td class="td">
			<input type="radio" name="sex" value="male">&nbsp;男性&nbsp;&nbsp;　
			<input type="radio" name="sex" value="female">&nbsp;女性
		</td>
	</tr>
	<tr>
		<th class="th" id="lastSchool">最終学歴</th>
		<td class="td">
			<select name="graduateYear" class="selectbox">
				<option value="2015">2015</option>
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
			</select>
			年
			<select name="graduateStatus" class="selectbox">
				<option value="graduated">卒業</option>
				<option value="expected">卒業見込み</option>	
				<option value="dropout">中退</option>
			</select>
			<br />
			<br />
			<input type="text" name="schoolName" class="textarea" id="schoolName" maxlength="20" placeholder="学校名"> 
			<select name="schoolType" class="selectbox">
				<option value="college">大学</option>
				<option value="graduate">大学院</option>
				<option value="juniorCollege">短期大学</option>
				<option value="highSchool">高等学校・専門学校</option>
			</select>
			<input type="text" name="major" class="textarea" maxlength="30" placeholder="学部・専攻">
		</td>
	</tr>
	<tr>
		<th class="th">お知らせ</th>
		<td class="td"><input type="checkbox" name="optIn" value="on" checked="checked">&nbsp;&nbsp;お知らせメールを受信する</td>
	</tr>
</table>

<div id="mention"><a href="/" target="_blank">利用規約</a>と<a href="/" target="_blank">プライバシーポリシー</a>をご確認のうえ、「利用規約に同意して確認に進む」を押してください。</div>

<div id="btnReg1">
	<input type="image" src="../../img/registar/btnReg1.png" alt="利用規約に同意して確認に進む">
</div>

<!--div#main-->
</div>
