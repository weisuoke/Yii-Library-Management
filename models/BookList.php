<?php

namespace app\models;

use yii\db\ActiveRecord;

class BookList extends ActiveRecord
{
	public static function tableName()
	{
		return 'book';
	}
}