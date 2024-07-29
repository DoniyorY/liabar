<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

$baseUrl = Yii::$app->request->baseUrl;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?= $baseUrl . '/images/favicon.png' ?>">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100 <?= (Yii::$app->controller->action->uniqueId === 'site/menu') ? 'menu_background' : '' ?>">
    <?php $this->beginBody() ?>

    <header>
        <?php
        NavBar::begin([
            'brandLabel' => Html::img($baseUrl . '/images/logo.png', ['alt' => 'logo', 'class' => 'logo-img']),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark',
            ],
        ]);
        $menuItems = [
            ['label' => 'Menu', 'url' => ['/site/menu']],
            ['label' => 'Events', 'url' => ['/site/events']],
            ['label' => 'Contacts', 'url' => '#contacts'],
        ];

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0 '],
            'items' => $menuItems,
        ]);
        echo Html::tag('div', Html::a('Reservations', '#', ['class' => ['btn btn_outline text-decoration-none']]), ['class' => ['d-flex']]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </main>

    <footer class="footer mt-auto py-3 text-muted" id="contacts">
        <div class="container footer_main">
            <div class="row">
                <div class="col-md-4 footer_menu">
                    <ul>
                        <li style="margin: 0;"><a href="<?= Yii::$app->homeUrl ?>">Main</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['site/menu']) ?>">Menu</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['site/events']) ?>">Events</a></li>
                        <li><a href="#contacts">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Address</h3>
                    <p class="mt-5">
                        Rowing canal <br>
                        Samarkand <br>
                        Uzbekistan
                    </p>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <table class="table-sm">
                        <tr>
                            <td>Monday</td>
                            <td>Closed</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>Closed</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>18:00 – 02:00</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>18:00 – 02:00</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>18:00 – 02:00</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>18:00 – 02:00</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>18:00 – 02:00</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
