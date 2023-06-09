<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\shop\models\Statuses $model */

$this->title = 'Create Statuses';
$this->params['breadcrumbs'][] = ['label' => 'Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statuses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
