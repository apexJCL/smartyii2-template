<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- It renders the header/navbar  -->
<?= $this->render(
    '_header.tpl',
    [ // smarty variables
        'home'      =>  Yii::t('app', 'home'),
        'about'     =>  Yii::t('app', 'about'),
        'sign_up'   =>  Yii::t('app', 'sign_up'),
        'login'     =>  Yii::t('app', 'login')
    ]
) ?>

<main class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</main>

<?= $this->render(
    '_footer.tpl',
    [ // smarty variables
        'footer_title'          =>  Yii::t('app', 'footer_title'),
        'footer_links'          =>  Yii::t('app', 'footer_links'),
        'footer_description'    =>  Yii::t('app', 'footer_description')
    ]
) ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
