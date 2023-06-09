<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\modules\shop\models\Orders $model */
/** @var backend\modules\shop\models\Orders $statuses */
/** @var yii\widgets\ActiveForm $form */

// Extract status IDs and names to populate the dropdown
$statusList = \yii\helpers\ArrayHelper::map($statuses, 'id', 'name');
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'status_id')->dropDownList($statusList,['prompt'=>'Select Status']); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
