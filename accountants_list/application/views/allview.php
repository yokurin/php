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
	
	.table_style{
	width: 100%;
	border-collapse: collapse;
	border-top: 1px solid #ccc;
	border-right: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	}
	.table_style th{
	padding: 1px; text-align: left;
	vertical-align: top;
	color: #666666;
	background: url(bg.jpg) repeat-x top left #eee;
	border-bottom: 1px dotted #999;
	border-left: 1px solid #ccc;
	}
	.table_style td{
	padding: 1px;
	border-bottom: 1px dotted #999;
	border-left: 1px solid #ccc;
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
	</style>
</head>
<body>

<div id="container">
	<h1>詳細ページ</h1>

	<div id="body">
    
    <table width="100%" class="table_style">
  <tr>
  	<?php foreach ($records as $row): ?>
    <th scope="row">ID</th>
    <td><?=$row['id']?></td>
  </tr>
  <tr>
    <th scope="row">事務所名</th>
    <td><?=$row['jimu_name']?></td>
  </tr>
  <tr>
    <th scope="row">先生名</th>
    <td><?=$row['teac_name']?></td>
  </tr>
  <tr>
    <th scope="row">住所</th>
    <td><?=$row['address']?></td>
  </tr>
  <tr>
    <th scope="row">電話場号</th>
    <td><?=$row['tel']?></td>
  </tr>
  <tr>
    <th scope="row">FAX</th>
    <td><?=$row['fax']?></td>
  </tr>
  <tr>
    <th scope="row">携帯電話</th>
    <td><?=$row['mob_tel']?></td>
  </tr>
  <tr>
    <th scope="row">メール</th>
    <td><?=$row['mail']?></td>
  </tr>
  <tr>
    <th scope="row">事務所HP</th>
    <td><?=$row['hp_url']?></td>
  </tr>
  <tr>
    <th scope="row">設立</th>
    <td><?=$row['seturitsu']?></td>
  </tr>
  <tr>
    <th scope="row">税理士資格の取得時期</th>
    <td><?=$row['sikaku_get']?></td>
  </tr>
  <tr>
    <th scope="row">税理士以外の保有資格</th>
    <td><?=$row['other_sikaku']?></td>
  </tr>
  <tr>
    <th scope="row">対応エリア</th>
    <td><?=$row['area']?></td>
  </tr>
  <tr>
    <th scope="row">得意業種</th>
    <td><?=$row['tokui_gyo']?></td>
  </tr>
  <tr>
    <th scope="row">得意分野</th>
    <td><?=$row['tokui_bun']?></td>
  </tr>
  <tr>
    <th scope="row">対応可能ソフト</th>
    <td><?=$row['software']?></td>
  </tr>
  <tr>
    <th scope="row">事務所人数</th>
    <td><?=$row['jimu_amount']?></td>
  </tr>
  <tr>
    <th scope="row">その他資格保有者</th>
    <td><?=$row['other_sikaku_jimu']?></td>
  </tr>
  <tr>
    <th scope="row">最寄駅</th>
    <td><?=$row['near_st']?></td>
  </tr>
  <tr>
    <th scope="row">生年</th>
    <td><?=$row['birthday']?></td>
  </tr>
  <tr>
    <th scope="row">経歴</th>
    <td><?=$row['career']?></td>
  </tr>
  <tr>
    <th scope="row">その他</th>
    <td><?=$row['other_info']?></td>
  </tr>
  
  <?php endforeach; ?>
</table>
    
    
	
	</div>

	<p class="footer"></p>
</div>

</body>
</html>