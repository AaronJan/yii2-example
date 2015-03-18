<?php
use yii\helpers\Html;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $javascript string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>

    <link rel="stylesheet" type="text/css" href="/bower/semantic-ui/dist/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/app.css" />

    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <?= $content ?>

    <script src="/bower/jquery/dist/jquery.min.js"></script>
    <script src="/bower/semantic-ui/dist/semantic.min.js"></script>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>