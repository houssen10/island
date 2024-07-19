<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\dashboard\models\Causes $model */

$this->title = 'Create Causes';
$this->params['breadcrumbs'][] = ['label' => 'Causes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="causes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
