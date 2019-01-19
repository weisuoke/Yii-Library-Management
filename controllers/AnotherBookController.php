<?php

/**
 * 图书添加功能
 *
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\AnotherBook;
use app\models\AnotherBookAddForm;
use Yii;

class AnotherBookController extends Controller
{
	public function actionList()
	{
		$query = AnotherBook::find();

		$pagination = new Pagination([
			'defaultPageSize' => 10,
			'totalCount' => $query->count(),
		]);

		$books = $query->orderBy('id')
			->offset($pagination->offset)
			->limit($pagination->limit)
			->all();

		// var_dump($books);
		return $this->render('list', [
			'books' => $books,
			'pagination' => $pagination
		]);
	}

	public function actionAdd()
	{
		$model = new AnotherBookAddForm;
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			$book = new AnotherBook();
			$book->title = $model['title'];
			$book->author = $model['author'];
			$book->save();
			$this->redirect(array('list', 'page'=>1));
		} else {
			return $this->render('add', [
				'model' => $model
			]);
		}
	}

	public function actionEdit()
	{
		$model = new AnotherBookAddForm;
		$id = Yii::$app->request->get('id');
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			$book = AnotherBook::find()->where(['id' => $id])->one();
			$book->author = $model->author;
			$book->title = $model->title;
			$book->save();
			$this->redirect(array('list', 'page'=>1));
		} else {
			$book = AnotherBook::find()->where(['id' => $id])->one();
			return $this->render('edit', [
				'model' => $model,
				'book' => $book
			]);
		}
	}

	public function actionDelete()
	{
		$id = Yii::$app->request->get('id');
		$book = AnotherBook::find()->where(['id' => $id])->one();
		$book->delete();
		$this->redirect(array('list', 'page'=>1));
	}
}

