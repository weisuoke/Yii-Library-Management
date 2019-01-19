<?php

namespace app\models;

use yii\db\ActiveRecord;

class AnotherBook extends ActiveRecord
{
	public static function tableName()
	{
		return 'book';
	}
}