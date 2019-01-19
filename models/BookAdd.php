<?php


/**
 * BookAdd 模型不关联任何数据表
 * 为 BookAddController 提供数据服务
 */

namespace app\models;

use yii\db\ActiveRecord;


class BookAdd extends ActiveRecord
{
	public static function tableName()
	{
		return 'book';
	}
}
