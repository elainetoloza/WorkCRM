<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleado".
 *
 * @property string $id
 * @property string $cedula
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono
 * @property string $sexo
 * @property string $estatus
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cedula', 'nombre', 'apellido', 'direccion', 'telefono', 'sexo', 'estatus'], 'required'],
            [['id', 'cedula', 'nombre', 'apellido', 'direccion', 'telefono', 'sexo', 'estatus'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cedula' => 'Cedula',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'sexo' => 'Sexo',
            'estatus' => 'Estatus',
        ];
    }
}
