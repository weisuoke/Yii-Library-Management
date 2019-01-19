<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\Breadcrumbs;
use app\assets\AnotherBookAsset;
AnotherBookAsset::register($this);
?>

<?php
	$page = Yii::$app->request->get('page');
	$currentPage = $page ? $page : 1;
?>
<?php
echo Breadcrumbs::widget([
    'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
    'links' => [
        [
            'label' => '图书',
            'url' => ['another-book/list'],
            'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        ['label' => '列表', 'url' => ['another-book/list']]
    ],
]);
?>
<h1>图书列表</h1>
<a href="/index.php?r=another-book/add" class="J-add-book btn btn-primary">新增图书</a>
<table class="table table-striped table-bordered">
	<thead class="thead-dark">
    <tr>
			<th scope="col">序号</th>
			<th scope="col">书名</th>
			<th scope="col">作者</th>
			<th scope="col">操作</th>
    </tr>
  </thead>
  <tbody>
		<?php foreach ($books as $key=>$book): ?>	
			<tr>
			  <td>
			     <?= $key=($key+1) + (($currentPage - 1) * $pagination->defaultPageSize); Html::encode("{$key}") ?>
			  </td>
			  <td>
			     <?= Html::encode("{$book->title}") ?>
			  </td>
			  <td>
			   	<?= Html::encode("{$book->author}") ?>
			  </td>
			  <td>
			  		<a href="/index.php?r=another-book/edit&id=<?= Html::encode("{$book->id}") ?>">编辑</a>
			  		<a href="/index.php?r=another-book/delete&id=<?= Html::encode("{$book->id}") ?>">删除</a>
			  </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>