<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\shop\models\Orders $model */
/** @var backend\modules\shop\models\Orders $statuses */

$this->title = 'Update Orders: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

?>
<div class="orders-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'statuses' => $statuses,
    ]) ?>

</div>
