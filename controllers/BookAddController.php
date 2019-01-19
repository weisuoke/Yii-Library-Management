<?php

/**
 * 图书添加功能
 *
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Book;
use Yii;

class BookAddController extends Controller
{
	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionAdd() {
		$post = Yii::$app->request->post();
		$book = new Book();
		$book->title = $post['title'];
		$book->author = $post['author'];
		$book->save();
		 \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		return [
			"code" => 0,
			"success" => true,
			"errorMsg" => "",
			"result" => "" 
		];
	}

	public function actionDelete() {
		$post = Yii::$app->request->post();
		$book = Book::find()->where(['id' => $post['id']])->one();
		$book->delete();
		 \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		return [
			"code" => 0,
			"success" => true,
			"errorMsg" => "",
			"result" => "" 
		];
	}

	public function actionInfo() {
		$post = Yii::$app->request->post();
		$book = Book::find()->where(['id' => $post['id']])->one();
		 \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		return [
			"code" => 0,
			"success" => true,
			"errorMsg" => "",
			"result" => $book 
		];
	}

	public function actionUpdate() {
		$post = Yii::$app->request->post();
		$book = Book::find()->where(['id'=>$post['id']])->one();
		$book->author = $post['author'];
		$book->title = $post['title'];
		$book->save();
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		return [
			"code" => 0,
			"success" => true,
			"errorMsg" => "",
			"result" => "" 
		];
	}
}

