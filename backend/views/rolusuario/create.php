<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\rolusuario $model
 */

$this->title = 'Create Rolusuario';
$this->params['breadcrumbs'][] = ['label' => 'Rolusuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolusuario-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
