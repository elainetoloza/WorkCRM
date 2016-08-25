<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rolempleado".
 *
 * @property string $id
 * @property string $nombre
 * @property string $estatus
 */
class Rolempleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rolempleado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nombre', 'estatus'], 'required'],
            [['id', 'nombre', 'estatus'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'estatus' => 'Estatus',
        ];
    }
}
