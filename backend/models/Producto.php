<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property string $id
 * @property string $codigo
 * @property string $nombre
 * @property string $descripcion
 * @property double $precio
 * @property string $estatus
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'codigo', 'nombre', 'descripcion', 'precio', 'estatus'], 'required'],
            [['precio'], 'number'],
            [['id', 'codigo', 'nombre', 'descripcion', 'estatus'], 'string', 'max' => 100]
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
            'estatus' => 'Estatus',
        ];
    }
}
