<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    // метод rules() возвращает набор правил
    public function rules()
    {
        return [
            [['name','email'], 'required'],
            ['email','email'],
        ];
    }
}
