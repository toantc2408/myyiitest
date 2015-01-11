<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $message;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            [['message'], 'default'],
        ];
    }
}