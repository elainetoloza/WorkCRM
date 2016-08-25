<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var app\models\organizacion $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="organizacion-form">

    <?php $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

    'model' => $model,
    'form' => $form,
    'columns' => 1,
    'attributes' => [

'id'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter ID...', 'maxlength'=>100]], 

'rif'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Rif...', 'maxlength'=>100]], 

'nombre'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Nombre...', 'maxlength'=>100]], 

'descripcion'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Descripcion...', 'maxlength'=>140]], 

'direccion'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Direccion...', 'maxlength'=>100]], 

'telefono'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Telefono...', 'maxlength'=>100]], 

'correo'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Correo...', 'maxlength'=>100]], 

'subdominio'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Subdominio...', 'maxlength'=>100]], 

    ]


    ]);
    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']);
    ActiveForm::end(); ?>

</div>
