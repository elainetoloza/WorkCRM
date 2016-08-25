<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicio".
 *
 * @property string $id
 * @property string $codigo
 * @property string $nombre
 * @property string $descripcion
 * @property double $precio
 */
class Servicio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servicio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'codigo', 'nombre', 'descripcion', 'precio'], 'required'],
            [['precio'], 'number'],
            [['id', 'codigo', 'nombre', 'descripcion'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigo' => 'Codigo',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'precio' => 'Precio',
        ];
    }
}
