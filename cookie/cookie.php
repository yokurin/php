<?php
	if(isset($_COOKIE['my_id']))
	{
		$myID = $_COOKIE['my_id'];
	}
	else
	{
		$myID = '';
	}
?> 

<form action="cookie_save.php" method="post">
	<dl>
		<dt>ID</dt>
		<dd>
			<input type="text" name="my_id" id ="my_id" value="<?php echo $myId; ?>"/>
		</dd>
		<dt>パスワード</dt>
		<dd>
		<p><input type="password" name="password" id="password" />
		</dd>

		<dt>IDの保存</dt>
	</dl>
	<p>
		<input type="checkbox" name="save" id="save" value="on" />
		<label for="save">IDを保存する</label>
	</p>
	
	<input type="submit" value="送信する" />
</form>



