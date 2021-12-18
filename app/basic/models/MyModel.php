<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class MyModel extends Model
{
    public $name;
    public $size;
    public $enabled;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['name', 'required'],
            ['name', 'string', 'min' => 3, 'max' => 12],
            ['enabled', 'boolean'],
            ['size', 'integer'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name of product',
            'enabled' => 'Product enabled?',
            'size' => 'Size of product',
        ];
    }
}
