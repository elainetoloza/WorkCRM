<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organizacion".
 *
 * @property string $id
 * @property string $rif
 * @property string $nombre
 * @property string $descripcion
 * @property string $direccion
 * @property string $telefono
 * @property string $correo
 * @property string $subdominio
 */
class Organizacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organizacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rif', 'nombre', 'descripcion', 'direccion', 'telefono', 'correo', 'subdominio'], 'required'],
            [['id', 'rif', 'nombre', 'direccion', 'telefono', 'correo', 'subdominio'], 'string', 'max' => 100],
            [['descripcion'], 'string', 'max' => 140]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rif' => 'Rif',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
            'subdominio' => 'Subdominio',
        ];
    }
}
