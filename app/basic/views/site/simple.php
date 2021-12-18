<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Simple Model';
?>
<div class="site-index">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Simple Model</h1>
        <p class="lead">Simple data model that render as form:</p>
    </div>
</div>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'size') ?>
    <?= $form->field($model, 'enabled') ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>