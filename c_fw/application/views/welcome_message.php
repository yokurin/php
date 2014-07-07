<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>dbに書き込みテスト</title>

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
	</style>
</head>
<body>

<div id="container">
	<h1><p>登録する商品の情報を入力して下さい。</p></h1>

<div id="body">

<?php

class view
{
	public function test()
    {
    	
        
		$data = array(
					'id' => 'id',
					'item_name' => 'item_name',
					'price' => 'price',
					'keyword' => 'keyword',
					);
		$this->load->view('model',$data);
    }
  
	/*echo "id";
	echo "<br/>";
	echo form_input('id','');
	echo "<br/>";
	
	echo "item_name";echo "<br/>";
	echo form_input('item_name','');echo "<br/>";
	
	echo "price";echo "<br/>";
	echo form_input('price','');echo "<br/>";
	
	echo "keyword";echo "<br/>";
	echo form_input('keyword','');echo "<br/>";
	echo form_submit('setup','送信');
	 */
}
?>
		<!--
		<dl>	
			<dt>
				<label for="maker_id">メーカーID</label>

			</dt>
			<dd>
				<input name="maker_id" type="text" id="maker_id" size="10" maxlength="10" />	
			</dd>

			<dt>
				<label for="item_name">商品名</label>

			</dt>
			<dd>
				<input name="item_name" type="text" id="item_name" size="35" maxlength="255" />
			</dd>	

			<dt>
				<label for="price">価格</label>

			</dt>
			<dd>
				<input name="price" type="text" id="price" size="10" maxlength="10" />
			円</dd>

			<dt>
				<label for="keyword">キーワード</label>

			</dt>
			<dd>	
				<input name="keyword" type="text" id="keyword" size="50" maxlength="255" />
			</dd>
		</dl>
		 ?>
		<?php form_submit('submit','送信する')?>
	</form>
	-->
</div>

	<p class="footer">copyright @2014</p>
</div>

</body>
</html>