<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\assets\BookListAsset;
BookListAsset::register($this);
?>

<h1>图书列表</h1>
<button type="button" class="J-add-book btn btn-primary">新增图书</button>
<table class="table table-striped table-bordered">
	<thead class="thead-dark">
    <tr>
      <th scope="col">书名</th>
      <th scope="col">作者</th>
      <th scope="col">操作</th>
    </tr>
  </thead>
  <tbody>
		<?php foreach ($books as $book): ?>
			<tr>
			  <td>
			     <?= Html::encode("{$book->title}") ?>
			  </td>
			  <td>
			   	<?= Html::encode("{$book->author}") ?>
			  </td>
			  <td>
			  		<a href="/index.php?r=book-edit/index&id=<?= Html::encode("{$book->id}") ?>">编辑</a>
			  		<a class="J-bookItem-delete" href="#" data-id="<?= Html::encode("{$book->id}") ?>">删除</a>
			  </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>