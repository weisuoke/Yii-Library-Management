<?php

namespace app\models;

use Yii;
use yii\base\Model;

class AnotherBookAddForm extends Model
{
	public $title;
	public $author;

	public static function tableName()
	{
		return 'book';
	}

	public function rules()
	{
		return [
			[['title', 'author'], 'required'],
		];
	}
}