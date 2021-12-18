<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'New Home Page';
?>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'size') ?>
    <?= $form->field($model, 'enabled') ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">PHP 8 Exercise!</h1>

        <p class="lead">Plus Yii framework...</p>

        <p><a class="btn btn-lg btn-success" href="https://github.com/khaleghi/php-exercise">See codes on github</a></p>
    </div>

</div>
