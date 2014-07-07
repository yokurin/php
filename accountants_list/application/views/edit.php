<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>税理士管理サイト</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	input[type=text]{
		width:95%;
		height:20px;
	}
	input[id = button]{
 		
		width:90px;
		height:20px;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>編集ページ</h1>

	<div id="body">
    <form id="form1" name="form1" method="post" action="update">
    <table width="100%" border="1">
  <tr>
  	<?php foreach ($records as $row): ?>
    <th scope="row">ID</th>
    <td><label for="id"></label>
      <input name="id" type="text" id="id" value="<?=$row['id']?>"></td>
  </tr>
  <tr>
    <th scope="row">事務所名</th>
    <td><label for="jimu_name"></label>
      <input name="jimu_name" type="text" id="jimu_name" value="<?=$row['jimu_name']?>"></td>
  </tr>
  <tr>
    <th scope="row">先生名</th>
    <td><label for="teac_name"></label>
      <input name="teac_name" type="text" id="teac_name" value="<?=$row['teac_name']?>"></td>
  </tr>
  <tr>
    <th scope="row">住所</th>
    <td><label for="address"></label>
      <input name="address" type="text" id="address" value="<?=$row['address']?>"></td>
  </tr>
  <tr>
    <th scope="row">電話場号</th>
    <td><label for="tel"></label>
      <input name="tel" type="text" id="tel" value="<?=$row['tel']?>"></td>
  </tr>
  <tr>
    <th scope="row">FAX</th>
    <td><label for="fax"></label>
      <input name="fax" type="text" id="fax" value="<?=$row['fax']?>"></td>
  </tr>
  <tr>
    <th scope="row">携帯電話</th>
    <td><label for="mob_tel"></label>
      <input name="mob_tel" type="text" id="mob_tel" value="<?=$row['mob_tel']?>"></td>
  </tr>
  <tr>
    <th scope="row">メール</th>
    <td><label for="mail"></label>
      <input name="mail" type="text" id="mail" value="<?=$row['mail']?>"></td>
  </tr>
  <tr>
    <th scope="row">事務所HP</th>
    <td><label for="hp_url"></label>
      <input name="hp_url" type="text" id="hp_url" value="<?=$row['hp_url']?>"></td>
  </tr>
  <tr>
    <th scope="row">設立</th>
    <td><label for="seturitsu"></label>
      <input name="seturitsu" type="text" id="seturitsu" value="<?=$row['seturitsu']?>"></td>
  </tr>
  <tr>
    <th scope="row">税理士資格の取得時期</th>
    <td><label for="sikaku_get"></label>
      <input name="sikaku_get" type="text" id="sikaku_get" value="<?=$row['sikaku_get']?>"></td>
  </tr>
  <tr>
    <th scope="row">税理士以外の保有資格</th>
    <td><label for="other_sikaku"></label>
      <input name="other_sikaku" type="text" id="other_sikaku" value="<?=$row['other_sikaku']?>"></td>
  </tr>
  <tr>
    <th scope="row">対応エリア</th>
    <td><label for="area"></label>
      <input name="area" type="text" id="area" value="<?=$row['area']?>"></td>
  </tr>
  <tr>
    <th scope="row">得意業種</th>
    <td><label for="tokui_gyo"></label>
      <input name="tokui_gyo" type="text" id="tokui_gyo" value="<?=$row['tokui_gyo']?>"></td>
  </tr>
  <tr>
    <th scope="row">得意分野</th>
    <td><label for="tokui_bun"></label>
      <input name="tokui_bun" type="text" id="tokui_bun" value="<?=$row['tokui_bun']?>"></td>
  </tr>
  <tr>
    <th scope="row">対応可能ソフト</th>
    <td><label for="software"></label>
      <input name="software" type="text" id="software" value="<?=$row['software']?>"></td>
  </tr>
  <tr>
    <th scope="row">事務所人数</th>
    <td><label for="jimu_amount"></label>
      <input name="jimu_amount" type="text" id="jimu_amount" value="<?=$row['jimu_amount']?>"></td>
  </tr>
  <tr>
    <th scope="row">その他資格保有者</th>
    <td><label for="other_sikaku_jimu"></label>
      <input name="other_sikaku_jimu" type="text" id="other_sikaku_jimu" value="<?=$row['other_sikaku_jimu']?>"></td>
  </tr>
  <tr>
    <th scope="row">最寄駅</th>
    <td><label for="near_st"></label>
      <input name="near_st" type="text" id="near_st" value="<?=$row['near_st']?>"></td>
  </tr>
  <tr>
    <th scope="row">生年</th>
    <td><label for="birthday"></label>
      <input name="birthday" type="text" id="birthday" value="<?=$row['birthday']?>"></td>
  </tr>
  <tr>
    <th scope="row">経歴</th>
    <td><label for="career"></label>
      <input name="career" type="text" id="career" value="<?=$row['career']?>"></td>
  </tr>
  <tr>
    <th scope="row">その他</th>
    <td><label for="other_info"></label>
      <input name="other_info" type="text" id="other_info" value="<?=$row['other_info']?>"></td>
  </tr>
  
	
		<div align="right"><input type="submit" name="buttton" id="button" value="編集する" /></div>
		
　
  
  <?php endforeach; ?>
</table>
</form>
	
	</div>

	<p class="footer"></p>
</div>

</body>
</html>