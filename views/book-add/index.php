<?php
use yii\helpers\Html;
use app\assets\BookAddAsset;
BookAddAsset::register($this);
?>
<!-- <h1>添加图书</h1> -->
<div class="panel panel-default">
	<div class="panel-heading">添加图书</div>
	<div class="panel-body">
		<form class="form-horizontal">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">图书</label>
		    <div class="col-sm-10">
		      <input type="text" class="J-book-title form-control" id="inputEmail3" placeholder="请输入图书名">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">作者</label>
		    <div class="col-sm-10">
		      <input type="text" class="J-book-author form-control" id="inputPassword3" placeholder="请输入作者">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="J-submit-add btn btn-default">添加</button>
		    </div>
		  </div>
		</form>
	</div>
</div>