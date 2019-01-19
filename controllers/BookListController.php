<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\BookList;

class BookListController extends Controller
{
	public function actionIndex()
	{
		$query = BookList::find();

		$pagination = new Pagination([
			'defaultPageSize' => 10,
			'totalCount' => $query->count(),
		]);

		$books = $query->orderBy('id')
			->offset($pagination->offset)
			->limit($pagination->limit)
			->all();

		return $this->render('index', [
			'books' => $books,
			'pagination' => $pagination
		]);
	}
}

