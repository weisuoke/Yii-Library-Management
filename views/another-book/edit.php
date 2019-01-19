<?php
use yii\helpers\Html;
use app\assets\AnotherBookAsset;
use yii\widgets\Breadcrumbs;
use yii\widgets\ActiveForm;
AnotherBookAsset::register($this);
?>
<!-- <h1>添加图书</h1> -->
<?php
echo Breadcrumbs::widget([
    'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
    'links' => [
        [
            'label' => '图书',
            'url' => ['another-book/list'],
            'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        '编辑'
    ],
]);
?>
<div class="panel panel-default">
	<div class="panel-heading">编辑图书</div>
	<div class="panel-body">
		<?php $form = ActiveForm::begin(); ?>
			<?= $form->field($model, 'title')->textInput(array('value'=>$book->title))->label('图书') ?>

		  <?= $form->field($model, 'author')->textInput(array('value'=>$book->author))->label('作者') ?>

			<div class="form-group">
				<?= Html::submitButton('编辑图书', ['class' => 'btn btn-primary']); ?>
			</div>
		<?php ActiveForm::end(); ?>
	</div>
</div>