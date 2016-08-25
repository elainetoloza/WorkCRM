<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var app\models\servicio $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="servicio-form">

    <?php $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

    'model' => $model,
    'form' => $form,
    'columns' => 1,
    'attributes' => [

'id'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter ID...', 'maxlength'=>100]], 

'codigo'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Codigo...', 'maxlength'=>100]], 

'nombre'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Nombre...', 'maxlength'=>100]], 

'descripcion'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Descripcion...', 'maxlength'=>100]], 

'precio'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Precio...']], 

    ]


    ]);
    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']);
    ActiveForm::end(); ?>

</div>
