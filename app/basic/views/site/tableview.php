<?php $this->title = 'Home Page'; ?>
<div class="site-index">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Database Model<br />(MariaDB with MySQL Driver)</h1>
        <p class="lead">Load and show `test` Table in <?= Yii::$app->db->dsn ?></p>
    </div>
</div>
<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->registerCssFile("@web/css/my.css", [], 'mycss');
?>
<ul>
<?php foreach ($ctypes as $ctype): ?>
    <li class="<?= $ctype->enabled? "": "disable" ?>" >
        <?= Html::encode("{$ctype->name}") ?>: <?= $ctype->size ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
